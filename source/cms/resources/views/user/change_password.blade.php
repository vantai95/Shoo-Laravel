@extends('layouts.user.app')

@section('content')
    <div class="main-wrapper">
        <div class="container">
            <div class="mg-top main-container">
                <div class="kt-login-register">
                    <div class="row no-margin">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div id="login-div" class="show">
                                <form action="{{ url('user/my-profile/change-password') }}"
                                      class="login-form text-center" method="POST">
                                    {{ csrf_field() }}
                                    <div class="title-form" style="padding: 0px">
                                        <div class="col-sm-6" style="padding: 0px">
                                            <h3 class="loggin">{{@trans("pages.my_profile.change_password")}}</h3>
                                        </div>
                                        {{--<div class="col-sm-6" style="padding: 0px">--}}
                                        {{--<h4><a href="{{ url('/login')}}" class="register">Login</a></h4>--}}
                                        {{--</div>--}}
                                    </div>
                                    <div class="form-group {{ $errors->has('old_password') ? ' has-error' : '' }}">
                                        <label>{{@trans("pages.my_profile.current_password")}} <span class="special-digit">*</span></label>
                                        <input class="form-control" type="password" id="old_password"
                                               name="old_password" value="{{ old('old_password') }}">
                                        @if ($errors->has('old_password'))
                                            <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('old_password') }}</strong>
                                        </span>
                                        @endif
                                        {{-- <input type="text" value="{{ old('email') }}">--}}
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label>{{@trans("pages.my_profile.new_password")}} <span class="special-digit">*</span></label>
                                        <input class="form-control" type="password" id="password" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}" >
                                        <label>{{@trans("pages.my_profile.confirm_new_password")}} <span class="special-digit">*</span></label>
                                        <input class="form-control" type="password" id="password-confirm"
                                               name="password_confirmation">
                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block" style="text-align: left">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-submit">
                                        <input type="submit" value="{{@trans("pages.my_profile.change_password")}} " style="padding: 10px 10px;margin-right: 10px;float: left;">
                                        <input type="reset" class="kt-button" style="padding: 10px 10px; float: right;"
                                               onclick='location.href="{{url('/user/my-profile')}}"' value="{{@trans("pages.my_profile.cancel")}} ">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
