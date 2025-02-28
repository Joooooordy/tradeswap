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
                        <a href="{{ route('addToCart', $item->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a>
                    </div>
                @endforeach
            </div>
        @else
            <p>No items found.</p>
        @endif
    </div>
</div>

@include('templates.footer')
