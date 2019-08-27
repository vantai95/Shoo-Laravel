@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-md-4 col-xs-12">
            <h4 class="page-title">Edit Shoes Size</h4>
        </div>
        <div class="col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/shoe-sizes') }}">Sizes</a></li>
                <li class="active">Edit Shoe Size</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::model($shoeSize, ['method' => 'PATCH', 'url' => ['/admin/shoe-sizes', $shoeSize->id], 'class' => 'form-horizontal', 'files' => true]) !!}

                @include ('admin.shoe_sizes.form', ['submitButtonText' => 'Update', 'shoeSize' => $shoeSize])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection