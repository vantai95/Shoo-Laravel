@extends('layouts.user.app')
@section('content')
<div class="main-wrapper">
    <div class="container cart-empty">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p class="text-center">{{@trans('pages.user.cart_empty.there_is')}}</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <a href="/shoes-style">
                    <input class="btn btn-default " id="btn-con-shop" type="submit"
                    value="{{@trans('pages.shopping_cart.continue_shopping')}}"/>
                </a>
            </div>
        </div>
    </div>                          
</div>

@endsection

@section('extra_scripts')
    <script>
        $(document).ready( function() {
            localStorage.removeItem('cart_items_quantity');
            getQuantityItems($('.cart-number-items'));
        });
    </script>
@endsection