{{--<div class="form-group row {{ $errors->has('description') ? 'has-error' : ''}}">--}}
    {{--<label for="description" class="col-md-3 col-sm-5 col-form-label">Description <span class="text-danger">*</span></label>--}}
    {{--<div class="col-md-9 col-sm-7">--}}
        {{--{!! Form::textarea('description', null, ['class' => 'form-control summernote']) !!}--}}
        {{--{!! $errors->first('description', '<p class="help-block">:message</p>') !!}--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row {{ $errors->has('sub_description') ? 'has-error' : ''}}">--}}
    {{--<label for="sub_description" class="col-md-3 col-sm-5 col-form-label">Sub Description <span class="text-danger">*</span></label>--}}
    {{--<div class="col-md-9 col-sm-7">--}}
        {{--{!! Form::textarea('sub_description', null, ['class' => 'form-control summernote']) !!}--}}
        {{--{!! $errors->first('sub_description', '<p class="help-block">:message</p>') !!}--}}
    {{--</div>--}}
{{--</div>--}}

<div class="form-group row {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="aboutus_img" class="col-md-3 col-sm-5 col-form-label">Image <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <div class="text-wrapper">
            <img src="{{ isset($imageUrl) ? $imageUrl : url(config('constants.ABOUT_US_DEFAULT_IMG')) }}" id="output" class="img img-responsive"/>
            {{ Form::file('image', ['onchange' => 'loadImageToImgTag(event)', 'id' => 'image', "class" => "hidden", 'accept' => config('constants.ACCEPT_IMAGE_TYPES')]) }}


            <button onclick="uploadFile($('#image'))" type="button" class="btn btn-default"><i class="fa fa-file-archive-o"></i> Upload File</button>
        </div>
        {!! $errors->first('image_url', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('is_banner') ? 'has-error' : ''}}">
    <label for="is_banner" class="col-md-3 col-sm-5 col-form-label">Is Banner Image <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::checkbox('is_banner', 1,  isset($is_banner) ? $is_banner: false, ['class' => 'form-control ']) !!}
        {!! $errors->first('is_banner', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-12 text-right">
        <a href="{{ CommonService::getPreviousUrl(request())}}" class="btn btn-secondary">Cancel</a>
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
    </div>
</div>
