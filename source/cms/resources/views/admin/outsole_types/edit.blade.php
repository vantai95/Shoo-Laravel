@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-md-4 col-xs-12">
            <h4 class="page-title">Edit Outsole Type</h4>
        </div>
        <div class="col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/outsole-types') }}">Outsole Types</a></li>
                <li class="active">Edit Outsole Type</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::model($outsoleType, ['method' => 'PATCH', 'url' => ['/admin/outsole-types', $outsoleType->id], 'class' => 'form-horizontal', 'files' => true]) !!}
                @include ('admin.outsole_types.form', ['submitButtonText' => 'Update', 'imageUrl' => $outsoleType->imageUrl()])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
