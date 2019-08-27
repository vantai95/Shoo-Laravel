@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-md-4 col-xs-12">
            <h4 class="page-title">Edit Flagship Style</h4>
        </div>
        <div class="col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/flagship-styles') }}">Flagship Styles</a></li>
                <li class="active">Edit Flagship Style</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::model($flagshipStyle, ['method' => 'PATCH', 'url' => ['/admin/flagship-styles', $flagshipStyle->id], 'class' => 'form-horizontal', 'files' => true]) !!}
                @include ('admin.flagship_styles.form', ['submitButtonText' => 'Update', 'imageUrl' => $flagshipStyle->imageUrl()])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
