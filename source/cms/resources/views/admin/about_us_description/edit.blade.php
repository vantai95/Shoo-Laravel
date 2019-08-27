@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-md-4 col-xs-12">
            <h4 class="page-title">Edit About Us Description</h4>
        </div>
        <div class="col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/about-us-description') }}">About Us Description</a></li>
                <li class="active">Edit About Us Description</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::model($AboutUsDescription, ['method' => 'PATCH', 'url' => ['/admin/about-us-description', $AboutUsDescription->id], 'class' => 'form-horizontal', 'files' => true]) !!}
                @include ('admin.about_us_description.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
