<div class="form-group row {{ $errors->has('shoe_types_id') ? 'has-error' : ''}}">
    <label for="shoe_types_id" class="col-md-3 col-sm-5 col-form-label">Model <span class="text-danger"></span></label>
    <div class="col-md-5 col-sm-5">
        {!! Form::select('shoe_types_id', \App\Models\ShoeTypes::pluck('name_en', 'id'), null, ['class' => 'form-control simple-dropdown']) !!}
        {!! $errors->first('shoe_types_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('main_name_en') ? 'has-error' : ''}}">
    <label for="main_name_en" class="col-md-3 col-sm-5 col-form-label">Main Name English <span class="text-danger"></span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('main_name_en', null, ['class' => 'form-control']) !!}
        {!! $errors->first('main_name_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('main_name_vi') ? 'has-error' : ''}}">
    <label for="main_name_vi" class="col-md-3 col-sm-5 col-form-label">Main Name Vietnamese <span class="text-danger"></span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('main_name_vi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('main_name_vi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('sub_name_en') ? 'has-error' : ''}}">
    <label for="sub_name_en" class="col-md-3 col-sm-5 col-form-label">Sub Name English<span class="text-danger"></span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('sub_name_en', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sub_name_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('sub_name_vi') ? 'has-error' : ''}}">
    <label for="sub_name_vi" class="col-md-3 col-sm-5 col-form-label">Sub Name Vietnamese<span class="text-danger"></span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('sub_name_vi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sub_name_vi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="col-md-3 col-sm-5 col-form-label">Price(USD) <span class="text-danger"></span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('price', null, ['class' => 'form-control']) !!}
        {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('discount_price') ? 'has-error' : ''}}">
    <label for="discount_price" class="col-md-3 col-sm-5 col-form-label">Discount Price(USD) <span class="text-danger"></span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::text('discount_price', null, ['class' => 'form-control']) !!}
        {!! $errors->first('discount_price', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('image_url') ? 'has-error' : ''}}">
    <label for="image" class="col-md-3 col-sm-5 col-form-label">Image <span class="text-danger"></span></label>
    <div class="col-md-9 col-sm-7">
        <div class="text-wrapper">
            
            <!--<div class="shoes-styles-image col-md-12">              
                @foreach ($images as $key => $image)
                    <div class="item col-md-3 item-img" id="item-img-{{$key}}">
                        <img src="{{ isset($image) ? $image : url(config('constants.DEFAULT_SHOE_STYLE_IMG')) }}"  class="img img-responsive"/>
                        <i class="fa fa-times-circle fa-2x" data-icon="A" onclick="removeImage({{$key}});" ></i>
                    </div>
                @endforeach
            </div>
            <div id="output" class="shoes-styles-image col-md-12">
            </div>
             {{ Form::file('images_url[]', ['multiple' => true, 'onchange' => 'loadImagesToImgTag(event)', 'id' => 'images_url', "class" => "hidden", 'accept' => config('constants.ACCEPT_IMAGE_TYPES')]) }}
            <button onclick="uploadFile($('#images_url'))" type="button" class="btn btn-default"><i class="fa fa-file-archive-o"></i> Upload File</button>
                -->
            
            {!! Form::hidden('images', null, ['class' => 'form-control','id' =>'images']) !!}           
            <div class="shoes-styles-image col-md-12 {{ $errors->has('image0') ? 'has-error' : ''}}">
                    {{ Form::file('image0[]', ['multiple' => false, 'onchange' => 'loadImagesToImgContent(event,"img-0")', 'id' => 'image0', "class" => "hidden", 'accept' => config('constants.ACCEPT_IMAGE_TYPES')]) }}
                    {{ Form::file('image1[]', ['multiple' => false, 'onchange' => 'loadImagesToImgContent(event,"img-1")', 'id' => 'image1', "class" => "hidden", 'accept' => config('constants.ACCEPT_IMAGE_TYPES')]) }}
                    {{ Form::file('image2[]', ['multiple' => false, 'onchange' => 'loadImagesToImgContent(event,"img-2")', 'id' => 'image2', "class" => "hidden", 'accept' => config('constants.ACCEPT_IMAGE_TYPES')]) }}
                    {{ Form::file('image3[]', ['multiple' => false, 'onchange' => 'loadImagesToImgContent(event,"img-3")', 'id' => 'image3', "class" => "hidden", 'accept' => config('constants.ACCEPT_IMAGE_TYPES')]) }}
            
                    <div class="item col-md-3 item-img" id="item-img-0">
                        <img  onclick="uploadFile($('#image0'))" id="img-0" src="{{ isset($images[0]) ? $images[0] : url(config('constants.DEFAULT_SHOE_STYLE_IMG')) }}"  class="img img-responsive"/>
                        <span  onclick="uploadFile($('#image0'))" class="upload-text"> Upload <i class="fa fa-upload"></i></span>
                        <span class="text-danger upload-req"></span>  
                        <i class="delete-icon fa fa-times-circle fa-lg" data-icon="A" onclick="removeImage(0,'{{$defaultImage}}');" ></i>                     
                    </div>
                    <div class="item col-md-3 item-img" id="item-img-1">
                        <img onclick="uploadFile($('#image1'))" id="img-1" src="{{ isset($images[1]) ? $images[1] : url(config('constants.DEFAULT_SHOE_STYLE_IMG')) }}"  class="img img-responsive"/>
                        <span onclick="uploadFile($('#image1'))" class="upload-text"> Upload <i class="fa fa-upload"></i></span>
                        <i class="delete-icon fa fa-times-circle fa-lg" data-icon="A" onclick="removeImage(1,'{{$defaultImage}}');" ></i>
                    </div>
                    <div class="item col-md-3 item-img" id="item-img-2">
                        <img onclick="uploadFile($('#image2'))" id="img-2" src="{{ isset($images[2]) ? $images[2] : url(config('constants.DEFAULT_SHOE_STYLE_IMG')) }}"  class="img img-responsive"/>
                        <span onclick="uploadFile($('#image2'))" class="upload-text"> Upload <i class="fa fa-upload"></i></span>
                        <i class="delete-icon fa fa-times-circle fa-lg" data-icon="A" onclick="removeImage(2,'{{$defaultImage}}');" ></i>
                    </div>
                    <div class="item col-md-3 item-img" id="item-img-3">
                        <img onclick="uploadFile($('#image3'))" id="img-3" src="{{ isset($images[3]) ? $images[3] : url(config('constants.DEFAULT_SHOE_STYLE_IMG')) }}"  class="img img-responsive"/>
                        <span onclick="uploadFile($('#image3'))" class="upload-text"> Upload <i class="fa fa-upload"></i></span>
                        <i class="delete-icon fa fa-times-circle fa-lg" data-icon="A" onclick="removeImage(3,'{{$defaultImage}}');" ></i>
                    </div>
                    {!! $errors->first('image0', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
</div>

<div class="form-group row {{ $errors->has('description_en') ? 'has-error' : ''}}">
    <label for="description_en" class="col-md-3 col-sm-5 col-form-label">Description English<span class="text-danger"></span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('description_en', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('description_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('description_vi') ? 'has-error' : ''}}">
    <label for="description_vi" class="col-md-3 col-sm-5 col-form-label">Description Vietnamese<span class="text-danger"></span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('description_vi', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('description_vi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('sub_description_en') ? 'has-error' : ''}}">
    <label for="sub_description_en" class="col-md-3 col-sm-5 col-form-label">Sub Description English<span class="text-danger"></span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('sub_description_en', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('sub_description_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('sub_description_vi') ? 'has-error' : ''}}">
    <label for="sub_description_vi" class="col-md-3 col-sm-5 col-form-label">Sub Description Vietnamese<span class="text-danger"></span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('sub_description_vi', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('sub_description_vi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('extra_en') ? 'has-error' : ''}}">
    <label for="extra_en" class="col-md-3 col-sm-5 col-form-label">Extra English<span class="text-danger"></span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('extra_en', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('extra_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('extra_vi') ? 'has-error' : ''}}">
    <label for="extra_vi" class="col-md-3 col-sm-5 col-form-label">Extra Vietnamese<span class="text-danger"></span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('extra_vi', null, ['class' => 'form-control summernote']) !!}
        {!! $errors->first('extra_vi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-12 text-right">
        <a href="{{ CommonService::getPreviousUrl(request())}}" class="btn btn-secondary">Cancel</a>
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
    </div>
</div>
