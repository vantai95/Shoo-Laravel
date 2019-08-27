<div class="form-group row {{ $errors->has('shoe_category_ids') ? 'has-error' : ''}}">
    <label for="shoe_category_ids" class="col-md-3 col-sm-5 col-form-label">Categories <span class="text-danger">*</span></label>
    <div class="col-md-5 col-sm-5">
        {!! Form::select('shoe_category_ids[]', \App\Models\ShoeCategory::pluck('name_en', 'id'),isset($outsoleType)?$outsoleType->categories->pluck('id'):null, ['class' => 'form-control', 'multiple' => 'multiple', 'id' =>'shoe_category_ids']) !!}
        {!! $errors->first('shoe_category_ids', '<p class="help-block">:message</p>') !!}
    </div>

</div>

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

<div class="form-group row {{ $errors->has('picture') ? 'has-error' : ''}}">
    <label for="image" class="col-md-3 col-sm-5 col-form-label">Image <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <div class="text-wrapper">
            <img src="{{ isset($imageUrl) ? $imageUrl : url(config('constants.OUTSOLE_TYPE_DEFAULT_IMG')) }}" id="output" class="img img-responsive"/>
            {{ Form::file('picture', ['onchange' => 'loadImageToImgTag(event)', 'id' => 'picture', "class" => "hidden", 'accept' => config('constants.ACCEPT_IMAGE_TYPES')]) }}
            <button onclick="uploadFile($('#picture'))" type="button" class="btn btn-default"><i class="fa fa-file-archive-o"></i> Upload File</button>
        </div>
        {!! $errors->first('picture', '<p class="help-block">:message</p>') !!}
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