<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInventory;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ItemController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $products = UserInventory::all();
        return view('items.items', compact('products'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('shop.cart');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = UserInventory::findOrFail($id);


        try {
            $cart = session()->get('cart', []);
        } catch (NotFoundExceptionInterface|ContainerExceptionInterface $e) {
            Log::error('Cart not found');
        }

        if(isset($cart[$id])) {
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
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id & $request->quantity){
            try {
                $cart = session()->get('cart');
            } catch (NotFoundExceptionInterface|ContainerExceptionInterface $e) {
                Log::error('Cart not found');
            }
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
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
