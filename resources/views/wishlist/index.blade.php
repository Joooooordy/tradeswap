@include('templates.nav')

<div class="wrapper">
    <h1 class="lists">Lists</h1>

    <!-- Check if the user has any wishlists -->
    @if(isset($wishlists) && $wishlists->count() > 0)
        <div class="wishlist-grid">
            @foreach($wishlists as $list)
                <div class="wishlist-item">
                    @if ($items->isNotEmpty())
                        <div class="wishlist-header">
                            <img src="{{ $items->first()->item->icon_url }}" width="150" height="150"
                                 class="img-responsive"/>
                            <h2>{{ $list->name }}</h2>
                            <p><strong>{{'Items: ' . $list_items->count() . ' | ' . ucfirst($list->status) }}</strong>
                            </p>
                        </div>
                    @else
                        <p>No items in this list.</p>
                    @endif

                    <!-- Wishlist Actions -->
                    <div class="wishlist-actions">
                        <a href="{{ route('showWishlist', $list->id) }}" class="btn-view">View List</a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No wishlists found. <a href="{{ route('wishlist.create') }}" class="btn-create">Create a new wishlist</a></p>
    @endif
</div>

@include('templates.footer')
