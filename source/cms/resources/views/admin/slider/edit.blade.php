@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-md-4 col-xs-12">
            <h4 class="page-title">Edit Slider</h4>
        </div>
        <div class="col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/slider') }}">Slider</a></li>
                <li class="active">Edit Slider</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::model($slider, ['method' => 'PATCH', 'url' => ['/admin/slider', $slider->id], 'class' => 'form-horizontal', 'files' => true]) !!}
                @include ('admin.slider.form', ['submitButtonText' => 'Update','sliderUrl' => $slider->sliderUrl()])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
