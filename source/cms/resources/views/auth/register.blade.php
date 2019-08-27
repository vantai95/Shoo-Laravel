@extends('layouts.user.app')

@section('content')
    <div class="main-wrapper">
        <div class="container">
            <div class="mg-top main-container">
                <div class="kt-login-register">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div id="login-div" class="show">
                                <form action="{{ route('register') }}" class="login-form text-center" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group {{ $errors->has('full_name') ? ' has-error' : '' }}">
                                        <label>{{@trans("pages.register.name")}} <span class="special-digit">*</span></label>
                                        <input class="form-control" type="text" id="full_name"
                                               name="full_name" value="{{ old('full_name') }}">
                                        @if ($errors->has('full_name'))
                                            <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('full_name') }}</strong>
                                        </span>
                                        @endif
                                        {{-- <input type="text" value="{{ old('email') }}">--}}
                                    </div>
                                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label>{{@trans("pages.register.email")}} <span class="special-digit">*</span></label>
                                        <input class="form-control" type="text" placeholder="" id="email"
                                               name="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                        {{-- <input type="text" value="{{ old('email') }}">--}}
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label>{{@trans("pages.register.password")}} <span class="special-digit">*</span></label>
                                        <input class="form-control" type="password" id="password" name="password">
                                        @if ($errors->has('password'))
                                            <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>{{@trans("pages.register.confirm_password")}} <span class="special-digit">*</span></label>
                                        <input class="form-control" type="password" id="password-confirm"
                                               name="password_confirmation">
                                    </div>
                                    <div class="recaptcha form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                        <div id="recaptcha"></div>
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="recaptcha" style="text-align: left">
                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <br/>
                                    <div class="form-submit"><input type="submit" value="{{@trans("pages.register.register")}}"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra_scripts')

    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('recaptcha', {
                'sitekey' : '{{env('RECAPTCHA_KEY')}}'
            });
        };
    </script>

    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
            async defer>
    </script>

@endsection