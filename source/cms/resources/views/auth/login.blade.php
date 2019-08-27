@extends('layouts.user.app')
@section('content')

    <div class="main-wrapper">
        <div class="mg-top main-container">
            <div class="kt-login-register">
                <div class="row no-margin">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div id="login-div" class="show">

                            <form action="{{ route('login') }}" class="login-form text-center" method="POST">
                                {{ csrf_field() }}                               

                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label>{{@trans("pages.login.email_address")}} <span class="special-digit">*</span></label>
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
                                    <label>{{@trans("pages.login.password")}} <span class="special-digit">*</span></label>

                                    <input class="form-control" type="password" placeholder=""
                                           id="password"
                                           name="password">
                                    @if ($errors->has('password'))
                                        <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="group-checkbox">
                                    <input id="remember" type="checkbox" name="remember">
                                    <label for="remember">{{@trans("pages.login.keep_me_logged_in")}}</label>
                                </div>

                                <div class="recaptcha form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                    <div id="recaptcha"></div>
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="recaptcha" style="text-align: left">
                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="text-small row">
                                    <a href="redirect/facebook">FaceBook Login</a> | 
                                    <a href="redirect/google">Google Login</a>
                                </div>
                                <div class="form-submit  row"><input type="submit" value="{{@trans("pages.login.login")}}"></div>
                                <div class="text-small row">
                                    <span class="col-xs-12">{{@trans("pages.login.forgot_your_password")}}</span>
                                    <span  class="col-xs-12"><a href="{{ url('password/reset')}}" class="lost-password ">{{@trans("pages.login.reset_here")}}</a></span>
                                </div>
                                <div class="register-button row">
                                    <a href='{{ url('register') }}'>{{@trans("pages.login.register")}}</a>
                                </div>
                                {{--<div style="text-align: right">--}}
                                {{--<span class="special-digit">*</span> Indicates required field--}}
                                {{--</div>--}}
                            </form>
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

