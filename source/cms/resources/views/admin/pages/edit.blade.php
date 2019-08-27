@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-md-4 col-xs-12">
            <h4 class="page-title">Edit Page Banner</h4>
        </div>
        <div class="col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/page-banner') }}">Page Banner</a></li>
                <li class="active">Edit Page Banner</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::model($page, ['method' => 'PATCH', 'url' => ['/admin/page-banner', $page->id], 'class' => 'form-horizontal', 'files' => true]) !!}

                @include ('admin.pages.form', ['submitButtonText' => 'Update','bannerUrl' => $page->bannerUrl()])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
