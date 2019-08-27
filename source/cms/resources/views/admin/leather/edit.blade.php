@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-md-4 col-xs-12">
            <h4 class="page-title">Edit Leather</h4>
        </div>
        <div class="col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/leather') }}">Leather</a></li>
                <li class="active">Edit Leather</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::model($leather, ['method' => 'PATCH', 'url' => ['/admin/leather', $leather->id], 'class' => 'form-horizontal', 'files' => true]) !!}
                @include ('admin.leather.form', ['submitButtonText' => 'Update','imageUrl' => $leather->imageUrl()])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
