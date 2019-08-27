@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Outsole Type Details</h4>
        </div>
        <div class="col-lg-8 col-md-9 col-sm-7 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/outsole-types') }}">Outsole Types</a></li>
                <li class="active">Outsole Type Detailss</li>
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
                            @foreach($outsoleTypes->categories as $category)
                                <span class="badge badge-info">{{ $category->name }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Name English:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $outsoleTypes->name_en }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Name Vietnamese:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $outsoleTypes->name_vi }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Image:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            <img class="img img-responsive" src="{{ $outsoleTypes->imageUrl() }}" alt="outsole-img" style="padding: 0;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Description English:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {!!  $outsoleTypes->description_vi !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Description Vietnamese:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {!!  $outsoleTypes->description_en !!}
                        </div>
                    </div>
                    <div class="m-t-20">
                        <a href="{{ url('/admin/outsole-types') }}" class="btn btn-secondary">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
