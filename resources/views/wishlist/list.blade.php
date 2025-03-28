@include('templates.nav')

<div class="wrapper">
    <h1 class="lists">Your Wishlists</h1>
    <div class="item-showcase">
        @if($list_items->count())  <!-- Check if there are any list items -->
        <div class="items-grid">
            @foreach($list_items as $item) <!-- Loop through all list items -->
            <div class="item">
                <div class="item-image">
                    <img class="item-icon" src="{{ $item->item->icon_url }}" alt="icon.png"/>
                </div>
                <h3>{{ $item->item->item_name }}</h3>
                <p>Game: {{ $item->item->game }}</p>
                <p>Rarity: {{ $item->item->rarity }}</p>
                <p>Price: € {{ $item->item->price }}</p>
                <p>Sold by: {{ $item->item->user->name }}</p>
                <div class="shop-buttons">
                    <div class="add-to-cart-button">
                        <a href="{{ route('addToCart', $item->item_id) }}" class="add-to-cart"
                           data-id="{{ $item->item_id }}" role="button">Add to cart</a>
                    </div>
                    <div class="remove-from-list-button">
                        <a href="{{ route('removeFromList', $item->item_id) }}" class="remove-from-list"
                           data-id="{{ $item->item_id }}" role="button">Remove from wishlist</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
            <p>No items found in this wishlist.</p>
        @endif
    </div>
</div>

@include('templates.footer')
