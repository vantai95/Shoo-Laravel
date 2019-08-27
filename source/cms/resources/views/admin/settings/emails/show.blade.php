@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Email Details</h4>
        </div>
        <div class="col-lg-8 col-md-9 col-sm-7 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/settings/emails') }}">Email Templates</a></li>
                <li class="active">Email Details</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="form-horizontal">
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">Name</label>
                        <div class="col-md-9 col-sm-7">
                            {{ $email->name }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">Subject English</label>
                        <div class="col-md-9 col-sm-7">
                            {{ $email->subject_en }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">Subject Vietnamese</label>
                        <div class="col-md-9 col-sm-7">
                            {{ $email->subject_vi }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">Content English</label>
                        <div class="col-md-9 col-sm-7">
                            {!! $email->content_en !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">Content Vietnamese</label>
                        <div class="col-md-9 col-sm-7">
                            {!! $email->content_vi !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 text-right">
                    <a href="{{ URL::previous() }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
    </div>
@endsection
