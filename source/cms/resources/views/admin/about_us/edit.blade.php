@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-md-4 col-xs-12">
            <h4 class="page-title">Edit About Us Image</h4>
        </div>
        <div class="col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/about-us-image') }}">About Us Image</a></li>
                <li class="active">Edit About Us Image</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::model($aboutUsImage, ['method' => 'PATCH', 'url' => ['/admin/about-us-image', $aboutUsImage->id], 'class' => 'form-horizontal', 'files' => true]) !!}
                @include ('admin.about_us.form', ['submitButtonText' => 'Update', 'imageUrl' => $aboutUsImage->imageUrl(), 'is_banner' => $aboutUsImage->is_banner])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
