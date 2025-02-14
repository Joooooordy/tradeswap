@extends('templates.page')

@section('content')
    <section class="profile-overview">
        <div class="container flex-row">
            <div class="col">
                <img src="/images/avatarTransparent.png" class="profile-picture">
            </div>

            <div class="col">
                <div class="group">
                    <h4>Username:</h4>
                    <span>{{ $user->name }}</span>
                </div>
                <div class="group">
                    <h4>Email:</h4>
                    <span>{{ $user->email }}</span>
                </div>
                <div class="group">
                    <h4>Role:</h4>
                    <span>{{ implode(', ', $user->getRoleNames()->toArray()) }}</span>
                </div>
                <div class="group">
                    <h4>User inventory:</h4>
                    <span>{{ count($user->userInventory) }} items</span>
                </div>
            </div>
        </div>
    </section>

    <div class="column flex-container">
        <section class="profile-skins">
            <h2>My Items</h2>
            <div class="item-profile-showcase">
                <div class="items-profile-grid">
                    @foreach ($user->userInventory as $item)
                        <div class="item-profile">
                            <h3>{{ $item->item_name }}</h3>
                            <p>Game: {{ $item->game }}</p>
                            <p>Rarity: {{ $item->rarity }}</p>
                            <p>Status: {{ $item->status }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="profile-trades">
            <h2>My Trades</h2>
            <div class="trade-showcase">
                <div class="trades-grid">
                    {{--sender--}}
                    @foreach ($user->sentTrades as $trade)
                        <div class="trade">
                            <h3>Sent: {{ $trade->senderItem->item_name }}</h3>
                            <i class="fas fa-exchange" style="font-size:25px; margin-bottom: 15px"></i>
                            <h3>Get: {{ $trade->receiverItem->item_name }}</h3>
                            <p>Status: {{$trade->status}}</p>
                            <p>To user: {{$trade->receiver->name}}</p>
                        </div>
                    @endforeach

                    {{--receiver--}}
                    @foreach ($user->receivedTrades as $trade)
                        @if($trade->status == 'accepted' || $trade->status == 'declined' )
                            <div class="trade">
                                <h3>Sent: {{ $trade->senderItem->item_name }}</h3>
                                <i class="fas fa-exchange" style="font-size:25px; margin-bottom: 15px"></i>
                                <h3>Get: {{ $trade->receiverItem->item_name }}</h3>
                                <p>Status: {{$trade->status}}</p>
                                <p>From user: {{$trade->sender->name}}</p>
                            </div>
                        @else
                            <div class="trade">
                                <h3>Sent: {{ $trade->senderItem->item_name }}</h3>
                                <i class="fas fa-exchange" style="font-size:25px; margin-bottom: 15px"></i>
                                <h3>Get: {{ $trade->receiverItem->item_name }}</h3>
                                <p>Status: {{$trade->status}}</p>
                                <p>From user: {{$trade->sender->name}}</p>
                                <div class="options">
                                    <a href="#" class="trade-action" id="yes"
                                       data-href="{{ route('accept', ['trade' => $trade->id]) }}">Accept</a>
                                    <a href="#" class="trade-action" id="no"
                                       data-href="{{ route('decline', ['trade' => $trade->id]) }}">Decline</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    </div>

@endsection
