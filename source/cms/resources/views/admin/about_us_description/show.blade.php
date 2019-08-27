@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">About Us Description Details</h4>
        </div>
        <div class="col-lg-8 col-md-9 col-sm-7 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/about-us-description') }}">About Us Description</a></li>
                <li class="active">About Us Description Details</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="form-horizontal">
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Description English:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {!!  $AboutUsDescription->description_en !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Description Vietnamese:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {!!  $AboutUsDescription->description_vi !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                           Sub Description English:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {!! $AboutUsDescription->sub_description_en !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                           Sub Description Vietnamese:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {!! $AboutUsDescription->sub_description_vi !!}
                        </div>
                    </div>
                    <div class="m-t-20">
                        <a href="{{ url('/admin/about-us-description') }}" class="btn btn-secondary">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
