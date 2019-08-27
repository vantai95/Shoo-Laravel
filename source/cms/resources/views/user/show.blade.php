@extends('layouts.user.app')

@section('content')

    <div class="main-wrapper">
        <div class="container">
            <div class="main-container">
                <div class="kt-login-register">
                    <div class="row">
                        <div id="login-div" class="show">
                            <div class="row col-sm-2 no-margin"></div>
                            <div class="row no-margin col-sm-10 col-sm-offset-2">

                                <div class="col-sm-2 text-center mg-top">
                                    <img class="col-sm-13 img-responsive" src="{{ $user->imageUrl() }}">
                                </div>
                                <div class=" mg-top col-sm-9">
                                    <div class="white-box">
                                        <div class="form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-sm-5 ">                                               
                                                {{ @trans("pages.my_profile.full_name")}}
                                                </label>
                                                <div class="col-md-9 col-sm-7" >
                                                    {{$user->full_name}}
                                                </div>
                                            </div>
                                            <div class="form-group row" >
                                                <label class="col-md-3 col-sm-5 col-form-label">
                                                {{ @trans("pages.my_profile.email")}}
                                                </label>
                                                <div class="col-md-9 col-sm-7">
                                                    {{$user->email}}
                                                </div>
                                            </div>
                                           
                                            <div class="form-group row">
                                                <label class="col-md-3 col-sm-5 col-form-label">
                                                {{ @trans("pages.my_profile.birthday")}}
                                                </label>
                                                <div class="col-md-9 col-sm-7">
                                                    {{$user->birth_day}}
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-12">
                                                @if ($isMyProfile)
                                                    <a href="{{ url('user/my-profile/edit') }}" class="btn btn-info edit">
                                                    {{ @trans("pages.my_profile.edit")}}
                                                    </a>
                                                    <a href="{{ url('user/my-profile/change-password ') }}" class="btn btn-info change-password">
                                                    {{ @trans("pages.my_profile.change_password")}}
                                                    </a>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
