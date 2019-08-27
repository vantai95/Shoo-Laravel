<div class="form-group row {{ $errors->has('title_en') ? 'has-error' : ''}}">
    <label for="title_en" class="col-md-3 col-sm-5 col-form-label">
        Title English<span class="text-danger">*</span>
        <br>
        <small>(40 characters)</small>
    </label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('title_en', null, ['class' => 'form-control', 'maxlength' => "40"]) !!}
        {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('title_vi') ? 'has-error' : ''}}">
    <label for="title_vi" class="col-md-3 col-sm-5 col-form-label">
        Title Vietnamese<span class="text-danger">*</span>
        <br>
        <small>(40 characters)</small>
    </label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('title_vi', null, ['class' => 'form-control', 'maxlength' => "40"]) !!}
        {!! $errors->first('title_vi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('config_value') ? 'has-error' : ''}}">
    <label for="config_value" class="col-md-3 col-sm-5 col-form-label">
        Video URL<span class="text-danger">*</span>
        <br>
        <small>(Please enter embedded video URL )</small>
    </label>
    {{--<div class="col-md-9 col-sm-7">--}}
        {{--<span class="btn btn-success fileinput-button">--}}
        {{--<i class="glyphicon glyphicon-plus"></i>--}}
        {{--<span>Add files...</span>--}}
            {{--<!-- The file input field used as target for the file upload widget -->--}}
        {{--<input id="fileupload" type="file" name="files[]" multiple>--}}
    {{--</span>--}}
        {{--<br>--}}
        {{--<br>--}}
        {{--<!-- The global progress bar -->--}}
        {{--<div id="progress" class="progress">--}}
            {{--<div class="progress-bar progress-bar-success"></div>--}}
        {{--</div>--}}
        {{--<!-- The container for the uploaded files -->--}}
        {{--<div id="files" class="files"></div>--}}
    {{--</div>--}}
    <div class="col-md-9 col-sm-7">
        {!! Form::text('config_value', null, ['class' => 'form-control']) !!}
        {!! $errors->first('config_value', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('is_published') ? 'has-error' : ''}}">
    <label for="is_published" class="col-md-3 col-sm-5 col-form-label">Status <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <div class="radio-list">
            <label class="radio-inline p-0">
                <div class="radio radio-info">
                    {!! Form::radio('is_published', '1', true, ['id' => 'is_published_true']) !!}
                    {!! Form::label('is_published_true', 'Show') !!}
                </div>
            </label>
            <label class="radio-inline p-0">
                <div class="radio radio-danger">
                    {!! Form::radio('is_published', '0', null, ['id' => 'is_published_false']) !!}
                    {!! Form::label('is_published_false', 'Hide') !!}
                </div>
            </label>
        </div>
        {!! $errors->first('is_published', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-12 text-right">
        <a href="{{ CommonService::getPreviousUrl(request())}}" class="btn btn-secondary">Cancel</a>
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
    </div>
</div>
