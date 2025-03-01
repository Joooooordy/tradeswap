@include('templates.nav')

<div class="wrapper">
    @if(session('cart'))
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
                        <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash"></i></button>
                    </td>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="150"
                                                                 class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>

                            <div class="col-sm-4">
                                <h6 class="nomargin">Sold by: {{ $details['user'] }}</h6>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
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
                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
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
            <tfoot>
            <tr>
                <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
            </tr>
            <tr>
                <td colspan="5" class="text-right">
                    <a href="{{ url('/shop') }}" class="btn continue-shopping"><i class="fa fa-angle-left"></i> Continue
                        Shopping</a>
                    <button class="btn btn-success">Checkout</button>
                </td>
            </tr>
            </tfoot>
        </table>
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
