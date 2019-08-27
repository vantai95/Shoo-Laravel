@extends('layouts.user.app')

@section('content')
    <div class="main-wrapper check-out cart-form shipping-info ">
        <div class="container">
            <div class="content">
                <div class="col-sm-12">
                    <div class="section col-sm-12 nopadding ">
                        <h2 style="margin-bottom: 50px">{{@trans("pages.shopping_cart.payment")}}</h2>
                        <div class="payment-header col-xs-12">
                            <div class="payment-process col-xs-3">
                                <div class="payment-circle chosen">
                                    01
                                </div>
                                <div class="payment-title">{{@trans("pages.shopping_cart.shopping_cart")}}</div>
                            </div>
                            <div class="payment-process col-xs-3">
                                <div class="payment-circle chosen">
                                    02
                                </div>
                                <div class="payment-title">{{@trans("pages.shopping_cart.shipping_info")}}</div>
                            </div>
                            <div class="payment-process col-xs-3 selected">
                                <div class="payment-circle">
                                    03
                                </div>
                                <div class="payment-title">{{@trans("pages.shopping_cart.checkout")}}</div>
                            </div>
                            <div class="payment-process col-xs-3">
                                <div class="payment-circle">
                                    04
                                </div>
                                <div class="payment-title">{{@trans("pages.shopping_cart.confirmation")}}</div>
                            </div>
                        </div>
                        <form action="\shopping\payments" id="payment-form" method="POST">
                            {{ csrf_field() }}
                            <div class="col-sm-8 p-0" style="padding-right: 50px !important;">
                                <div class="row info-input">
                                    <div class="col-sm-12 col-lg-4">
                                        <label>{{@trans("pages.check_out.card_number")}}<span
                                                    class="special-digit">*</span></label>
                                    </div>
                                    <div class="col-sm-12 col-lg-8" id="card-number-row">
                                        <input name="card-number" type="tel" class="input-check-out"
                                               size="16" minlength="14"
                                               data-stripe="number"
                                               placeholder="4242 4242 4242 4242"
                                               required/>
                                        <span class="card-icon"><img></span>
                                    </div>
                                </div>
                                <div class="row info-input">
                                    <div class="col-sm-12 col-lg-4">
                                        <label>{{@trans("pages.check_out.expiration")}} <span
                                                    class="special-digit">*</span></label>
                                    </div>
                                    <div class="col-sm-12 col-lg-8 text-center" style="display: inline-flex;">
                                        <input class="col-sm-5 text-center" name="card-expiry-month"
                                               id="card-expiry-month" type="tel"
                                               size="2" maxlength="2" minlength="2"
                                               data-stripe="exp_month" pattern="[0-9]+"
                                               required>
                                        <div class="col-sm-2" id="slash">/</div>
                                        <input class="col-sm-5 text-center" name="card-expiry-year"
                                               id="card-expiry-year" size="2"
                                               maxlength="2" minlength="2"
                                               data-stripe="exp_year" pattern="[0-9]+"
                                               type="tel" required>

                                    </div>
                                </div>
                                <div class="row info-input">
                                    <div class="col-sm-12 col-lg-4">
                                        <label>{{@trans("pages.check_out.cvc")}} <span
                                                    class="special-digit">*</span></label>
                                    </div>
                                    <div class="col-sm-12 col-lg-8">
                                        <input class="input-cvc col-sm-12" name="card-cvc" id="card-cvc"
                                               data-stripe="cvc"
                                               type="tel" size="3"
                                               maxlength="3" minlength="3" required>
                                    </div>
                                </div>
                                <div class="row info-input {{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                    <div class="col-sm-12 col-lg-12">
                                        <label>{{@trans("pages.check_out.payment_phone_number")}}
                                            <span class="special-digit">*</span></label></div>
                                    <div class="col-sm-12 col-lg-4"></div>
                                    <div class="col-sm-12 col-lg-8">
                                        <input class="input-check-out" type="text" id="phone_number" name="phone_number"
                                               pattern="[0-9]+"
                                               value="{{ old('phone_number') }}" required>
                                    </div>
                                    @if ($errors->has('phone_number'))
                                        <span class="help-block" style="text-align: left">
                                <strong>{{ $errors->first('phone_number') }}</strong>
                        </span>
                                    @endif
                                </div>
                                <!-- Used to display form errors. -->
                                <div id="card-errors" class="help-block card-errors" role="alert"></div>
                            </div>


                            <div class="col-sm-4 nopadding">
                                {{ csrf_field() }}
                                <div class="order-summary">
                                    <h3>{{@trans("pages.shopping_cart.order_summary")}}</h3>
                                    <hr/>
                                    <div class="sub-total">
                                        <h5>{{@trans("pages.shopping_cart.sub_total")}}</h5>
                                        <table class="item-detail list">
                                            @foreach ($selectedShoes as $key => $selectedShoe)
                                                <tr class='item{{$key}}'>
                                                    <td class='label'>{{$selectedShoe['shoe']->main_name}}</td>
                                                    <td class='price'>
                                                        {{CommonService::formatPriceBaseCodeExchange($selectedShoe['total_price'],$currencyCode,$exchangeRate) }}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                        <table class="item-detail">
                                            <tr class="shipping-fee">
                                                <td class="label">{{@trans("pages.shopping_cart.shipping_fee")}}</td>
                                                <td class="price">
                                                    {{CommonService::formatPriceBaseCodeExchange($orderCart['shipping_fee'],$currencyCode,$exchangeRate) }}</td>
                                            </tr>
                                        </table>

                                    </div>
                                    <div class="total">
                                        <h4 class="pull-left col-xs-5 nopadding">{{@trans("pages.shopping_cart.total")}}</h4>
                                        <div class="price col-xs-7">
                                            {{CommonService::formatPriceBaseCodeExchange($orderCart['total'],$currencyCode,$exchangeRate) }}</div>
                                    </div>

                                </div>
                                <div class="cart-submit btn-list ">
                                    <div class="col-sm-6 nopadding">
                                        <a href="/shoes-style">
                                            <input class="btn btn-default col-sm-4" id="btn-con-shop" type="submit"
                                                   value="{{@trans('pages.shopping_cart.continue_shopping')}}"/>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 nopadding">
                                    <!--<input class="btn btn-default col-sm-4" id="btn-checkout" type="submit"
                            value="{{@trans('pages.shopping_cart.shipping_info')}}" onclick="validCheckOut()"/>-->
                                        <input class="btn btn-default col-sm-4" id="btn-checkout" type="submit"
                                               value="{{@trans('pages.check_out.confirm_and_pay')}}"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br/>

