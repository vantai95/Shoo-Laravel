<div class="form-group row {{ $errors->has('shoe_category_id') ? 'has-error' : ''}}">
    <label for="shoe_category_id" class="col-md-3 col-sm-5 col-form-label">
        Category <span class="text-danger"></span>
    </label>
    <div class="col-md-5 col-sm-5">
        {!! Form::select('shoe_category_id', \App\Models\ShoeCategory::pluck('name_en', 'id'), null, ['class' => 'form-control simple-dropdown']) !!}
        {!! $errors->first('shoe_category_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="pf_img" class="col-md-3 col-sm-5 col-form-label">Image <span class="text-danger"></span></label>
    <div class="col-md-9 col-sm-7">
        <div class="text-wrapper">
            <img src="{{ isset($imageUrl) ? $imageUrl : url(config('constants.PRODUCTION_PACKAGE_DEFAULT_IMG')) }}" id="output"
                 class="img img-responsive"/>
            {{ Form::file('image', ['onchange' => 'loadImageToImgTag(event)', 'id' => 'image', "class" => "hidden", 'accept' => config('constants.ACCEPT_IMAGE_TYPES')]) }}
            <button onclick="uploadFile($('#image'))" type="button" class="btn btn-default"><i
                        class="fa fa-file-archive-o"></i> Upload File
            </button>
        </div>
        {!! $errors->first('image_url', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('name_en') ? 'has-error' : ''}}">
    <label for="name_en" class="col-md-3 col-sm-5 col-form-label">
        Name English<span class="text-danger"></span>
    </label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('name_en', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('name_vi') ? 'has-error' : ''}}">
    <label for="name_vi" class="col-md-3 col-sm-5 col-form-label">
        Name Vietnamese<span class="text-danger"></span>
    </label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('name_vi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name_vi', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="col-md-3 col-sm-5 col-form-label">
        Price <span class="text-danger"></span>
    </label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('price', null, ['class' => 'form-control', 'maxlength' => '10','onkeypress' => 'return isNumberKey(event)']) !!}
        {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('volume') ? 'has-error' : ''}}">
    <label for="volume" class="col-md-3 col-sm-5 col-form-label">
        Volume <span class="text-danger"></span>
    </label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('volume', null, ['class' => 'form-control', 'maxlength' => '10','onkeypress' => 'return isNumberKey(event)']) !!}
        {!! $errors->first('volume', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('description_en') ? 'has-error' : ''}}">
    <label for="description_en" class="col-md-3 col-sm-5 col-form-label">
        Description English<span class="text-danger"></span>
    </label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('description_en', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('description_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('description_vi') ? 'has-error' : ''}}">
    <label for="description_vi" class="col-md-3 col-sm-5 col-form-label">
        Description Vietnamese<span class="text-danger"></span>
    </label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('description_vi', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('description_vi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('available') ? 'has-error' : ''}}">
    <label for="status" class="col-md-3 col-sm-5 col-form-label">
        Status <span class="text-danger"></span>
    </label>
    <div class="col-md-9 col-sm-7">
        <div class="radio-list">
            <label class="radio-inline p-0">
                <div class="radio radio-info">
                    {!! Form::radio('available', '1', true, ['id' => 'available_true']) !!}
                    {!! Form::label('available_true', 'Stock In') !!}
                </div>
            </label>
            <label class="radio-inline p-0">
                <div class="radio radio-danger">
                    {!! Form::radio('available', '0', null, ['id' => 'available_false']) !!}
                    {!! Form::label('available_false','Stock Out') !!}
                </div>
            </label>
        </div>
        {!! $errors->first('available', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-12 text-right">
        <a href="{{ CommonService::getPreviousUrl(request()) }}" class="btn btn-secondary">Cancel</a>
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
    </div>
</div>