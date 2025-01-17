<!DOCTYPE html>
<html lang="en">
<body>

@include('nav')


<div class="wrapper">
    <div class="search-bar">
        <form id="search-form" action="{{ route('search') }}" method="GET">
            @csrf
            <input type="text" id="search-input" name="query" placeholder="Search for items or users..."
                   autocomplete="off">
            <button type="submit">Search</button>
            <div id="suggestions" class="suggestions-list"></div>
        </form>


    </div>

    <!-- Item Showcase -->
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
                        <p>Status: {{ $item->status }}</p>
                        <p>Sold by: {{ $item->user->name }}</p>
                        <div class="trade-button">
                            @auth
                                @if(auth()->user()->id == $item->seller->id)
                                    <a disabled>You cannot trade with yourself</a>
                                @else
                                    <a href="{{ route('showForm', ['item_id' => $item->id, 'trader_id' => $item->seller->id]) }}">Trade</a>
                                @endif
                            @else
                                <a href="{{ route('login') }}">Trade</a>
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="pagination">
                {{ $all_items->links() }}
            </div>
        @else
            <p>No items found.</p>
        @endif
    </div>
</div>

</body>
</html>
