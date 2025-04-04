<?php

namespace App\Http\Controllers;

use App\Models\UserInventory;
use App\Models\Wishlist;
use App\Models\WishlistItem;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ListController extends Controller
{
    public function showLists()
    {
        //get wishlists by userid
        $wishlists = Wishlist::where('user_id', Auth::id())->get();

        // get wishlist items
        $list_items = WishlistItem::with('item')->where('wishlist_id', $wishlists->first()->id)->get();

        $items = $wishlists->first()->items;

        return view('wishlist.index', compact('wishlists', 'list_items', 'items'));

    }

    public function showWishlist()
    {
        // Get the user's wishlists
        $wishlists = Wishlist::where('user_id', Auth::id())->get();

        // Check if there are any wishlists for the user
        if ($wishlists->isEmpty()) {
            return redirect()->route('some.route')->with('error', 'No wishlists found.');
        }

        // Get the first wishlist and its items
        $wishlist = $wishlists->first(); // Get the first wishlist
        $list_items = WishlistItem::where('wishlist_id', $wishlist->id)->get(); // Get all items in the first wishlist

        return view('wishlist.list', compact('wishlists', 'wishlist', 'list_items'));

    }

    public function addToList($id): JsonResponse
    {
        $product = UserInventory::findOrFail($id);

        try {
            // Check if the user already has a wishlist
            $wishlist = Wishlist::where('user_id', Auth::id())->first();

            // If no wishlist exists for the user, create one
            if (!$wishlist) {
                $wishlist = Wishlist::create([
                    'user_id' => Auth::id(),
                    'name' => 'My Wishlist', // You can customize this or allow the user to name it
                    'status' => 'private',  // Default to private
                ]);
            }

            // Check if the item already exists in the wishlist
            $existingItem = WishlistItem::where('wishlist_id', $wishlist->id)
                ->where('item_id', $id)
                ->first();

            if ($existingItem) {
                return response()->json([
                    'success' => false,
                    'message' => 'Product is already in your wishlist!',
                ], 400);
            }

            // Add the item to the wishlist
            $wishlistItem = WishlistItem::create([
                'wishlist_id' => $wishlist->id,
                'item_id' => $id,
            ]);

            $itemData = UserInventory::with('user')->where('id', $wishlistItem->item_id)->first();

            return response()->json([
                'success' => true,
                'message' => 'Product added to wishlist successfully!',
                'list_item' => [
                    'name' => $itemData->item_name,
                    'image' => $itemData->icon_url,
                    'price' => $itemData->item_price,
                    'user' => $itemData->user->name,
                ],
            ]);
        } catch (\Exception $e) {
            Log::error('Error adding item to wishlist: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while adding the product to your wishlist.',
            ], 500);
        }
    }

    public function remove($id)
    {
        try {
            // Find the item in the wishlist_item table
            $wishlistItem = WishlistItem::where('item_id', $id)
                ->whereHas('wishlist', function ($query) {
                    $query->where('user_id', Auth::id());
                })
                ->first();

            if ($wishlistItem) {
                $wishlistItem->delete();
                return response()->json(['success' => 'Item removed from wishlist']);
            } else {
                return response()->json(['error' => 'Item not found in your wishlist'], 404);
            }
        } catch (\Exception $e) {
            Log::error('Error removing item from wishlist: ' . $e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }


    public function updateName(Request $request, $id)
    {
        $wishlist = Wishlist::where('user_id', Auth::id())->where('id', $id)->firstOrFail();

        $request->validate([
            'name' => 'required|string|max:35',
        ]);

        $wishlist->name = $request->name;
        $wishlist->save();

        return response()->json(['success' => true]);
    }
}
