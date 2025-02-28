<?php

namespace App\Http\Controllers;

use App\Models\UserInventory;
use Illuminate\Http\Request;

class UserInventoryController extends Controller
{
    public function search(Request $request)
    {
        // Validate the search input
        $query = $request->input('query');

        $query = strip_tags($query); // Strip HTML tags

        // Fetch items where either the related user's name matches or any of the item attributes match
        $all_items = UserInventory::whereHas('user', function ($q) use ($query) {
            $q->where('name', 'LIKE', "%{$query}%");
        })
            ->orWhere('item_name', 'LIKE', "%{$query}%")
            ->orWhere('game', 'LIKE', "%{$query}%")
            ->orWhere('rarity', 'LIKE', "%{$query}%")
            ->with('user') // Eager load the user relationship to avoid N+1 queries
            ->paginate(10);

        // Append the search query to pagination links
        $all_items->appends(['query' => $query]);

        // Return the view with the search results
        return view('search.results', compact('all_items'));
    }

    public function predictiveSearch(Request $request)
    {
        // Validate input
        $query = $request->input('query');

        // Basic validation to prevent SQL injection
        $query = strip_tags($query); // Strip HTML tags
        // Allow only specific characters
        $query = preg_replace('/[^\w\s\-.@]/', '', $query); // Strip invalid characters

        // Fetch matching items
        $results = UserInventory::where('item_name', 'LIKE', "%{$query}%")
            ->orWhereHas('user', function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%");
            })
            ->orWhere('game', 'LIKE', "%{$query}%")
            ->orWhere('rarity', 'LIKE', "%{$query}%")
            ->limit(10) // Limit results for better performance
            ->get(['item_name']);

        return response()->json($results);
    }

    public function showItems(){
        $all_items = UserInventory::inRandomOrder()->paginate(20);

        return view('items.items', compact('all_items'));
    }


}

