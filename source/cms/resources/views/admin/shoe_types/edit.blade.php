@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-md-4 col-xs-12">
            <h4 class="page-title">Edit Model</h4>
        </div>
        <div class="col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/shoe-types') }}">Models</a></li>
                <li class="active">Edit Model</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::model($shoeType, ['method' => 'PATCH', 'url' => ['/admin/shoe-types', $shoeType->id], 'class' => 'form-horizontal', 'files' => true]) !!}

                @include ('admin.shoe_types.form', ['submitButtonText' => 'Update','imageUrl' => $shoeType->imageUrl()])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
