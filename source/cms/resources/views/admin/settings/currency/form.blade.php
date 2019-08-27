<div class="white-box">
    <div class="form-group row {{ $errors->has('code') ? 'has-error' : ''}}">
        <label for="code" class="col-md-3 col-sm-5 col-form-label">Code <span class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            {!! Form::text('code', null, ['class' => 'form-control']) !!}
            {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group row {{ $errors->has('exchange_rate') ? 'has-error' : ''}}">
        <label for="exchange_rate" class="col-md-3 col-sm-5 col-form-label">exchange_rate <span class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            {!! Form::text('exchange_rate', null, ['class' => 'form-control']) !!}
            {!! $errors->first('exchange_rate', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-12 text-right">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
            {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
        </div>
    </div>
</div>
