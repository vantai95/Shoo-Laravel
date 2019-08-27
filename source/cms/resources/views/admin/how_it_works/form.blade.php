{{--<div class="white-box">--}}
{{--@if ($errors->any())--}}
{{--<div class="alert alert-danger">--}}
{{--<ul>--}}
{{--@foreach ($errors->all() as $error)--}}
{{--<li>{{ $error }}</li>--}}
{{--@endforeach--}}
{{--</ul>--}}
{{--</div>--}}
{{--@endif--}}
<div class="form-group row {{ $errors->has('title_en') ? 'has-error' : ''}}">
    <label for="title_en" class="col-md-3 col-sm-5 col-form-label">Title English<span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('title_en', null, ['class' => 'form-control']) !!}
        {!! $errors->first('title_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('title_vi') ? 'has-error' : ''}}">
    <label for="title_vi" class="col-md-3 col-sm-5 col-form-label">Title Vietnamese<span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('title_vi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('title_vi', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('description_en') ? 'has-error' : ''}}">
    <label for="description_en" class="col-md-3 col-sm-5 col-form-label">Description English<span
                class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('description_en', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('description_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('description_vi') ? 'has-error' : ''}}">
    <label for="description_vi" class="col-md-3 col-sm-5 col-form-label">Description Vietnamese<span
                class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('description_vi', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('description_vi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="hiw_img" class="col-md-3 col-sm-5 col-form-label">Image <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <div class="text-wrapper">
            <img src="{{ isset($imageUrl) ? $imageUrl : url(config('constants.HOW_IT_WORK_DEFAULT_IMG')) }}" id="output"
                 class="img img-responsive"/>
            {{ Form::file('image', ['onchange' => 'loadImageToImgTag(event)', 'id' => 'image', "class" => "hidden", 'accept' => config('constants.ACCEPT_IMAGE_TYPES')]) }}
            <button onclick="uploadFile($('#image'))" type="button" class="btn btn-default"><i
                        class="fa fa-file-archive-o"></i> Upload File
            </button>
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
{{--<div class="form-group row {{ $errors->has('page_id') ? 'has-error' : ''}}">--}}
{{--{!! Form::label('page_id', 'Page', ['class' => 'col-md-3 col-sm-5 col-form-label']) !!}--}}
{{--<div class="col-md-5 col-sm-5">--}}
{{--{!! Form::select('page_id', \App\Models\Page::pluck('title', 'id'), null, ['class' => 'form-control simple-dropdown', 'required' => 'required']) !!}--}}
{{--{!! $errors->first('page_id', '<p class="help-block">:message</p>') !!}--}}
{{--</div>--}}
{{--</div>--}}
<div class="form-group row">
    <div class="col-sm-12 text-right">
        <a href="{{ CommonService::getPreviousUrl(request()) }}" class="btn btn-secondary">Cancel</a>
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
    </div>
</div>


