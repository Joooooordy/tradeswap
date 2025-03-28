<?php

namespace App\Http\Controllers;

use App\Models\WishlistItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\UserInventory;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class CartController extends Controller
{
    /**
     * Write code on Method
     *
     * @return Application|Factory|\Illuminate\View\View|View()
     */
    public function index()
    {
        $products = UserInventory::all();
        return view('items.items', compact('products'));
    }

    /**
     * Write code on Method
     *
     * @return Factory|View|Application|\Illuminate\View\View()
     */
    public function cart()
    {
        $all_items = UserInventory::inRandomOrder()->paginate(4);

        return view('shop.cart', compact('all_items'));
    }

    /**
     * Write code on Method
     *
     * @return JsonResponse()
     */
    public function addToCart($id)
    {
        $product = UserInventory::findOrFail($id);

        try {
            $cart = session()->get('cart', []);
        } catch (NotFoundExceptionInterface|ContainerExceptionInterface $e) {
            Log::error('Cart not found');
        }

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->item_name,
                "user" => $product->user->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->icon_url
            ];
        }

        session()->put('cart', $cart);

        return response()->json([
            'success' => true,
            'message' => 'Product added to cart successfully!',
            'cart_count' => count($cart),
            'cart_item' => [
                'name' => $product->item_name,
                'image' => $product->icon_url,
                'user' => $product->user->name,
            ]
        ]);
    }


    /**
     * Write code on Method
     *
     * @param Request $request
     * @return JsonResponse()
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function update(Request $request)
    {
        // Check if both id and quantity are provided in the request
        if ($request->has('id') && $request->has('quantity')) {
            try {
                // Get the cart from the session
                $cart = session()->get('cart', []);  // Provide a default empty array if cart doesn't exist

                // Check if the item exists in the cart
                if (isset($cart[$request->id])) {
                    // Update the quantity of the item
                    $cart[$request->id]["quantity"] = $request->quantity;

                    // Save the updated cart back to the session
                    session()->put('cart', $cart);

                    // Return a success response
                    return response()->json(['success' => true, 'message' => 'Cart updated successfully']);
                } else {
                    return response()->json(['success' => false, 'message' => 'Item not found in cart']);
                }
            } catch (\Exception $e) {
                // Log any exceptions
                Log::error('Error updating cart: ' . $e->getMessage());

                // Return an error response
                return response()->json(['success' => false, 'message' => 'An error occurred while updating the cart']);
            }
        }

        // If either id or quantity is missing from the request
        return response()->json(['success' => false, 'message' => 'Missing cart id or quantity']);
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            try {
                $cart = session()->get('cart');
            } catch (NotFoundExceptionInterface|ContainerExceptionInterface $e) {
                Log::error('Cart not found');
            }
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
