<div class="form-group row {{ $errors->has('banner_image') ? 'has-error' : ''}}">
    <label for="image" class="col-md-3 col-sm-5 col-form-label">Banner Image<span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <div class="text-wrapper">
            <img src="{{ isset($bannerUrl) ? $bannerUrl : "" }}" id="output" class="img img-responsive"/>
            {{ Form::file('banner_image', ['onchange' => 'loadImageToImgTag(event)', 'id' => 'banner_image', "class" => "hidden", 'accept' => config('constants.ACCEPT_IMAGE_TYPES')]) }}
            <button onclick="uploadFile($('#banner_image'))" type="button" class="btn btn-default"><i class="fa fa-file-archive-o"></i> Upload File</button>
        </div>
        {!! $errors->first('banner_image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('is_published') ? 'has-error' : ''}}">
    {!! Form::label('is_published', 'Status', ['class' => 'col-md-3 col-sm-5 col-form-label']) !!}
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
                    {!! Form::label('is_published_false','Hide') !!}
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
