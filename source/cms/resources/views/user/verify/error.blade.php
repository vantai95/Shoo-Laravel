@extends('layouts.user.app')

@section('content')
    <div class="container indiegogo normalize-font-size" >

        <div class="text-center thank-you-page">
            <div class="ss-blog-post kt-blog-post">
                <div class="mg-t20">
                    <h2 style="color: #ff002d">{{@trans("pages.verify.error.your_verify_account_error")}}</h2>
                    <h4>{{@trans("pages.verify.error.your_requested_not_avaiable")}}</h4>
                    <h4><a href="https://shoex.net">{{@trans("pages.verify.error.back_to")}} shoex.net</a></h4>
                </div>
            </div>

        </div>

    </div>
@endsection
