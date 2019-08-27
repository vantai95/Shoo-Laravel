@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-md-4 col-xs-12">
            <h4 class="page-title">Edit Product Feature</h4>
        </div>
        <div class="col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/product-feature') }}">Product Feature</a></li>
                <li class="active">Edit Product Feature</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::model($feature, ['method' => 'PATCH', 'url' => ['/admin/product-feature', $feature->id], 'class' => 'form-horizontal', 'files' => true]) !!}
                @include ('admin.product_feature.form', ['submitButtonText' => 'Update', 'imageProductFeatureURL' => $feature->imageProductFeatureURL()])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
