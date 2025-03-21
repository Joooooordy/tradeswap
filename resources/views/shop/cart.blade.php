@include('templates.nav')

<div class="wrapper">
    @if(session('cart'))
        <div class="cart-wrapper">
            <div class="cart-and-total">
                <!-- Cart Table -->
                <div class="cart-table">
                    <table id="cart" class="table table-hover table-condensed">
                        <thead>
                        <tr>
                            <th style="width:10%"></th>
                            <th style="width:50%">Product</th>
                            <th style="width:10%">Price</th>
                            <th style="width:8%">Quantity</th>
                            <th style="width:22%" class="text-center">Subtotal</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $total = 0; $count = count(session('cart')); $index = 0; @endphp
                        @foreach(session('cart') as $id => $details)
                            @php
                                $total += $details['price'] * $details['quantity'];
                                $index++;
                            @endphp
                            <tr data-id="{{ $id }}">
                                <td class="actions" data-th="">
                                    @csrf
                                    <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash"></i>
                                    </button>
                                </td>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100"
                                                                             height="150" class="img-responsive"/></div>
                                        <div class="col-sm-9">
                                            <h4 class="nomargin">{{ $details['name'] }}</h4>
                                        </div>

                                        <div class="col-sm-4">
                                            <h6 class="nomargin">Sold by: {{ $details['user'] }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">€ {{ $details['price'] }}</td>
                                <td data-th="Quantity">
                                    @csrf
                                    <select name="quantity" class="form-control quantity update-cart">
                                        @for ($i = 1; $i <= 10; $i++)
                                            <option value="{{ $i }}" {{ $details['quantity'] == $i ? 'selected' : '' }}>
                                                {{ $i }}
                                            </option>
                                        @endfor
                                    </select>
                                </td>
                                <td data-th="Subtotal" class="text-center">
                                    € {{ $details['price'] * $details['quantity'] }}</td>
                            </tr>

                            @if($index < $count)
                                <tr>
                                    <td colspan="5">
                                        <hr>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Total Section -->
                <div class="total">
                    <div class="total-summary">
                        <h2>Overview</h2>
                        <div class="total-item">
                            <span class="total-label" id="total-items">Items (<small>{{ Session::get($details['quantity']) }}</small>)</span>
                            <span class="total-value" id="cart-total-items">€ {{ $total }}</span>
                        </div>
                        <div class="total-item">
                            <span class="total-label">Shipping</span>
                            <span class="total-value">€ 0,00</span>
                        </div>
                        <div class="total-item">
                            <span class="total-label">Discount Code</span>
                            <span class="total-value">-</span>
                        </div>
                        <div class="total-item total-bold">
                            <span class="total-label">Total:</span>
                            <span class="total-value" id="cart-total">€ {{ $total }}</span>
                        </div>
                        <div class="total-item">
                            <span class="total-label">Welcome Bonus</span>
                            <span class="total-value">+5 points</span>
                        </div>
                    </div>
                    <div class="total-actions">
                        <a href="{{ url('/shop') }}" class="btn continue-shopping">
                            <i class="fa fa-angle-left"></i> Continue Shopping
                        </a>
                        <button class="btn btn-success">Checkout</button>
                    </div>

                    <i class="payment-icons-cart">
                        <svg class="icon">
                            <use xlink:href="svg/sprite.svg#paypal-svgrepo-com"></use>
                        </svg>
                        <svg class="icon">
                            <use xlink:href="svg/sprite.svg#ideal-svgrepo-com"></use>
                        </svg>
                        <svg class="icon">
                            <use xlink:href="svg/sprite.svg#visa-classic-svgrepo-com"></use>
                        </svg>
                        <svg class="icon">
                            <use xlink:href="svg/sprite.svg#mastercard-full-svgrepo-com"></use>
                        </svg>
                        <svg class="icon">
                            <use xlink:href="svg/sprite.svg#amex-svgrepo-com"></use>
                        </svg>
                        <svg class="icon">
                            <use xlink:href="svg/sprite.svg#apple-pay-svgrepo-com"></use>
                        </svg>
                        <svg class="icon">
                            <use xlink:href="svg/sprite.svg#google-pay-svgrepo-com"></use>
                        </svg>
                        <svg class="icon">
                            <use xlink:href="svg/sprite.svg#klarna-svgrepo-com"></use>
                        </svg>
                    </i>
                </div>
            </div>
        </div>

        <!-- Bought Together Section -->
        <div class="bought-together">
            <h2>Often bought together</h2>
            <div class="bought-together-items">
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
                        <div class="add-to-cart-button">
                            <a href="{{ route('addToCart', $item->id) }}" class="add-to-cart" data-id="{{$item->id}}"
                               role="button">Add to cart</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="noitems">
            <h3>Your cart is empty</h3>
            <p>Looks like you haven't added anything to your cart yet.</p>
            <a href="{{ url('/shop') }}" class="btn btn-primary">
                <i class="fa fa-shopping-cart"></i> Browse Products
            </a>
        </div>
    @endif
</div>


@include('templates.footer')
