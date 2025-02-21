<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use App\Models\User;
use App\Models\UserInventory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class TradeController extends Controller
{

    public function showTrade(){
        $all_items = UserInventory::inRandomOrder()->paginate(20);

        return view('items.items', compact('all_items'));
    }

//    public function getUserItems($userId)
//    {
//        $items = UserInventory::whereHas('user', function ($query) use ($userId) {
//            $query->where('id', $userId);
//        })->get(['id', 'item_name']);
//
//        return response()->json(['items' => $items]);
//    }
//
//
//    public function showForm(Request $request)
//    {
//        $itemId = $request->get('item_id');
//        $traderId = $request->get('trader_id');
//
//        $item = UserInventory::findOrFail($itemId);
//        $trader = User::find($traderId);
//
//        $traderItems = UserInventory::whereHas('user', function ($query) use ($traderId) {
//            $query->where('id', $traderId);
//        })->get(['id', 'item_name']);
//
//
//        $currentUser = auth()->user();
//        $currentUserId = $currentUser->id;
//        $userItems = UserInventory::whereHas('user', function ($query) use ($currentUserId) {
//            $query->where('id', $currentUserId);
//        })->get(['id', 'item_name']);
//
//        return view('items.create', compact('item', 'trader', 'traderItems', 'userItems'));
//    }
//
//
//    // Create a new items
//    public function createTrade(Request $request)
//    {
//        // Validate the request
//        $validated = $request->validate([
//            'receiver_id' => 'required|exists:users,id',
//            'sender_item_id' => 'required|exists:user_inventories,id',
//            'receiver_item_id' => 'nullable|exists:user_inventories,id',
//        ]);
//
//        // Get the currently authenticated user (the sender)
//        $sender_id = Auth::id();
//
//        if ($validated['receiver_id'] == $sender_id) {
//            return response()->json(['error' => 'You cannot items with yourself'], 403);
//        }
//
//        // Check if the sender owns the item they are trying to items
//        $senderItem = UserInventory::where('id', $validated['sender_item_id'])
//            ->where('user_id', $sender_id)
//            ->first();
//
//        if (!$senderItem) {
//            return response()->json(['error' => 'You do not own this item'], 403);
//        }
//
//        // Create the items
//        Trade::create([
//            'sender_id' => $sender_id,
//            'receiver_id' => $validated['receiver_id'],
//            'sender_item_id' => $validated['sender_item_id'],
//            'receiver_item_id' => $validated['receiver_item_id'], // Can be null if no item is returned
//            'status' => 'pending',
//        ]);
//
//        return response()->json([
//            'message' => 'Trade created successfully!',
//            'redirect_url' => route('profile', ['id' => $sender_id]), // Return the URL to redirect to
//        ], 201);
//    }
//
//    // Accept a items
//    public function acceptTrade($trade_id)
//    {
//        // Find the items by ID and ensure it's pending
//        $items = Trade::where('id', $trade_id)
//            ->where('status', 'pending')
//            ->first();
//
//        if (!$items) {
//            return response()->json(['error' => 'items not found or already processed'], 404);
//        }
//
//        // Ensure the authenticated user is the receiver of the items
//        if (Auth::id() !== $items->receiver_id) {
//            return response()->json(['error' => 'You are not authorized to accept this items'], 403);
//        }
//
//        // Swap items between sender and receiver
//        $this->swapItems($items);
//
//        // Update the items status to accepted
//        $items->update(['status' => 'accepted']);
//
//        return response()->json([
//            'message' => 'Trade accepted!',
//            'items' => $items
//        ]);
//    }
//
//    // Helper method to swap the items
//    protected function swapItems(Trade $items)
//    {
//        // Swap the ownership of sender's item to receiver
//        $senderItem = UserInventory::find($items->sender_item_id);
//        $senderItem->update(['user_id' => $items->receiver_id]);
//
//        // If the receiver offered an item, swap ownership to sender
//        if ($items->receiver_item_id) {
//            $receiverItem = UserInventory::find($items->receiver_item_id);
//            $receiverItem->update(['user_id' => $items->sender_id]);
//        }
//    }
//
//    // Decline a items
//    public function declineTrade($trade_id)
//    {
//        // Find the items by ID and ensure it's pending
//        $items = Trade::where('id', $trade_id)
//            ->where('status', 'pending')
//            ->first();
//
//        if (!$items) {
//            return response()->json(['error' => 'items not found or already processed'], 404);
//        }
//
//        // Ensure the authenticated user is the receiver of the items
//        if (Auth::id() !== $items->receiver_id) {
//            return response()->json(['error' => 'You are not authorized to decline this items'], 403);
//        }
//
//        // Update the items status to declined
//        $items->update(['status' => 'declined']);
//
//        return response()->json([
//            'message' => 'Trade declined!',
//            'items' => $items
//        ]);
//    }
}
