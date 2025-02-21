<?php

namespace App\Console\Commands;

use App\Models\UserInventory;
use Illuminate\Console\Command;
use App\Services\SteamService;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class FetchSteamData extends Command
{
    // Command signature: no arguments required
    protected $signature = 'steam:fetch-data';

    // Description of the command
    protected $description = 'Fetch user inventory from Steam API for predefined Steam IDs if they own Counter-Strike 2';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Get Steam IDs from the configuration file
        $steamIds = config('steamids');

        // Get all users and ensure we don't exceed the number of steamIds
        $users = User::take(count($steamIds))->get();

        // Loop through each steamId and assign inventory to each user in order
        foreach ($steamIds as $index => $steamId) {
            // Get the corresponding user for this steamId
            if (!isset($users[$index])) {
                $this->error("No user available for Steam ID: $steamId");
                exit();
            }

            $user = $users[$index];

            // Create an instance of SteamService
            $steamService = new SteamService($steamId);

            // Get player name
            $name = $steamService->getPlayerName();
            $this->info('Fetching data for Steam ID: ' . $steamId . ' (Player: ' . $name . ') for user ID: ' . $user->id);

            // Get owned games
            $games = $steamService->getOwnedGames();

            // Check if the user owns Counter-Strike 2 (AppID: 730)
            $ownsCS2 = false;
            foreach ($games as $game) {
                if ($game['appid'] == 730) {
                    $ownsCS2 = true;
                    break;
                }
            }

            // If the user owns Counter-Strike 2, fetch and store inventory data
            if ($ownsCS2) {
                $this->info("User owns Counter-Strike 2. Fetching inventory...");

                // Fetch Counter-Strike 2 inventory
                $items = $steamService->getPlayerItems($steamId, 730);

                $itemLimit = array_slice($items, 0, 15);

                // Loop through limited items and insert into the database for the corresponding user_id
                foreach ($itemLimit as $item) {
                    // Initialize status and rarity
                    $status = 'unknown'; // Default status
                    $rarity = $steamService->getExteriorFromItem($item);
                    $icon = $steamService->getItemImageFromItem($item);

                    // Check if 'tradable' key exists and handle it
                    if (isset($item['tradable'])) {
                        if ($item['tradable'] == 1) {
                            $this->info("Item '{$item['market_name']}' is tradable.");
                            $status = 'te koop'; // "for sale" in Dutch
                        } else {
                            $this->info("Item '{$item['market_name']}' is not tradable.");
                            $status = 'te ruil'; // "for items" in Dutch
                        }
                    } else {
                        $this->info("The tradable key does not exist for item '{$item['market_name']}'.");
                    }

                    // Try to insert into the database
                    try {
                        UserInventory::create([
                            'user_id' => $user->id, // Assign inventory to the specific user_id
                            'item_name' => $item['market_name'] ?? 'Unknown Item', // Assuming item has a 'name' key
                            'game' => 'Counter-Strike 2',
                            'rarity' => $rarity,
                            'status' => $status,
                            'price' => mt_rand(1, 50000)/10,
                            'icon_url' => $icon,
                        ]);
                        $this->info("icon_url '$icon' found for item '{$item['market_name']}'.");
                        $this->info("Successfully inserted item '{$item['market_name']}' for user ID: {$user->id}.");
                    } catch (\Exception $e) {
                        $this->error("Failed to insert item '{$item['market_name']}' for user ID: {$user->id}: " . $e->getMessage());
                    }
                }

                $this->info("Inventory data has been successfully stored for user ID: {$user->id}.");
            } else {
                $this->info("User does not own Counter-Strike 2.");
            }
        }
    }
}
