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
                break;
            } catch (ConnectionException $e) {
                $attempt++;
                Log::warning("Attempt {$attempt} failed: {$e->getMessage()}");

                if ($attempt >= $maxRetries) {
                    Log::error('Max retries reached. Unable to fetch player summaries.', [
                        'steam_id' => $steamId,
                    ]);
                    return [];
                }

                sleep(1);
            }
        }

        if ($response->failed()) {
            Log::error('API request failed', [
                'status' => $response->status(),
                'body' => $response->body(),
                'steam_id' => $steamId,
                'app_id' => $appId,
            ]);
            return [];
        }

        $assets = $response->json()['assets'] ?? [];
        $descriptions = $response->json()['descriptions'] ?? [];

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
                Log::warning('Item mapping not found for classid and instanceid:', ['classid' => $asset['classid'], 'instanceid' => $asset['instanceid']]);
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
}
