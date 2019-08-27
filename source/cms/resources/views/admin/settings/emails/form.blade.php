<div class="white-box">
    <div class="form-group row {{ $errors->has('name') ? 'has-error' : ''}}">
        <label for="name" class="col-md-3 col-sm-5 col-form-label">Name <span class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            {!! Form::text('name', null, ['class' => 'form-control', 'disabled' => 'disabled']) !!}
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group row {{ $errors->has('subject_en') ? 'has-error' : ''}}">
        <label for="subject_en" class="col-md-3 col-sm-5 col-form-label">Subject English <span class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            {!! Form::text('subject_en', null, ['class' => 'form-control']) !!}
            {!! $errors->first('subject_en', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group row {{ $errors->has('subject_vi') ? 'has-error' : ''}}">
        <label for="subject_vi" class="col-md-3 col-sm-5 col-form-label">Subject Vietnamese <span class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            {!! Form::text('subject_vi', null, ['class' => 'form-control']) !!}
            {!! $errors->first('subject_vi', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group row {{ $errors->has('content_en') ? 'has-error' : ''}}">
        <label for="content_en" class="col-md-3 col-sm-5 col-form-label">Content English <span class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            {!! Form::textarea('content_en', null, ['class' => 'form-control summernote']) !!}
            {!! $errors->first('content_en', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group row {{ $errors->has('content_vi') ? 'has-error' : ''}}">
        <label for="content_vi" class="col-md-3 col-sm-5 col-form-label">Content Vietnamese <span class="text-danger">*</span></label>
        <div class="col-md-9 col-sm-7">
            {!! Form::textarea('content_vi', null, ['class' => 'form-control summernote']) !!}
            {!! $errors->first('content_vi', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 text-right">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
            {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
        </div>
    </div>
</div>
