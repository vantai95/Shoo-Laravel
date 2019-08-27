@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-md-4 col-xs-12">
            <h4 class="page-title">Edit Shoes Category</h4>
        </div>
        <div class="col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/shoe-categories') }}">Shoes Categories</a></li>
                <li class="active">Edit Shoes Category</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::model($shoeCategories, ['method' => 'PATCH', 'url' => ['/admin/shoe-categories', $shoeCategories->id], 'class' => 'form-horizontal', 'files' => true]) !!}
                @include ('admin.shoe_categories.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
            </div>

        </div>
    </div>
@endsection
