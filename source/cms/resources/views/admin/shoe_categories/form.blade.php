
<div class="form-group row {{ $errors->has('name_en') ? 'has-error' : ''}}">
    <label for="name_en" class="col-md-3 col-sm-5 col-form-label">Name English<span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('name_en', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('name_vi') ? 'has-error' : ''}}">
    <label for="name_vi" class="col-md-3 col-sm-5 col-form-label">Name Vietnamese<span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('name_vi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name_vi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-12 text-right">
        <a href="{{ CommonService::getPreviousUrl(request())}}" class="btn btn-secondary">Cancel</a>
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
    </div>
</div>
@section('extra_scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            addMultiselect('#shoe_category_ids', 'Categories');
        });
    </script>
@endsection