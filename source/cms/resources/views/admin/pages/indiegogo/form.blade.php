@php
    $meta = $indiegogo->meta();
    $title = $meta->where('key', \App\Models\PageMeta::CONSTANTS['TITLE'])->first();
    $meta = $indiegogo->meta();
    $video = $meta->where('key', \App\Models\PageMeta::CONSTANTS['VIDEO'])->first();
    $meta = $indiegogo->meta();
    $details = $meta->where('key', \App\Models\PageMeta::CONSTANTS['DETAIL'])->first();
    $meta = $indiegogo->meta();
    $description = $meta->where('key', \App\Models\PageMeta::CONSTANTS['DESCRIPTION'])->first();
    $meta = $indiegogo->meta();
    $facebook = $meta->where('key', \App\Models\PageMeta::CONSTANTS['FACEBOOK'])->first();
    $meta = $indiegogo->meta();
    $youtube = $meta->where('key', \App\Models\PageMeta::CONSTANTS['YOUTUBE'])->first();
    $meta = $indiegogo->meta();
    $ratings = $meta->where('key', \App\Models\PageMeta::CONSTANTS['RATINGS'])->first();
@endphp
<div class="form-group row {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="col-md-3 col-sm-5 col-form-label">Title En <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <input name="title_en" id="title" @if($title != null) value="{{ $title->value_en }}" @endif class="form-control">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="col-md-3 col-sm-5 col-form-label">Title Vi <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <input name="title_vi" id="title" @if($title != null) value="{{ $title->value_vi }}" @endif class="form-control">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="title" class="col-md-3 col-sm-5 col-form-label">Description En <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <input name="description_en" id="description" @if($description != null) value="{{ $description->value_en }}" @endif class="form-control">
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="title" class="col-md-3 col-sm-5 col-form-label">Description Vi <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <input name="description_vi" id="description" @if($description != null) value="{{ $description->value_vi }}" @endif class="form-control">
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('ratings') ? 'has-error' : ''}}">
    <label for="ratings" class="col-md-3 col-sm-5 col-form-label">Ratings En <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <input name="ratings_en" id="ratings" @if($ratings != null) value="{{ $ratings->value_en }}" @endif class="form-control">
        {!! $errors->first('ratings', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('ratings') ? 'has-error' : ''}}">
    <label for="ratings" class="col-md-3 col-sm-5 col-form-label">Ratings Vi <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <input name="ratings_vi" id="ratings" @if($ratings != null) value="{{ $ratings->value_vi }}" @endif class="form-control">
        {!! $errors->first('ratings', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('facebook') ? 'has-error' : ''}}">
    <label for="facebook" class="col-md-3 col-sm-5 col-form-label">Facebook <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <input name="facebook" id="facebook" @if($facebook != null) value="{{ $facebook->value_en }}" @endif class="form-control">
        {!! $errors->first('facebook', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('youtube') ? 'has-error' : ''}}">
    <label for="youtube" class="col-md-3 col-sm-5 col-form-label">Youtube <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <input name="youtube" id="youtube" @if($youtube != null) value="{{ $youtube->value_en }}" @endif class="form-control">
        {!! $errors->first('youtube', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('video') ? 'has-error' : ''}}">
    <label for="title" class="col-md-3 col-sm-5 col-form-label">Video <span class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        <input name="video" id="video" @if($video != null) value="{{ $video->value_en }}" @endif class="form-control">
        {!! $errors->first('video', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('detail') ? 'has-error' : ''}}">
    <label for="detail" class="col-md-3 col-sm-5 col-form-label">Details En <span
                class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('detail_en', isset($details) ? $details->value_en : "", ['class' => 'form-control summernote', 'id' => 'details']) !!}

        {!! $errors->first('detail_en', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row {{ $errors->has('detail') ? 'has-error' : ''}}">
    <label for="detail" class="col-md-3 col-sm-5 col-form-label">Details Vi <span
                class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('detail_vi', isset($details) ? $details->value_vi : "", ['class' => 'form-control summernote', 'id' => 'details']) !!}

        {!! $errors->first('detail_vi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-12 text-right">
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
    </div>
</div>
