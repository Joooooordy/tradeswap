<!DOCTYPE html>
<html lang="en">
<body>

@include('templates.nav')


<div class="wrapper">
    <!-- Item Showcase -->
    <div class="item-showcase">
        @if($all_items->count())
            <div class="items-grid">
                <div class="info-tainer">
                    <div class="home-text">
                        <h2>Instant, Secure
                            CS2 Skin Trading</h2>
                        <h4>Trade CS2 (CS:GO) skins with fast trading bots</h4>
                        Tradeswap.test is the highest rated CS2 (CSGO) skin trading site.
                        The best trading bot for instant trades with the lowest fees.
                    </div>
                    <div class="start-trading-button">
                        <a href="/csgo/trade">Trade Items Now</a>
                        <p>Register now and get $5 bonus</p>
                    </div>
                </div>

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
                    </div>
                @endforeach
            </div>
        @else
            <p>No items found.</p>
        @endif
    </div>
</div>

@include('templates.footer')
</body>
</html>

