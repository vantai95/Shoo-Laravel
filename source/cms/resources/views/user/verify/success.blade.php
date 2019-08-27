@extends('layouts.user.app')

@section('content')
    <div class="container indiegogo normalize-font-size" >

        <div class="text-center thank-you-page">
            <div class="ss-blog-post kt-blog-post">
                <div class="mg-t20">
                    <h2 style="color: #095402">{{@trans("pages.verify.success.verify_account_confirmed")}}</h2>
                    <h4>{{@trans("pages.verify.success.thank_you_for_your_register")}}</h4>
                    <h4>{{@trans("pages.verify.success.your_acount_confirmed")}}</h4>
                    <h4><a href="https://shoex.net">{{@trans("pages.verify.success.back_to")}} shoex.net</a></h4>
                </div>
            </div>

        </div>

    </div>
@endsection
