<!DOCTYPE html>
<html lang="en">
<body>

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
                        <p>Price: €{{ $item->price }}</p>

                        <div class="actions">
                            <div class="cart">
                                <button wire:click="addToCart({{$item->id}})" class="add-to-cart"></button>
{{--                                <a href="#" class="add-to-cart" data-add-url="{{route('addToCart')}}" data-id="{{ $item->id }}" data-name="{{ $item->item_name }}" data-price="{{ $item->price }}">--}}
{{--                                   --}}
{{--                                </a>--}}
                            </div>
                            <div class="wish"></div>
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
</body>
</html>

