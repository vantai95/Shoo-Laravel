@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Video</h4>
        </div>
        <div class="col-lg-8 col-md-9 col-sm-7 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/video') }}">Video</a></li>
                <li class="active">Detail</li>
            </ol>
        </div>
    </div>
    <div class="row">
        {{--<div align="center" class="col-sm-3">--}}
            {{--<iframe width="560" height="315" src="https://www.youtube.com/embed/NvsnYfLIcBA" frameborder="0"--}}
                    {{--allowfullscreen></iframe>--}}
        {{--</div>--}}

        <div class="col-sm-12">
            <div class="white-box">
                <div class="form-horizontal">
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Title English:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $video->title_en}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Title Vietnamese:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $video->title_vi}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Video:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $video->config_value}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label"></label>
                        <div class="col-md-9 col-sm-7">
                            <iframe width="560" height="315" src="{{ $video->config_value}}" frameborder="0"
                                    allowfullscreen></iframe>
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Status:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $video->status() }}
                        </div>
                    </div>
                    <div class="m-t-20">
                        <a href="{{ URL::previous() }}" class="btn btn-secondary">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
