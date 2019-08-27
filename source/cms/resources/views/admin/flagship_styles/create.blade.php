@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-xs-12">
            <h4 class="page-title">Add New Flagship Style</h4>
        </div>
        <div class="col-lg-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/flagship-styles') }}">Flagship Styles</a></li>
                <li class="active">Add New Flagship Style</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::open(['url' => '/admin/flagship-styles', 'class' => 'form-horizontal', 'files' => true]) !!}

                @include ('admin.flagship_styles.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
