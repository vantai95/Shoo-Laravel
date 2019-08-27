<div class="form-group row {{ $errors->has('shoe_category_ids') ? 'has-error' : ''}}">
    <label for="categories" class="col-md-3 col-sm-5 col-form-label">Categories <span
                class="text-danger">*</span></label>
    <div class="col-md-5 col-sm-5">
        {!! Form::select('shoe_category_ids[]', \App\Models\ShoeCategory::pluck('name_en', 'id'),isset($shoeType)?$shoeType->categories->pluck('id'):null, ['class' => 'form-control', 'multiple' => 'multiple', 'id' =>'shoe_category_ids']) !!}
        {!! $errors->first('shoe_category_ids', '<p class="help-block">:message</p>') !!}
    </div>

</div>

<div class="form-group row {{ $errors->has('name_en') ? 'has-error' : ''}}">
    <label for="name_en" class="col-md-3 col-sm-5 col-form-label">Name English <span class="text-danger">*</span></label>
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

<div class="form-group row {{ $errors->has('image_url') ? 'has-error' : ''}}">
    <label for="image" class="col-md-3 col-sm-5 col-form-label">Image <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <div class="text-wrapper">
            <img src="{{ isset($imageUrl) ? $imageUrl : url(config('constants.DEFAULT_SHOE_TYPE_IMG')) }}" id="output"
                 class="img img-responsive"/>
            {{ Form::file('image_url', ['onchange' => 'loadImageToImgTag(event)', 'id' => 'image_url', "class" => "hidden", 'accept' => config('constants.ACCEPT_IMAGE_TYPES')]) }}
            <button onclick="uploadFile($('#image_url'))" type="button" class="btn btn-default"><i
                        class="fa fa-file-archive-o"></i> Upload File
            </button>
        </div>
        {!! $errors->first('image_url', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group row {{ $errors->has('description_en') ? 'has-error' : ''}}">
    <label for="description_en" class="col-md-3 col-sm-5 col-form-label">Description English <span
                class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('description_en', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('description_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('description_vi') ? 'has-error' : ''}}">
    <label for="description_vi" class="col-md-3 col-sm-5 col-form-label">Description Vietnamese <span
                class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('description_vi', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('description_vi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('description_home_en') ? 'has-error' : ''}}">
    <label for="description_home_en" class="col-md-3 col-sm-5 col-form-label">Description Home English </label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('description_home_en', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('description_home_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('description_home_vi') ? 'has-error' : ''}}">
    <label for="description_home_vi" class="col-md-3 col-sm-5 col-form-label">Description Home Vietnamese </label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('description_home_vi', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('description_home_vi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('description_shoe_types_en') ? 'has-error' : ''}}">
    <label for="description_shoe_types_en" class="col-md-3 col-sm-5 col-form-label">Description Shoe Types English</label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('description_shoe_types_en', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('description_shoe_types_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('description_shoe_types_vi') ? 'has-error' : ''}}">
    <label for="description_shoe_types_vi" class="col-md-3 col-sm-5 col-form-label">Description Shoe Types Vietnamese</label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('description_shoe_types_vi', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('description_shoe_types_vi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('index') ? 'has-error' : ''}}">
    <label for="index" class="col-md-3 col-sm-5 col-form-label">Index <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <div class="text-wrapper">
            <select name="index" class="form-control">
                @foreach($types as $item)
                    <option value="{{ $item->index }}"
                            @if(isset($shoeType) and $shoeType->index == $item->index) selected @endif>{{ $item->index }}</option>
                @endforeach
                @if(isset($recommendIndex))
                    <option value="{{ $recommendIndex }}" selected>{{ $recommendIndex }}</option>
                @endif
            </select>
        </div>
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
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
