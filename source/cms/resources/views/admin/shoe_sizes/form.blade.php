
<div class="form-group row {{ $errors->has('value') ? 'has-error' : ''}}">
    <label for="value" class="col-md-3 col-sm-5 col-form-label">
        Size<span class="text-danger">*</span>
    </label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('value', isset($shoeSize->value), ['class' => 'form-control']) !!}
        {!! $errors->first('value', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="col-md-3 col-sm-5 col-form-label">
        Type<span class="text-danger">*</span>
    </label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('type', isset($shoeSize->type), ['class' => 'form-control']) !!}
        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-12 text-right">
        <a href="{{ CommonService::getPreviousUrl(request()) }}" class="btn btn-secondary">Cancel</a>
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
    </div>
</div>