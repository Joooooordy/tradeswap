<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class Cart extends Component
{
    public $cartItems = [];
    public $totalPrice = 0;

    // Initialize cart
    public function mount()
    {
        $userID = auth()->id();  // Get the authenticated user ID
        $this->cartItems = $this->getCartItems($userID);
        $this->calculateTotal();
    }

    // Add item to the cart (session or cookie)
    public function addToCart($itemId, $itemName, $itemPrice, $quantity = 1)
    {
        $userID = auth()->id();

        if ($userID) {
            // Add to session for authenticated users
            $this->addToSessionCart($userID, $itemId, $itemName, $itemPrice, $quantity);
        } else {
            // Add to guest cart (cookie)
            $this->addToGuestCart($itemId, $itemName, $itemPrice, $quantity);
        }

        $this->cartItems = $this->getCartItems($userID);
        $this->calculateTotal();

        // Emit event to notify frontend of the cart update
        $this->emit('cartUpdated');
    }

    // Remove item from the cart (session or cookie)
    public function removeFromCart($itemId)
    {
        $userID = auth()->id();

        if ($userID) {
            // Remove from session for authenticated users
            $this->removeFromSessionCart($userID, $itemId);
        } else {
            // Remove from guest cart (cookie)
            $this->removeFromGuestCart($itemId);
        }

        $this->cartItems = $this->getCartItems($userID);
        $this->calculateTotal();

        // Emit event to notify frontend of the cart update
        $this->emit('cartUpdated');
    }

    // Helper to calculate total price of items in the cart
    private function calculateTotal()
    {
        $this->totalPrice = 0;
        foreach ($this->cartItems as $item) {
            $this->totalPrice += $item['price'] * $item['quantity'];
        }
    }

    // Helper function to get cart items (from session or cookie)
    private function getCartItems($userID)
    {
        if ($userID) {
            return session('cart.' . $userID, []);
        } else {
            $cartData = request()->cookie('shopping_cart');
            return $cartData ? json_decode($cartData, true) : [];
        }
    }

    // Helper function to add items to the session-based cart
    private function addToSessionCart($userID, $itemId, $itemName, $itemPrice, $quantity)
    {
        $cart = session('cart.' . $userID, []);
        $cart[] = [
            'id' => $itemId,
            'name' => $itemName,
            'price' => $itemPrice,
            'quantity' => $quantity,
        ];

        session(['cart.' . $userID => $cart]);
    }

    // Helper function to add items to the guest cart (cookie)
    private function addToGuestCart($itemId, $itemName, $itemPrice, $quantity)
    {
        $cartData = request()->cookie('shopping_cart');
        $cart = $cartData ? json_decode($cartData, true) : [];

        $cart[] = [
            'id' => $itemId,
            'name' => $itemName,
            'price' => $itemPrice,
            'quantity' => $quantity,
        ];

        Cookie::queue('shopping_cart', json_encode($cart), 60);  // Store for 60 minutes
    }

    // Helper function to remove an item from the session cart
    private function removeFromSessionCart($userID, $itemId)
    {
        $cart = session('cart.' . $userID, []);
        $cart = array_filter($cart, fn($item) => $item['id'] !== $itemId);
        session(['cart.' . $userID => array_values($cart)]);
    }

    // Helper function to remove an item from the guest cart (cookie)
    private function removeFromGuestCart($itemId)
    {
        $cartData = request()->cookie('shopping_cart');
        $cart = $cartData ? json_decode($cartData, true) : [];

        $cart = array_filter($cart, fn($item) => $item['id'] !== $itemId);

        Cookie::queue('shopping_cart', json_encode(array_values($cart)), 60);  // Store for 60 minutes
    }

    // Render the cart component
    public function render()
    {
        return view('livewire.cart');
    }
}
