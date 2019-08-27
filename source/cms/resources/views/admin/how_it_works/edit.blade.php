@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-md-4 col-xs-12">
            <h4 class="page-title">Edit How It Work</h4>
        </div>
        <div class="col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/page-how-it-works') }}">How It Work</a></li>
                <li class="active">Edit How It Work</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::model($howItWork, ['method' => 'PATCH', 'url' => ['/admin/page-how-it-works', $howItWork->id], 'class' => 'form-horizontal', 'files' => true]) !!}

                @include ('admin.how_it_works.form', ['submitButtonText' => 'Update','imageUrl' => $howItWork->imageUrl()])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
