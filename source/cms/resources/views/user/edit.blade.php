@extends('layouts.user.app')

@section('content')
    <div class="main-wrapper">
    </div>
    <div class="row no-margin" style="padding-top: 10px">
        <div class="container">
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>

        <div class="row no-margin col-sm-10  " style="margin-top: 75px;margin-bottom: 100px" >
            {{--<div class="col-sm-3 text-center">--}}
                {{--<img class="col-sm-12" src="{{ $user->imageUrl() }}">--}}
                {{--@if ($isMyProfile)--}}
                    {{--{!! Form::model($user, ['method' => 'POST', 'url' => url('user/change-profile-image'), 'files' => true]) !!}--}}
                {{--@endif--}}
                {{--{{Form::file('user_photo', ['id' => 'user_photo', 'onchange' => 'uploadFileWithLimit(this, 2);', 'style' => 'display: none', 'accept' => config('constants.ACCEPT_IMAGE_TYPES')])}}--}}
                {{--{{Form::button('change avatar', ['onclick' => "document.getElementById('user_photo').click();", 'class' => 'btn btn-info m-t-20'])}}--}}
                {{--<label class="small">(Use square picture with maximum size 2Mb)</label>--}}
                {{--{!! Form::close() !!}--}}
            {{--</div>--}}
            <div class="col-sm-9 edit-profile-margin-15">
                <div class="white-box">
                    {!! Form::model($user, ['method' => 'PATCH', 'url' => $isMyProfile ? '/user/my-profile' : ['/admin/users', $user->id], 'class' => 'form-horizontal', 'files' => true]) !!}
                    @include ('user.form', ['submitButtonText' => @trans("pages.my_profile.save"),'imageUrl' => $user->imageUrl()])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div>
        </div>
    </div>

@endsection
