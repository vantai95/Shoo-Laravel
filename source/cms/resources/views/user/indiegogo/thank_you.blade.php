@extends('layouts.user.app')

@section('content')
    <div class="container indiegogo normalize-font-size" >

        <div class="text-center thank-you-page">
            <div class="ss-blog-post kt-blog-post">
                <div class="mg-t20">
                    <h2>{{ @trans("pages.indiegogo.thank_you_your_pre_order")}}</h2>
                    <h4>{{ @trans("pages.indiegogo.thank_you_thank_you_for")}}</h4>
                    <h4>{{ @trans("pages.indiegogo.thank_you_your_pre_order_is_confirmed")}}</h4>
                    <h4><a href="https://shoex.net">{{ @trans("pages.indiegogo.thank_you_back_to")}}</a></h4>
                </div>
            </div>

        </div>

    </div>
@endsection
