@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-md-4 col-xs-12">
            <h4 class="page-title">Edit Product Package</h4>
        </div>
        <div class="col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/product-packages') }}">Product Packages</a></li>
                <li class="active">Edit Product Package</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::model($productPackage, ['method' => 'PATCH', 'url' => ['/admin/product-packages', $productPackage->id], 'class' => 'form-horizontal', 'files' => true]) !!}
                @include ('admin.product_packages.form', ['submitButtonText' => 'Update', 'imageUrl' => $productPackage->imageUrl()])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
