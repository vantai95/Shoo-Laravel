@extends('layouts.user.app')

@section('content')
    <div class="container normalize-font-size  shipping-info cart-form">
        <div class="text-center thank-you-page">
            <div class="section col-sm-12 nopadding ">
                <h2>{{@trans("pages.shopping_cart.payment")}}</h2>
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
                    <div class="payment-process col-xs-3 ">
                        <div class="payment-circle chosen">
                            03
                        </div>
                        <div class="payment-title">{{@trans("pages.shopping_cart.checkout")}}</div>
                    </div>
                    <div class="payment-process col-xs-3 selected">
                        <div class="payment-circle">
                            04
                        </div>
                        <div class="payment-title">{{@trans("pages.shopping_cart.confirmation")}}</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 ss-blog-post kt-blog-post payment-result">
                <div class="mg-t20">
                    <div class="title" style="color: red;">{{@trans("pages.shopping_cart.payment_failed.title")}}</div>
                    <br><br>
                    <h4>{{ $error }}</h4>
                    <h4>{{@trans("pages.shopping_cart.payment_failed.description")}}</h4>
                    <h4><a href="http://virtusshoes.com">{{@trans("pages.shopping_cart.payment_failed.return")}}
                            virtusshoes.com</a></h4>
                </div>
            </div>
            <div class="nopadding cart-submit btn-list row ">
                <div class="nopadding pull-right col-sm-4 ">
                    <a href="/shoes-style">
                        <input class="btn btn-default " id="btn-con-shop" type="submit"
                               value="{{@trans("pages.shopping_cart.continue_shopping")}}">
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('extra_scripts')
    <script>
        $(document).ready(function () {
            redirectOtherPageWhenClickBackButton('/shopping/checkout');
        });
    </script>
@endsection