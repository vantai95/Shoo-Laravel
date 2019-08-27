@php
    $meta = $page->meta();
    $details = $meta->where('key', \App\Models\PageMeta::CONSTANTS['DETAIL'])->first();
@endphp
<div class="form-group row {{ $errors->has('detail') ? 'has-error' : ''}}">
    <label for="detail" class="col-md-3 col-sm-5 col-form-label">Details <span
                class="text-danger">*</span></label>
    <div class="col-md-9 col-sm-7">
        {!! Form::textarea('detail_en', isset($details) ? $details->value_en : "", ['class' => 'form-control summernote', 'id' => 'details']) !!}

        {!! $errors->first('detail_en', '<p class="help-block">:message</p>') !!}
    </div>
     <label for="detail" class="col-md-3 col-sm-5 col-form-label">Chi tiết <span
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