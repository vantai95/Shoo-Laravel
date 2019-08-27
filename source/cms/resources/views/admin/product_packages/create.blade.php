@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-xs-12">
            <h4 class="page-title">Add New Product Package</h4>
        </div>
        <div class="col-lg-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/product-packages') }}">Product Packages</a></li>
                <li class="active">Add New Product Packages</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::open(['url' => '/admin/product-packages', 'class' => 'form-horizontal', 'files' => true]) !!}

                @include ('admin.product_packages.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
