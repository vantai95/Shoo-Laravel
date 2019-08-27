@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-md-4 col-xs-12">
            <h4 class="page-title">INDIEGOGO PAGE</h4>
        </div>
        <div class="col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li class="active">Indiegogo Page</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::model(null, ['method' => 'POST', 'url' => ['/admin/pages/indiegogo'], 'class' => 'form-horizontal', 'files' => true]) !!}
                    @include ('admin.pages.indiegogo.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('extra_scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#details').summernote();
        });
    </script>

@endsection