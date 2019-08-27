@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Details</h4>
        </div>
        <div class="col-lg-8 col-md-9 col-sm-7 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/pf-details') }}">Product Feature Details</a></li>
                <li class="active">Details</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="form-horizontal">
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Title English:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            <strong>{{ $feature->title_en  }}</strong>
                            <br>
                            {{--<small><a href="{{ url('product-feature-detail', $feature->slug) }}" target="_blank">{{ url('product-feature-detail', $feature->slug) }}</a></small>--}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Title Vietnamese:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            <strong>{{ $feature->title_vi  }}</strong>
                            <br>
                            {{--<small><a href="{{ url('product-feature-detail', $feature->slug) }}" target="_blank">{{ url('product-feature-detail', $feature->slug) }}</a></small>--}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Content English:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {!! $feature->content_en !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Content Vietnamese:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {!! $feature->content_vi !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Image:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            <img class="img img-responsive" src="{{ $feature->imageUrl() }}" alt="product-feature-img" style="padding: 0;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Status:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $feature->status() }}
                        </div>
                    </div>
                    <div class="m-t-20">
                        <a href="{{ URL::previous() }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
