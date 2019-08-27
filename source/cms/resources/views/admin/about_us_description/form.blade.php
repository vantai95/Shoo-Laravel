<div class="form-group row {{ $errors->has('description_en') ? 'has-error' : ''}}">
    <label for="description_en" class="col-md-3 col-sm-5 col-form-label">Description English<span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('description_en', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('description_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('description_vi') ? 'has-error' : ''}}">
    <label for="description_vi" class="col-md-3 col-sm-5 col-form-label">Description Vietnamese<span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('description_vi', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('description_vi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

{{--<div class="form-group row {{ $errors->has('sub_description') ? 'has-error' : ''}}">--}}
    {{--<label for="sub_description" class="col-md-3 col-sm-5 col-form-label">Sub Description <span class="text-danger">*</span></label>--}}
    {{--<div class="col-md-9 col-sm-7">--}}
        {{--{!! Form::textarea('sub_description', null, ['class' => 'form-control summernote']) !!}--}}
        {{--{!! $errors->first('sub_description', '<p class="help-block">:message</p>') !!}--}}
    {{--</div>--}}
{{--</div>--}}

<div class="form-group row">
    <div class="col-sm-12 text-right">
        <a href="{{ CommonService::getPreviousUrl(request())}}" class="btn btn-secondary">Cancel</a>
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
    </div>
</div>
