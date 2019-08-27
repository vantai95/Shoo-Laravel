<div class="form-group row {{ $errors->has('full_name') ? 'has-error' : ''}}">
    <label for="full_name" class="col-md-3 col-sm-5 col-form-label">Full Name <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('full_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('full_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
@if($isMyProfile)
    <div class="form-group row {{ $errors->has('email') ? 'has-error' : ''}}">
        <label for="email" class="col-md-3 col-sm-5 col-form-label">Email <span class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
@endif
@if($isMyProfile)
    <div class="form-group row {{ $errors->has('phone') ? 'has-error' : ''}}">
        {!! Form::label('phone', 'Phone Number', ['class' => 'col-md-3 col-sm-5 col-form-label']) !!}
        <div class="col-md-9 col-sm-7">
            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
            {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


    <div class="form-group row {{ $errors->has('image_1') ? 'has-error' : ''}}">
        <label for="profile_img" class="col-md-3 col-sm-5 col-form-label">Image <span
                    class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            <div class="text-wrapper">
                <img src="{{ isset($imageUrl) ? $imageUrl : url(config('constants.AVATAR_PROFILE_DEFAULT_IMG')) }}"
                     id="output" class="img img-responsive"/>
                {{ Form::file('image_1', ['onchange' => 'loadImageToImgTag(event)', 'id' => 'image_1', "class" => "hidden", 'accept' => config('constants.ACCEPT_IMAGE_TYPES')]) }}
                <button onclick="uploadFile($('#image_1'))" type="button" class="btn btn-default"><i
                            class="fa fa-file-archive-o"></i> Upload File
                </button>
            </div>
            {!! $errors->first('image_1', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
@endif

<div class="form-group row {{ $errors->has('address') ? 'has-error' : ''}}">
    {!! Form::label('address', 'Address', ['class' => 'col-md-3 col-sm-5 col-form-label']) !!}
    <div class="col-md-9 col-sm-7">
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('birth_day') ? 'has-error' : ''}}">
    {!! Form::label(date('birth_day'), 'Day Of Birth', ['class' => 'col-md-3 col-sm-5 col-form-label']) !!}
    <div class="col-md-9 col-sm-7">
        {!! Form::text('birth_day', null, ['class' => 'form-control birthday-datepicker', 'onkeydown' => 'return false;']) !!}
        {!! $errors->first('birth_day', '<p class="help-block">:message</p>') !!}
    </div>
</div>

@if (!$isMyProfile)
    <div class="form-group row {{ $errors->has('role_id') ? 'has-error' : ''}}">
        <label for="role_id" class="col-md-3 col-sm-5 col-form-label">Role <span class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            {!! Form::select('role_id', $roles, null, ['class' => 'form-control',isset($user) && !$user->disableRole() ? 'disabled' : '']) !!}
            {!! $errors->first('role_id', '<p class="help-block">:message</p>') !!}
            @if(isset($user) && !$user->disableRole())
                <p class="help-block text-info">Không thể đổi vai trò người dùng này vì chưa cập nhật email!</p>
            @endif
        </div>
    </div>
    <div class="form-group row {{ $errors->has('is_locked') ? 'has-error' : ''}}">
        <label for="is_locked" class="col-md-3 col-sm-5 col-form-label">Status <span
                    class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            <div class="radio-list">
                <label class="radio-inline p-0">
                    <div class="radio radio-info">
                        {!! Form::radio('is_locked', '0', true, ['id' => 'is_locked_true']) !!}
                        {!! Form::label('is_locked_true', \App\Models\User::STATUS_TEXT['ACTIVE']) !!}
                    </div>
                </label>
                <label class="radio-inline p-0">
                    <div class="radio radio-danger">
                        {!! Form::radio('is_locked', '1', null, ['id' => 'is_locked_false']) !!}
                        {!! Form::label('is_locked_false', \App\Models\User::STATUS_TEXT['LOCKED']) !!}
                    </div>
                </label>
            </div>
            {!! $errors->first('is_locked', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
@endif

<div class="form-group row">
    <div class="col-sm-12 text-right">
        @if ($isMyProfile)
            <a href="{{ url('admin/my-profile') }}" class="btn btn-secondary">Cancel</a>
        @else
            <a href="{{ CommonService::getPreviousUrl(request()) }}"
               class="btn btn-secondary">Cancel</a>
        @endif

        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
    </div>
</div>
