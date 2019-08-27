@extends('layouts.user.app')

@section('content')
    <div class="container indiegogo normalize-font-size" >

        <div class="text-center thank-you-page">
            <div class="ss-blog-post kt-blog-post">
                <div class="mg-t20">
                    <h2 style="color: #ffc82e">{{@trans("pages.shopping_cart.payment_pending.title")}}</h2>
                    <h4><a href="http://virtusshoes.com">{{@trans("pages.shopping_cart.payment_pending.return")}} virtusshoes.com</a></h4>
                </div>
            </div>

        </div>

    </div>
@endsection
