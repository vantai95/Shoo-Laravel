@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-xs-12">
            <h4 class="page-title">Add New How It Work</h4>
        </div>
        <div class="col-lg-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/home-how-it-works') }}">How It Works</a></li>
                <li class="active">Add New How It Work</li>
            </ol>
        </div>
    </div>
    {!! Form::open(['url' => '/admin/home-how-it-works', 'class' => 'form-horizontal', 'files' => true]) !!}
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                @include ('admin.home_how_it_works.form')
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
