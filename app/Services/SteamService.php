<?php

namespace App\Services;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SteamService
{
    protected $apiKey;
    protected $steamId;

    public function __construct($steamId)
    {
        $this->apiKey = env('STEAM_API_KEY');
        $this->steamId = $steamId;
    }

    public function getPlayerName()
    {
        $response = Http::get("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/", [
            'key' => $this->apiKey,
            'steamids' => $this->steamId,
        ]);

        return $response->json()['response']['players'][0]['personaname'] ?? 'Unknown';
    }

    public function getOwnedGames()
    {
        $response = Http::get("http://api.steampowered.com/IPlayerService/GetOwnedGames/v0001/", [
            'key' => $this->apiKey,
            'steamid' => $this->steamId,
            'format' => 'json'
        ]);

        return $response->json()['response']['games'] ?? [];
    }

    public function getPlayerItems($steamId, $appId)
    {
        $url = "http://steamcommunity.com/inventory/{$steamId}/{$appId}/2?l=english&count=5000";
        $maxRetries = 3;
        $attempt = 0;

        while ($attempt < $maxRetries) {
            try {
                $response = Http::timeout(60)->get($url);

                // If the request fails, log and handle retry logic
                if ($response->failed()) {
                    Log::warning("Attempt {$attempt} failed: API request returned status {$response->status()}", [
                        'steam_id' => $steamId,
                        'app_id' => $appId,
                    ]);

                    $attempt++;
                    if ($attempt >= $maxRetries) {
                        Log::error('Max retries reached. Unable to fetch player inventory.', [
                            'steam_id' => $steamId,
                            'app_id' => $appId,
                        ]);
                        return [];
                    }

                    sleep(1); // Wait before retrying
                    continue;
                }

                // Check if the inventory is private or inaccessible
                if ($response->status() === 403) { // HTTP 403 Forbidden
                    Log::info('Inventory is private or inaccessible.', [
                        'steam_id' => $steamId,
                        'app_id' => $appId,
                    ]);
                    return []; // Return an empty array for private inventories
                }

                break; // Exit loop if successful
            } catch (ConnectionException $e) {
                $attempt++;
                Log::warning("Connection attempt {$attempt} failed: {$e->getMessage()}");

                if ($attempt >= $maxRetries) {
                    Log::error('Max retries reached. Unable to fetch player inventory due to connection errors.', [
                        'steam_id' => $steamId,
                    ]);
                    return [];
                }

                sleep(1); // Wait before retrying
            }
        }

        // Parse the response JSON
        $data = $response->json();
        if (!$data) {
            Log::error('Failed to parse response JSON.', [
                'steam_id' => $steamId,
                'app_id' => $appId,
                'response_body' => $response->body(),
            ]);
            return [];
        }

        $assets = $data['assets'] ?? [];
        $descriptions = $data['descriptions'] ?? [];

        // Map descriptions to classid_instanceid for easy lookup
        $itemMap = [];
        foreach ($descriptions as $description) {
            $key = $description['classid'] . '_' . $description['instanceid'];
            $itemMap[$key] = $description;
        }

        // Prepare the items array to return
        $items = [];
        foreach ($assets as $asset) {
            $key = $asset['classid'] . '_' . $asset['instanceid'];
            if (isset($itemMap[$key])) {
                $items[] = [
                    'classid' => $asset['classid'],
                    'instanceid' => $asset['instanceid'],
                    'market_name' => $itemMap[$key]['market_name'] ?? 'Unknown Item',
                    'tradable' => $itemMap[$key]['tradable'] ?? 0,
                    'descriptions' => $itemMap[$key], // Include the description data
                ];
            } else {
                Log::warning('Item mapping not found for classid and instanceid:', [
                    'classid' => $asset['classid'],
                    'instanceid' => $asset['instanceid'],
                ]);
            }
        }

        return $items;
    }


    public function getExteriorFromItem($item)
    {
        $exterior = 'Unknown';

        // Check if descriptions are available in the item
        if (isset($item['descriptions']['descriptions']) && is_array($item['descriptions']['descriptions'])) {
            // Loop through descriptions to find the exterior condition
            foreach ($item['descriptions']['descriptions'] as $description) {
                // Check for the exterior condition in the description
                if (isset($description['value']) && str_contains($description['value'], 'Exterior:')) {
                    // Extract and set the exterior condition
                    $exterior = trim(str_replace('Exterior:', '', $description['value']));
                    break; // Exit loop once exterior is found
                }
            }
        } else {
            Log::warning('No descriptions found for item.', [
                'item_id' => $item['classid'] ?? 'Unknown',
            ]);
        }

        return $exterior; // Return the extracted exterior
    }

    public function getItemImageFromItem($item)
    {
        $iconUrl = null;

        // Check if the icon URL is available in the item data
        if (!empty($item['descriptions']['icon_url'])) {
            // Steam provides a relative URL, we need to prepend it with the base URL for images
            $iconUrl = 'https://community.cloudflare.steamstatic.com/economy/image/' . $item['descriptions']['icon_url'];
        } else {
            Log::warning('No icon URL found for item.', [
                'item_id' => $item['classid'] ?? 'Unknown',
            ]);
        }

        return $iconUrl; // Return the image URL or null if not found
    }

}
