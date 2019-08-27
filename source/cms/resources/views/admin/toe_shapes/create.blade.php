@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-xs-12">
            <h4 class="page-title">Add New Toe Shape</h4>
        </div>
        <div class="col-lg-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/toe-shapes') }}">Toe Shapes</a></li>
                <li class="active">Add New Toe Shape</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::open(['url' => '/admin/toe-shapes', 'class' => 'form-horizontal', 'files' => true]) !!}

                @include ('admin.toe_shapes.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
