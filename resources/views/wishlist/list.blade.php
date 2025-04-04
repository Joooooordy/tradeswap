@include('templates.nav')

<div class="wrapper">
    <div class="change-name">
        <h1 class="lists">
            <span id="wishlist-name-text">{{ $wishlist->name }}</span>
            <a href="javascript:void(0);" id="edit-wishlist-name" data-id="{{ $wishlist->id }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none"
                     stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon>
                    <line x1="3" y1="22" x2="21" y2="22"></line>
                </svg>
            </a>
        </h1>

        <!-- Modal -->
        <div class="wishlist-modal" id="editModal" style="display: none;">
            <div class="wishlist-modal-content">
                <span class="wishlist-modal-close" id="closeModal">&times;</span>
                <h2>Edit Wishlist Name</h2>
                <input type="text" id="modal-wishlist-name"/><br>
                <div class="name-validation">
                    <small class="character">Minimum 1 character</small>
                    <small class="character-count">{{ strlen($wishlist->name) }}</small>
                </div>
                <div class="wishlist-modal-buttons">
                    <button id="save-wishlist-name" class="btn-save" disabled>Save</button>
                    <button id="cancel-wishlist-name" class="btn-cancel">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div class="item-showcase">
        @if($list_items->count())
            <!-- Check if there are any list items -->
            <div class="items-grid">
                @foreach($list_items as $list_item)
                    <!-- Loop through all list items -->
                    <div class="item">
                        <div class="item-image">
                            <img class="item-icon" src="{{ $list_item->item->icon_url }}" alt="icon.png"/>
                        </div>
                        <h3>{{ $list_item->item->item_name }}</h3>
                        <p>Game: {{ $list_item->item->game }}</p>
                        <p>Rarity: {{ $list_item->item->rarity }}</p>
                        <p>Price: € {{ $list_item->item->price }}</p>
                        <p>Sold by: {{ $list_item->item->user->name }}</p>
                        <div class="wishlist-shop-buttons">
                            <div class="add-to-cart-button">
                                <a href="{{ route('addToCart', $list_item->item_id) }}" class="add-to-cart"
                                   data-id="{{ $list_item->item_id }}" role="button">Add to cart</a>
                            </div>
                            <div class="remove-from-list-button">
                                <button class="remove-from-list" data-id="{{ $list_item->item_id }}">
                                    Remove from wishlist
                                </button>
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
