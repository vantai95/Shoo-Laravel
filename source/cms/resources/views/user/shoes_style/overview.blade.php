@extends('layouts.user.app')

@section('content')

    {{--SHOES STYLE--}}

    <div class="ss-ourblog mg-t70 shoes-style">
        <div class="container">
            <h2 class=" bd-recent mg-bottom-15 text-center">{{@trans("pages.shoes_style.collections")}}</h2>
            <div class="ss-blog-post kt-blog-post mg-t50">
                @foreach($shoesTypes as $key => $shoesType)
                    <div class="hidden-xs">
						
                        @if( (integer)($key % 2) == 0)
                            <div class="col-sm-12 black-bordered no-pad-left-right mg-b40">
                                <div class="col-sm-6 no-pad-left-right">
                                    <div class="">
                                        <a href="{{ url('shoes-style/'.\Illuminate\Support\Str::lower($shoesType->slug)) }}">
                                            <img class="shoes-styles-image" src="{{ asset($shoesType->imageUrl()) }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 mg-t30">
                                    <div class="post-info display-left">
                                        <h2 class="title-post">
                                            <a href="{{ url('shoes-style/'.\Illuminate\Support\Str::lower($shoesType->slug)) }}"><b>{{ $shoesType->name }}</b></a>
                                        </h2>
                                        <div class="excerpt-post description-content ">
                                            {!!  $shoesType->description !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                        @else
                            <div class="col-sm-12 black-bordered no-pad-left-right mg-b40">
                                <div class="col-sm-6 mg-t30">
                                    <div class="post-info display-right">
                                        <h2 class="title-post">
                                            <a href="{{ url('shoes-style/'.\Illuminate\Support\Str::lower($shoesType->slug)) }}"><b>{{ $shoesType->name }}</b></a>
                                        </h2>
                                        <div class="excerpt-post description-content ">
                                            {!!  $shoesType->description !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 no-pad-left-right">
                                    <div class=" ">
                                        <a href="{{ url('shoes-style/'.\Illuminate\Support\Str::lower($shoesType->slug)) }}">
                                            <img class="shoes-styles-image" src="{{ asset($shoesType->imageUrl()) }}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="hidden-sm hidden-md hidden-lg">
                        <div class="col-sm-6 ">
                            <div class="img-container img-responsive">
                                <div class="item img-wrapper">
                                    <a href="{{ url('shoes-style/'.\Illuminate\Support\Str::lower($shoesType->slug)) }}">
                                        <img width="355px" src="{{ asset($shoesType->imageUrl()) }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="post-info">
                                <h2 class="title-post mg-model-image">
                                    <a href="{{ url('shoes-style/'.\Illuminate\Support\Str::lower($shoesType->slug)) }}"><b>{{ $shoesType->name }}</b></a>
                                </h2>
                                <div class="description-mg-bottom excerpt-post description-content ">
                                    {!!  $shoesType->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    {{--END SHOES--}}


@endsection
