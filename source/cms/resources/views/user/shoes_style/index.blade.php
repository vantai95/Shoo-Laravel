@extends('layouts.user.app')

@section('content')

    {{--SHOES STYLE--}}

    <div class="main-wrapper">
        <div class="container">
            <div class="ss-ourblog">
                <div class="container shoes_style_detail">
                    <h2 class="bd-recent mg-t70 text-center">{{ \Illuminate\Support\Str::upper($shoesType_name)  }}</h2>
                    <p class="mgt40 mg-b40 description-content hidden-xs">
                        {!! $shoesType_description !!}
                    </p>
                    <div class="ss-blog-post kt-blog-post">
                        @for($i = 0; $i <= (integer)(count($shoesStyles) / 4); $i++)
                            <div class="row">
                                @foreach($shoesStyles as $key => $shoesStyle)
                                    @if( (integer)($key / 4) == $i)
                                        <div class="col-sm-3">
                                            <article class="blog-item">
                                                <div class="img-container-styles img-responsive">
                                                    <div class="item img-wrapper">
                                                        <a href="{{ url('shoes-style-detail', ['shoes_type_slug' => $shoes_type_slug, 'shoes_style_slug' => \Illuminate\Support\Str::lower($shoesStyle->slug) ]) }}">
                                                            <img width="600px"
                                                                 src="{{ $shoesStyle->imageUrl() }}">
                                                        </a>
                                                    </div>
                                                </div>
                                                {{--<div class="post-format">--}}
                                                {{--<figure><img alt="" src="{{ $shoesStyle->imageUrl() }}"></figure>--}}
                                                {{--<a class="readmore"--}}
                                                {{--href="{{ url('shoes-style-detail/'.\Illuminate\Support\Str::lower($shoesStyle->name)) }}">--}}
                                                {{--Read more--}}
                                                {{--<span class="pe-icon pe-7s-right-arrow"></span>--}}
                                                {{--</a>--}}
                                                {{--</div>--}}
                                                <div class="post-info">
                                                    <h3 class="title-post text-center">
                                                       <b> <a href="{{ url('shoes-style-detail', ['shoes_type_slug' => $shoes_type_slug, 'shoes_style_slug' => \Illuminate\Support\Str::lower($shoesStyle->slug) ]) }}">{{ $shoesStyle->main_name }}</a></b>
                                                    </h3>
                                                </div>
                                                <h3 class="pf-title sub-title-post text-center">
                                                    {{CommonService::formatPriceBaseCodeExchange($shoesStyle->discount_price,$currencyCode,"$exchangeRate")}}
                                                </h3>
                                            </article>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--END SHOES--}}


@endsection
