@extends('layouts.user.app')

@section('content')
    <div class="main-wrapper">
        <div class="container">
            <div class="content">
                <div class="col-sm-12">
                    <div class="cart-form">
                        <div class="section col-sm-12 nopadding ">
                            <h2 style="margin-bottom: 20px">{{@trans("pages.shopping_cart.payment")}}</h2>
                            <div class="payment-header col-xs-12">
                                <div class="payment-process col-xs-3 selected">
                                    <div class="payment-circle ">
                                       01
                                    </div>
                                    <div class="payment-title" >{{@trans("pages.shopping_cart.shopping_cart")}}</div>
                                </div>
                                <div class="payment-process col-xs-3">
                                    <div class="payment-circle">
                                       02
                                    </div>
                                    <div class="payment-title" >{{@trans("pages.shopping_cart.shipping_info")}}</div>
                                </div>
                                <div class="payment-process col-xs-3">
                                    <div class="payment-circle">
                                       03
                                    </div>
                                    <div class="payment-title" >{{@trans("pages.shopping_cart.checkout")}}</div>
                                </div>
                                <div class="payment-process col-xs-3">
                                    <div class="payment-circle">
                                       04
                                    </div>
                                    <div class="payment-title" >{{@trans("pages.shopping_cart.confirmation")}}</div>
                                </div>
                            </div>
                            <div class="col-sm-7 col-md-7 col-lg-8 p-0">
                                <div class="shoes-chosen">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th class="col-md-6 col-sm-4">{{@trans("pages.shopping_cart.shoe")}}</th>
                                            <th class="col-md-3 col-sm-4">{{@trans("pages.shopping_cart.unit_price")}}</th>
                                            <th class="col-md-3 col-sm-4">{{@trans("pages.shopping_cart.quantity")}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($selectedShoes as $key => $selectedShoe)
                                            <tr id="{{ $selectedShoe['order_id'] }}" class="item-info">
                                                <td class="col-md-6 col-sm-6 tablecell">
                                                    <div class="image col-sm-6 col-md-6">
                                                        <a href="#">
                                                            <img src="{{ $selectedShoe['shoe']->imageUrl() }}"/>
                                                        </a>
                                                    </div>
                                                    <div class="content col-sm-6 col-md-6  nopadding ">
                                                        <div class="name">
                                                            <a href="#">
                                                                {{ $selectedShoe['shoe']->main_name }}
                                                            </a>
                                                        </div>
                                                        <div class="size">
                                                        {{@trans("pages.shopping_cart.size")}}: {{ $selectedShoe['size']=="0" ? @trans("pages.shopping_cart.custom_fit") : $selectedShoe['size']  }}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col-md-3 col-sm-4">
                                                    <div class="base-price">
                                                    {{CommonService::formatPriceBaseCodeExchange($selectedShoe['price_unit'],$currencyCode,$exchangeRate)}}
                                                    <div class="custom-fit">{{ $selectedShoe['size']==0 ? CommonService::formatPriceBaseCodeExchange(100,$currencyCode,$exchangeRate) : "&nbsp;" }}</div>
                                                </td>
                                                <td class="col-md-6  col-sm-2 quantity-content">
                                                    <div class="quantity">
                                                        <div class="input-spinner">
                                                            <input type="text"  class="input-quantity" for="{{ $key }}"  value="{{ $selectedShoe['quantity'] }}" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                                            <div class="glificon">
                                                                <div>
                                                                    <i class="fa fa-sort-asc" aria-hidden="true"
                                                                       onclick="inputNumberIncr(event, this, {{ $selectedShoe['order_id'] }});"></i>
                                                                </div>
                                                                <div>
                                                                    <i class="fa fa-sort-asc icon" aria-hidden="true"
                                                                       onclick="inputNumberDerc(event, this, {{ $selectedShoe['order_id'] }});"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0);" data-toggle="tooltip"
                                                               title="{{@trans('pages.shopping_cart.delete')}}"
                                                               data-animation="false"
                                                               onclick="removeAnItem(event, this, {{ $selectedShoe['order_id'] }}, '{{@trans('pages.shopping_cart.delete_remove_a_shoe')}}', '{{@trans('pages.shopping_cart.delete_do_you_want')}}')">
                                                                <i class="fa fa-close text-inverse m-l-5 m-r-5"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <div class="col-sm-5 col-md-5 col-lg-4  nopadding">
                                    {{ csrf_field() }}
                                <div class="order-summary">
                                    <h3>{{@trans("pages.shopping_cart.order_summary")}}</h3>
                                    <hr/>
                                    <div class="sub-total">
                                        <h5>{{@trans("pages.shopping_cart.sub_total")}}</h5>
                                        <table class="item-detail list">

                                        </table>
                                        <table class="item-detail">
                                            <tr class="shipping-fee">
                                                <td class="label">{{@trans("pages.shopping_cart.shipping_fee")}}</td>
                                                <td class="price"></td>
                                            </tr>
                                        </table>

                                    </div>
                                    <div class="total">
                                        <h4 class="pull-left col-xs-5 nopadding">{{@trans("pages.shopping_cart.total")}}</h4>
                                        <div class="price col-xs-7"></div>
                                    </div>

                                </div>
                                <div class="cart-submit btn-list ">
                                    <div class="col-sm-6 nopadding cart">
                                        <a href="/shoes-style">
                                        <input class="btn btn-default col-sm-4" id="btn-con-shop" type="submit"
                                        value="{{@trans('pages.shopping_cart.continue_shopping')}}"/>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 nopadding cart">
                                        <!--<input class="btn btn-default col-sm-4" id="btn-checkout" type="submit"
                                        value="{{@trans('pages.shopping_cart.shipping_info')}}" onclick="validCheckOut()"/>-->
                                        <input class="btn btn-default col-sm-4" id="btn-checkout" type="submit"
                                        value="{{@trans('pages.shopping_cart.shipping_info')}}" onclick="validOrderCart()"/>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
