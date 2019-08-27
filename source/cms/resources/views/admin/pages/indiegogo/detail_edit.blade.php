@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-xs-12">
            <h4 class="page-title">Edit Detail</h4>
        </div>
        <div class="col-lg-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/pages') }}">Pages</a></li>
                <li class="active">Edit Detail</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::model($detail, ['method' => 'PATCH', 'url' => ['/admin/pages/indiegogo/detail', $detail->id], 'class' => 'form-horizontal', 'files' => true]) !!}
                @include ('admin.pages.indiegogo.detail_form', ['submitButtonText' => 'Update', 'imageUrl' => $detail->images()->first()->imageUrl()])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection