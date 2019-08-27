<div class="form-group row {{ $errors->has('banner_image') ? 'has-error' : ''}}">
    <label for="detail_img" class="col-md-3 col-sm-5 col-form-label">Image<span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <div class="text-wrapper">
            <img src="{{ isset($imageUrl) ? $imageUrl : url(config('constants.PAGE_DEFAULT_IMG')) }}" id="output"
                 class="img img-responsive"/>
            {{ Form::file('image', ['onchange' => 'loadImageToImgTag(event)', 'id' => 'image', "class" => "hidden", 'accept' => config('constants.ACCEPT_IMAGE_TYPES')]) }}
            <button onclick="uploadFile($('#image'))" type="button" class="btn btn-default"><i
                        class="fa fa-file-archive-o"></i> Upload File
            </button>
        </div>
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="col-md-3 col-sm-5 col-form-label">Description <span
                class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('description', isset($detail) ? $detail->value : "", ['class' => 'form-control', 'id' => 'description']) !!}

        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('available') ? 'has-error' : ''}}">
    <label for="status" class="col-md-3 col-sm-5 col-form-label">
        Status <span class="text-danger">*</span>
    </label>
    <div class="col-md-9 col-sm-7">
        <div class="radio-list">
            <label class="radio-inline p-0">
                <div class="radio radio-info">
                    {!! Form::radio('available', '1', true, ['id' => 'available_true']) !!}
                    {!! Form::label('available_true', 'Available') !!}
                </div>
            </label>
            <label class="radio-inline p-0">
                <div class="radio radio-danger">
                    {!! Form::radio('available', '0', null, ['id' => 'available_false']) !!}
                    {!! Form::label('available_false','Unavailable') !!}
                </div>
            </label>
        </div>
        {!! $errors->first('available', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-12 text-right">
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
    </div>
</div>
