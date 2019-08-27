@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-xs-12">
            <h4 class="page-title">Edit Page Banner</h4>
        </div>
        <div class="col-lg-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/page-banner') }}">Page Banner</a></li>
                <li class="active">Edit Page Banner</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="form-horizontal">
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Banner Image:
                        </label>
                        <div class="col-md-9 col-sm-7" >
                            <img src="{{ $page->bannerUrl() }}" alt="banner-img">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Status:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $page->status() }}
                        </div>
                    </div>
                    <div class="m-t-20">
                        <a href="{{ url('/admin/page-banner') }}" class="btn btn-secondary">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