@endsection

@section('extra_scripts')
    <script>
        $("#card-expiry-month").keyup(function (event) {
            var str = $(this).val();
            if (str == '01' || (str >= 10 && str <= 12)) {
                $('#card-expiry-year').focus();
            }
            else if (str > 1 && str < 10) {
                $(this).val("0" + parseInt(str));
                $(this).focus();
            }
            else if (str > 12) {
                $(this).val(str.substring(0, str.length - 1));
            }
        });

        $("#card-expiry-year").keyup(function (event) {
            if ($('#card-expiry-month').val() == '1')
                $('#card-expiry-month').val('01');
        });
        $("#card-cvc").keyup(function (event) {
            if ($('#card-expiry-year').val().length == 1)
                $('#card-expiry-year').val("0" + $('#card-expiry-year').val());
        });

    </script>

    <script src="https://js.stripe.com/v2/"></script>
    {{--<script src="https://js.stripe.com/v3/"></script>--}}
    <script>
        function setBrandIcon(imageTag, cardNumber) {
            var cards =
                [
                    {
                        'no':'4242','name':'visa'
                    },
                    {
                        'no':'4000','name':'visa-debit'
                    },
                    {
                        'no':'5555','name':'mastercard'
                    },
                    {
                        'no':'2223','name':'mastercard'
                    },
                    {
                        'no':'5200','name':'mastercard-2-series'
                    },
                    {
                        'no':'5105','name':'mastercard-debit'
                    },
                    {
                        'no':'3782','name':'american-express'
                    },
                    {
                        'no':'3714','name':'american-express'
                    },
                    {
                        'no':'6011','name':'discover'
                    },
                    {
                        'no':'3056','name':'diners-club'
                    },
                    {
                        'no':'3852','name':'diners-club'
                    },
                    {
                        'no':'3566','name':'JCB'
                    },
                    {
                        'no':'6200','name':'union-pay'
                    },
                    {
                        'no':'noname','name':'noname'
                    }
                ];
            imageTag.attr('src', '/images/cards_icon/noname.png' );
            for (i = 0; i < cards.length; i++ ) {
                if(cards[i].no === cardNumber) {
                    imageTag.attr('src', '/images/cards_icon/' + cards[i].name + '.png' );
                    break;
                }
            }
        }
        $(document).ready(function () {
            redirectOtherPageWhenClickBackButton('/shopping/shipping-info');
            $('.card-icon img').attr('src', '/images/cards_icon/noname.png' );
            $("input[name='card-number']").keyup( function (event) {
                // Switch brand logo
                var cardNumber = $(this).val();
                var imageTag = $('.card-icon img');
                if (cardNumber.length >= 4) {
                    setBrandIcon(imageTag, cardNumber.substring(0, 4));
                }
                else {
                    imageTag.attr('src', '/images/cards_icon/noname.png' );
                }
            });
            // inputs pattern
            formatInputType($("input[name='card-number']"), /[^0-9]/g);
            formatInputType($('#card-expiry-month'), /[^0-9]/g);
            formatInputType($('#card-expiry-year'), /[^0-9]/g);
            formatInputType($('#card-cvc'), /[^0-9]/g);
            formatInputType($('#phone_number'), /[^0-9]/g);

        });
        Stripe.setPublishableKey('{{env('STRIPE_KEY')}}');
        var stripeResponseHandler = function (status, response) {
            // Grab the form:
            var form = document.getElementById('payment-form');

            if (response.error) { // Problem!
                // Show the errors on the form:
                $("#btn-checkout").prop("disabled", false);
                $('#card-errors').text(response.error.message);
            } else { // Token was created!
                // Get the token ID:
                var token = response.id;

                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token);
                form.appendChild(hiddenInput);
                // Submit the form
                form.submit();
                $("#pageLoader").show();
            }
        };

        // Create a token when the form is submitted
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function (e) {
            $("#btn-checkout").prop("disabled", true);
            e.preventDefault();
            Stripe.card.createToken(form, stripeResponseHandler);
        });
    </script>
@endsection
