@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Product Package Details</h4>
        </div>
        <div class="col-lg-8 col-md-9 col-sm-7 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/product-packages') }}">Product Packages</a></li>
                <li class="active">Product Package Details</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="form-horizontal">
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Category
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $productPackage->category->name_en }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Name English:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $productPackage->name_en }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Name Vietnamese:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $productPackage->name_vi }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Price:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $productPackage->price }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Volume:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $productPackage->volume }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Status:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $productPackage->status() }}
                        </div>
                    </div>
                    <div class="m-t-20">
                        <a href="{{ url('/admin/product-packages') }}" class="btn btn-secondary">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
