<div class="form-group row {{ $errors->has('product_feature') ? 'has-error' : ''}}">
    <label for="description" class="col-md-3 col-sm-5 col-form-label">Product Feature <span class="text-danger">*</span></label>
    <div class="col-md-5 col-sm-5">
        {!! Form::select('product_feature', \App\Models\ProductFeature::pluck('title_en', 'id'), null, ['class' => 'form-control simple-dropdown']) !!}
        {!! $errors->first('product_feature', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('title_en') ? 'has-error' : ''}}">
    <label for="title_en" class="col-md-3 col-sm-5 col-form-label">
        Title English<span class="text-danger">*</span>
        <br>
        <small>(100 characters)</small>
    </label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('title_en', null, ['class' => 'form-control', 'maxlength' => "100"]) !!}
        {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('title_vi') ? 'has-error' : ''}}">
    <label for="title_vi" class="col-md-3 col-sm-5 col-form-label">
        Title Vietnamese<span class="text-danger">*</span>
        <br>
        <small>(100 characters)</small>
    </label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('title_vi', null, ['class' => 'form-control', 'maxlength' => "100"]) !!}
        {!! $errors->first('title_vi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('content_en') ? 'has-error' : ''}}">
    <label for="content_en" class="col-md-3 col-sm-5 col-form-label">Content English<span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('content_en', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('content_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('content_vi') ? 'has-error' : ''}}">
    <label for="content_vi" class="col-md-3 col-sm-5 col-form-label">Content Vietnamese<span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('content_vi', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('content_vi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="pf_detail_img" class="col-md-3 col-sm-5 col-form-label">Image <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <div class="text-wrapper">
            <img src="{{ isset($imageUrl) ? $imageUrl : url(config('constants.PRODUCT_FEATURE_DETAILS_DEFAULT_IMG')) }}" id="output" class="img img-responsive"/>
            {{ Form::file('image', ['onchange' => 'loadImageToImgTag(event)', 'id' => 'image', "class" => "hidden", 'accept' => config('constants.ACCEPT_IMAGE_TYPES')]) }}
            <button onclick="uploadFile($('#image'))" type="button" class="btn btn-default"><i class="fa fa-file-archive-o"></i> Upload File</button>
        </div>
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('is_published') ? 'has-error' : ''}}">
    <label for="is_published" class="col-md-3 col-sm-5 col-form-label">Status <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <div class="radio-list">
            <label class="radio-inline p-0">
                <div class="radio radio-info">
                    {!! Form::radio('is_published', '1', true, ['id' => 'is_published_true']) !!}
                    {!! Form::label('is_published_true', 'Published') !!}
                </div>
            </label>
            <label class="radio-inline p-0">
                <div class="radio radio-danger">
                    {!! Form::radio('is_published', '0', null, ['id' => 'is_published_false']) !!}
                    {!! Form::label('is_published_false','Unpublished') !!}
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
