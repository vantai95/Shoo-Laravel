@extends('layouts.admin.app')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Style Details</h4>
        </div>
        <div class="col-lg-8 col-md-9 col-sm-7 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}">Admin</a></li>
                <li><a href="{{ url('/admin/shoe-styles') }}">Styles</a></li>
                <li class="active">Style Details</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="form-horizontal">
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Model:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $shoeStyle->shoeTypes->name }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Main Name English:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $shoeStyle->main_name_en }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Main Name Vietnamese:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $shoeStyle->main_name_vi }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Sub Name English:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $shoeStyle->sub_name_en }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Sub Name Vietnamese:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {{ $shoeStyle->sub_name_vi }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Price:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            ${{ $shoeStyle->price }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Images:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            <div class="owl-carousel shoes-styles-image" chosen="1" data-items="4"
                                 data-dots="true"
                            >
                                @foreach( $shoeStyle->images() as $image)
                                    <div class="item">
                                        <img src="{{ $image }}" alt="shoes-style-img" itemprop="image">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Description English:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {!! $shoeStyle->description_en !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Description Vietnamese:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {!! $shoeStyle->description_vi !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Sub Description English:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {!! $shoeStyle->sub_description_en !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-sm-5 col-form-label">
                            Sub Description Vietnamese:
                        </label>
                        <div class="col-md-9 col-sm-7">
                            {!! $shoeStyle->sub_description_vi !!}
                        </div>
                    </div>
                    <div class="m-t-20">
                        <a href="{{ url('/admin/shoe-styles') }}" class="btn btn-secondary">
                            Back
                        </a>
                    </div>
                </div>
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