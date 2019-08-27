@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title"> How It Work Detail</h4>
        </div>
        <div class="col-lg-8 col-md-9 col-sm-7 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/home-how-it-works') }}"> How It Works</a></li>
                <li class="active">How It Work Detail</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="form-horizontal">
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">Title English</label>
                        <div class="col-md-9 col-sm-7">
                            {{ $homeHowItWork->title_en }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">Title Vietnamese</label>
                        <div class="col-md-9 col-sm-7">
                            {{ $homeHowItWork->title_vi }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">Description English</label>
                        <div class="col-md-9 col-sm-7">
                            {!! $homeHowItWork->description_en !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">Description Vietnamese</label>
                        <div class="col-md-9 col-sm-7">
                            {!! $homeHowItWork->description_vi !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">Image</label>
                        <div class="col-md-9 col-sm-7">
                            <img class="img img-responsive" src="{{ $homeHowItWork->imageUrl() }}" alt="home-how-it-work-img" style="padding: 0;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">Status</label>
                        <div class="col-md-9 col-sm-7">
                            {{ $homeHowItWork->status() }}
                        </div>
                    </div>
                </div>
                <div class="m-t-20">
                    <a href="{{ url('/admin/home-how-it-works') }}" class="btn btn-secondary">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
