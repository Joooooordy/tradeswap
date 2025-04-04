@include('templates.nav')

<div class="wrapper">
    <div class="item-showcase">
        @if($all_items->count())
            <div class="items-grid">
                @foreach($all_items as $item)
                    <div class="item">
                        <div class="item-image">
                            <img class="item-icon" src="{{$item->icon_url}}" alt="icon.png"/>
                        </div>
                        <h3>{{ $item->item_name }}</h3>
                        <p>Game: {{ $item->game }}</p>
                        <p>Rarity: {{ $item->rarity }}</p>
                        <p>Price: € {{ $item->price }}</p>
                        <p>Sold by: {{ $item->user->name }}</p>
                        <div class="shop-buttons">
                            <div class="add-to-cart-button">
                                <a href="{{ route('addToCart', $item->id) }}" class="add-to-cart"
                                   data-id="{{$item->id}}"
                                   role="button">Add to cart</a>
                            </div>
                            <div class="add-to-list-button">
                                <a href="{{ route('addToList', $item->id) }}" class="add-to-list"
                                   data-id="{{$item->id}}"
                                   role="button">
                                    <svg class="heart" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path
                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No items found.</p>
        @endif
    </div>

    <div class="pagination">
        {{ $all_items->links() }}
    </div>
</div>

@include('templates.footer')
