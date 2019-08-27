@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-md-4 col-xs-12">
            <h4 class="page-title">Edit Currency</h4>
        </div>
        <div class="col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/settings/currency') }}">Currency List</a></li>
                <li class="active">Edit Currency</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::model($currency, ['method' => 'PATCH', 'url' => ['/admin/settings/currency', $currency->id], 'class' => 'form-horizontal', 'files' => true]) !!}
                @include ('admin.settings.currency.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