@endsection

@section('extra_scripts')
    <!-- Bootbox -->
    <script src="<?php echo e(asset('theme/admin/js/bootbox.min.js')); ?>"></script>
    <script>
        $('.input-quantity').change(function() {
            var value = $(this).val();
            if ((value !== '') && (value.indexOf('.') === -1)) {
                $(this).val(Math.max(Math.min(value, 10), 1));
            }
            var value1 = $(this).val().replace(/[^0-9\.]+/g, '');
            if (value1 < 1)
                $(this).val(1);
            var orderId = $(this).closest('tr').attr('id');
            console.log(orderId);
            var orderCart = {!! json_encode($orderCart) !!};
            var cartItemsQuantity = JSON.parse(localStorage.getItem('cart_items_quantity'));
            changeQuantity(orderId, parseInt($(this).val()), function () {
                loadFormCart(orderCart.items);
            });

        });
        $(document).ready( function() {
            console.log('cart_items_quantity');
            console.log(JSON.parse(localStorage.getItem('cart_items_quantity')));
            console.log('---------------');
            var orderCart = {!! json_encode($orderCart) !!};
            console.log(orderCart);
            localStorage.setItem('order_cart', JSON.stringify(orderCart));
            initShoppingCart(orderCart.items);
            $(".table .image, .table .name").on('click', function() {
                var orderCart = {!! json_encode($orderCart) !!};
                var orderId = $(this).closest('tr').attr('id');
                $.each(orderCart.items, function (key, shoe) {
                    if(shoe.order_id == orderId ) {
                        console.log('founded order_id');
                        var shoeType = shoe.type;
                        var shoeStyle = shoe['shoe'].slug;
                        window.location = '/shoes-style-detail/'+ shoeType + '/' + shoeStyle;
                    }
                });
            });
        });
        function inputNumberIncr(event, element, orderId) {
            var quantityInput = $(element).closest('tr').find('input');
            var orderCart = {!! json_encode($orderCart) !!};
            if(parseInt(quantityInput.val()) + 1 <= 10) {
                changeQuantity(orderId, parseInt(quantityInput.val()) + 1, function() {
                    inputNumberIncrease( quantityInput, 1, 10);
                    loadFormCart(orderCart.items);
                });
            }
        }
        function inputNumberDerc(event, element, orderId){
            var quantityInput = $(element).closest('tr').find('input');
            var orderCart = {!! json_encode($orderCart) !!};
            // console.log('order_id = ' + orderId);
            if(parseInt(quantityInput.val()) - 1 >= 1) {
                changeQuantity(orderId, parseInt(quantityInput.val()) - 1, function () {
                    inputNumberDecrease( quantityInput, 1, 1);
                    loadFormCart(orderCart.items);
                });
            }
        }
        function changeQuantity(orderId, quantity, callback) {
            console.log('orderId: ' + orderId + ' , ' + 'quantity: ' + quantity);
            console.log('before changeQuantity');
            console.log(JSON.parse(localStorage.getItem('cart_items_quantity')));
            console.log('---------------------');
            var cartItemsQuantity = JSON.parse(localStorage.getItem('cart_items_quantity'));
            $.each(cartItemsQuantity.items, function (key, shoe) {
                // console.log(shoe.order_id + ' ' + shoe.quantity);
                if(shoe.order_id == orderId ) {
                    console.log('founded order_id');
                    shoe.quantity = quantity.toString();
                }
            });
            localStorage.setItem('cart_items_quantity', JSON.stringify(cartItemsQuantity));
            getQuantityItems($('.cart-number-items'));
            console.log('after changeQuantity');
            console.log(JSON.parse(localStorage.getItem('cart_items_quantity')));
            console.log('---------------------');
            callback.call();
        }
        function initShoppingCart(shoes) {

            loadFormCart(shoes);
        }
        function loadFormCart(shoes) {
            console.log(shoes);
            // Reset form cart
            $(".sub-total .list").text('');
            var cartItemsQuantity = JSON.parse(localStorage.getItem('cart_items_quantity'));
            // Set data to form cart
            $.each(shoes, function (key, shoe) {
                if (shoe) {
                    var shoeQuantity = shoe.quantity;
                    if ( localStorage.getItem('cart_items_quantity') != null ) {
                        $.each(cartItemsQuantity.items, function (key, shoeInClient) {
                            if(shoeInClient.order_id == shoe.order_id ) {
                                shoeQuantity = shoeInClient.quantity;
                            }
                        });
                    }
                    // set items quantity
                    console.log($('.shoes-chosen #' + shoe.order_id + ' .quantity .input-spinner input'));
                    $('.shoes-chosen #' + shoe.order_id + ' .quantity .input-spinner input').val(shoeQuantity);
                    // set data to SUB TOTAL section
                    var shoeCost = shoe['size'] == 0 ?
                        shoeQuantity * (shoe['price_unit'] + 100) : shoeQuantity * shoe['price_unit'];
                    shoeCost = formatPrice(shoeCost, {{$exchangeRate}},'{{$currencyCode}}');
                    var hlml = "<tr class='item'"  + " id=" + shoe.order_id +
                        "><td class='label'>" + shoe['shoe'].main_name +
                        "</td><td class='price'>"  + shoeCost +
                        "</td></tr>";
                    $(".sub-total .list").append(hlml);
                }
            });
            var shipFee = calShipFee(shoes);
            var subTotal = calSubTotal(shoes);
            var total = shipFee + subTotal;
            $(".shipping-fee .price").text('');
            $(".shipping-fee .price").append(formatPrice(shipFee,{{$exchangeRate}},'{{$currencyCode}}'));// Shipping fee
            $(".total .price").text('');
            $(".total .price").append(formatPrice(total,{{$exchangeRate}},'{{$currencyCode}}')); // Init total cost

            var orderCart = {!! json_encode($orderCart) !!};
            console.log(orderCart.shipping_fee);
            orderCart.shipping_fee = shipFee;
            orderCart.sub_total = subTotal;
            orderCart.total = total;
        }
        function removeAnItem(event, element, orderId, title, message) {
            event.preventDefault();
            bootbox.confirm({
                title: title,
                message: message,
                closeButton: false,
                buttons: {
                    confirm: {
                        label: '{{@trans("pages.shopping_cart.yes")}}',
                        className: 'btn-yes'
                    },
                    cancel: {
                        label: '{{@trans("pages.shopping_cart.no")}}',
                        className: 'btn-no'
                    }
                },
                callback: function (result) {
                    console.log(orderId);
                    if (result) {
                        var data = {
                            'order_id': orderId
                        };
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax("{{ url('/shopping/remove-from-cart') }}", {
                            type: 'POST',
                            dataType: 'json',
                            data: data,
                            success: function (response) {
                                if (response.status === 200) {
                                    var cartItemsQuantityOld = JSON.parse(localStorage.getItem('cart_items_quantity'));
                                    var cartItemsQuantity = {};
                                    cartItemsQuantity.isGift = cartItemsQuantityOld.isGift;
                                    cartItemsQuantity.items = [];
                                    $.each( cartItemsQuantityOld.items, function( key, shoe) {
                                        if(shoe.order_id === orderId.toString()) {
                                            // console.log('founded shoe');
                                        }
                                        else {
                                            cartItemsQuantity.items.push(shoe);
                                        }
                                    });
                                    console.log(cartItemsQuantity);
                                    localStorage.setItem('cart_items_quantity', JSON.stringify(cartItemsQuantity));
                                    // console.log(JSON.parse(localStorage.getItem('cart_items_quantity')));
                                    getQuantityItems($('.cart-number-items'));
                                    location.reload();
                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                if(jqXHR.status&&jqXHR.status==400){
                                    alert(jqXHR.responseText);
                                } else {
                                    alert("{{@trans("pages.shoes_style_detail.network_error")}}");
                                }
                            }
                        });
                    }
                }
            })
        }
        function calSubTotal(shoes) {
            var subTotal = 0;
            var cartItemsQuantity = JSON.parse(localStorage.getItem('cart_items_quantity'));
            $.each(shoes, function(key, shoe) {
                if(shoe) {
                    var shoeQuantity = shoe.quantity;
                    if ( localStorage.getItem('cart_items_quantity') != null ) {
                        $.each(cartItemsQuantity.items, function (key, shoeInClient) {
                            if(shoeInClient.order_id == shoe.order_id ) {
                                shoeQuantity = shoeInClient.quantity;
                            }
                        });
                    }
                    if (shoe['size'] == 0)
                        subTotal += shoeQuantity * (shoe['price_unit'] + 100);
                    else
                        subTotal += shoeQuantity * shoe['price_unit'];
                }
            });
            return subTotal;
        }
        function calShipFee(shoes) {
            var subTotal = calSubTotal(shoes);
            var cartItemsQuantity = JSON.parse(localStorage.getItem('cart_items_quantity'));
            if (subTotal == 0) // List Shoes is empty
                return 0;
            if (subTotal > 500)
                return 0;
            var numShoes = 0;
            $.each(shoes, function (key, shoe) {
                var shoeQuantity = shoe.quantity;
                if ( localStorage.getItem('cart_items_quantity') != null ) {
                    $.each(cartItemsQuantity.items, function (key, shoeInClient) {
                        if(shoeInClient.order_id == shoe.order_id ) {
                            shoeQuantity = shoeInClient.quantity;
                        }
                    });
                }
                if (shoe) numShoes += parseInt(shoeQuantity);
            });
            return 15 + (numShoes - 1) * 10; // 15$ for first pair, 10$ for other shoes
        }
    </script>
    <script>
        function validCheckOut() {
            window.location="/shopping/checkout";
        }
        function validOrderCart() {
            window.location="/shopping/shipping-info";
        }
    </script>
@endsection