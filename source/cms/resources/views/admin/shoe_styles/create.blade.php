@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-xs-12">
            <h4 class="page-title">Add New Style</h4>
        </div>
        <div class="col-lg-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/shoe-styles') }}">Styles</a></li>
                <li class="active">Add New Style </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                {!! Form::open(['url' => '/admin/shoe-styles', 'class' => 'form-horizontal', 'files' => true]) !!}

                @include ('admin.shoe_styles.form', ['images' => []])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('extra_scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            var count = $("div.owl-stage").children().length;
            $("div.owl-controls").addClass('hidden-lg hidden-md');
        });
        $('.owl-carousel').each(function(){
            var config = $(this).data();
            config.navText = ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'];
            var animateOut = $(this).data('animateout');
            var animateIn = $(this).data('animatein');
            if(typeof animateOut != 'undefined' ){
                config.animateOut = animateOut;
            }
            if(typeof animateIn != 'undefined' ){
                config.animateIn = animateIn;
            }
            var owl = $(this);
            owl.owlCarousel(config);
        });
    </script>
@endsection

