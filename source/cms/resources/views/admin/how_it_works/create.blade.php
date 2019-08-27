@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-xs-12">
            <h4 class="page-title">Create New</h4>
        </div>
        <div class="col-lg-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/page-how-it-works') }}">How It Work</a></li>
                <li class="active">Create New</li>
            </ol>
        </div>
    </div>
    {!! Form::open(['url' => '/admin/page-how-it-works', 'class' => 'form-horizontal', 'files' => true]) !!}
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                @include ('admin.how_it_works.form')
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
