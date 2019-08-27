

<div
 class="form-group row {{ $errors->has('image_1') ? 'has-error' : ''}}">

    <label for="profile_img" class="col-md-3 col-sm-5 col-form-label">{{ @trans("pages.my_profile.image")}} <span class="text-danger"></span></label>
    <div class="col-md-9 col-sm-7">
        <div class="text-wrapper">
            <img src="{{ isset($imageUrl) ? $imageUrl : url(config('constants.AVATAR_PROFILE_DEFAULT_IMG')) }}" id="output" class="img img-responsive"/>
            {{ Form::file('image_1', ['onchange' => 'loadImageToImgTag(event)', 'id' => 'image_1', "class" => "hidden", 'accept' => config('constants.ACCEPT_IMAGE_TYPES')]) }}
            <button onclick="uploadFile($('#image_1'))" type="button" class="btn btn-default"><i class="fa fa-file-archive-o"></i> {{ @trans("pages.my_profile.upload_file")}}</button>
        </div>
        {!! $errors->first('image_1', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('full_name') ? 'has-error' : ''}}">
    {!! Form::label('full_name', @trans("pages.my_profile.full_name"), ['class' => 'col-md-3 col-sm-5 col-form-label']) !!}
    <div class="col-md-9 col-sm-7">
        {!! Form::text('full_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('full_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
@if($isMyProfile)
    <div class="form-group row {{ $errors->has('email') ? 'has-error' : ''}}" >
        {!! Form::label('email', @trans("pages.my_profile.email"), ['class' => 'col-md-3 col-sm-5 col-form-label']) !!}
        <div class="col-md-9 col-sm-7">
            {!! Form::text('email', null, ['class' => 'form-control','readonly']) !!}
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
@endif
@if($isMyProfile)
    
@endif
<div class="form-group row {{ $errors->has('birth_day') ? 'has-error' : ''}}">
    {!! Form::label(date('birth_day'), @trans("pages.my_profile.birthday"), ['class' => 'col-md-3 col-sm-5 col-form-label ']) !!}
    <div class="col-md-9 col-sm-7 fa-my-profile">
        {!! Form::text('birth_day', null, ['class' => 'form-control birthday-datepicker ', 'onkeydown' => 'return false;']) !!}
        <span class="fa fa-calendar" aria-hidden="true">  </span>

        <!-- <p class="fa fa-calendar"></p> -->
        
        <!-- <p class="fa fa-calendar"></p> -->

    </div>
    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-xs-offset-0">
    @if ($errors->first('birth_day'))
            <p class="help-block fa ">{{ @trans("pages.my_profile.age")}}</p> 
        @endif
    </div>
</div>



<div class="form-group row">
    <div class=" col-sm-3">
        
    </div>
    <div class="col-sm-9 text-right">
        @if ($isMyProfile)

            <a href="{{ url('user/my-profile') }}" class="btn btn-default kt-button">{{ @trans("pages.my_profile.cancel")}}</a>
        @endif

        <input class="btn btn-success"  type="submit" value="{{@trans('pages.user.save')}}">
    </div>
</div>
