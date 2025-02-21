<div>
    <h2>Shopping Cart</h2>

    @if (count($cartItems) == 0)
        <p>Your cart is empty.</p>
    @else
        <table>
            <thead>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($cartItems as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>${{ $item['price'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>
                        <button wire:click="removeFromCart('{{ $item['id'] }}')" class="btn btn-danger">Remove</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div>
            <strong>Total: ${{ number_format($totalPrice, 2) }}</strong>
        </div>

        <button wire:click="clearCart" class="btn btn-warning">Clear Cart</button>
    @endif
</div>
