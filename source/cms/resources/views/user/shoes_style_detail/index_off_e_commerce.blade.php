@extends('layouts.user.app')

@section('content')

    {{--SHOES STYLE DETAIL--}}
    <div class="main-wrapper shoe-details" style="padding-top: 10px">
        <div class="container">
            <div class="main-container ">
                <div class="kt-single-product">
                    <div class="row product-main-info catalog-product-view ">
                        <div class="product-wrap product-view product-shop-wrap">
                            <!-- product images -->
                            <div class="col-sm-6">
                                <div class="img-container img-responsive">
                                    <div class="item img-wrapper">
                                        <img src="{{$shoesStyleDetail->imageUrl()}}"
                                             alt="{{$shoesStyleDetail->main_name}}" itemprop="image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 product-item-center-off">
                                <div>
                                    <div class="text-divider title">
                                        <h1 class="align-left no-margin h h1"
                                            itemprop="name">{{$shoesStyleDetail->main_name}}</h1>
                                        <div>
                                            {!! $shoesStyleDetail->sub_description!!}
                                        </div>
                                    </div>
                                    <div class="text-divider text-divider-last">
                                        <div>
                                            @if(empty($shoesStyleDetail->discount_price))
                                                <div class="price-box">
                                                    <span class="regular-price">
                                                        <span class="price">
                                                        USD {{CommonService::formatPrice($shoesStyleDetail->price)}}
                                                        </span>
                                                    </span>
                                                </div>
                                            @else
                                                <div class="price-box">
                                                    <div class="regular-price save-off">
                                                        <span class="">
                                                            <h4> USD {{CommonService::formatPrice($shoesStyleDetail->price)}}</h4>
                                                        </span>
                                                    </div>
                                                    <div class="regular-price">
                                                        <span class="price">
                                                            <h3> USD {{CommonService::formatPrice($shoesStyleDetail->discount_price)}}</h3>
                                                        </span>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="prod-description-desc">
                                                <div>{!! $shoesStyleDetail->description !!}</div>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="{{$indiegogoLink->config_value}}" class="btn-cart kt-button" target="_blank">
                                        <span>Get it on Indiegogo</span>
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top: -10px">
                            <div id="further-details" class="col-sm-12 description back-white clearfix">
                                <div class="content align-center">
                                    {!! $shoesStyleDetail->extra !!}
                                    {{--<h2 id="details_heading"--}}
                                        {{--class="margin-bal relative lowercase font-sml supergroteska_med h">A Modern Masterpiece</h2>--}}
                                    {{--<hr style="height:1px;border:none;color:#eb1478;background-color:#eb1478;width: 10%; margin-top: 7px; margin-bottom: 24px;"/>--}}

                                    {{--<div class="clearfix relative">--}}
                                        {{--<span>--}}
                                            {{--<h3 class="h3-title">Burgundy utah & delapré</h3>--}}
                                        {{--</span>--}}
                                        {{--<span class="description">--}}
                                        {{--<p>{!!$shoesStyleDetail->sub_description!!}</p>--}}
                                    {{--</span>--}}
                                    {{--</div>--}}
                                    {{--<hr style="height:1px;border:none;color:#eb1478;background-color:#eb1478;width: 10%; margin-top: 7px; margin-bottom: 24px;"/>--}}
                                    {{--<div class="clearfix relative">--}}
                                    {{--<span class="description">--}}
                                        {{--<span>--}}
                                             {{--<h3 class="h3-title">Dainite rubber sole</h3>--}}
                                        {{--</span>--}}
                                       {{--<p> {!! $shoesStyleDetail->description !!} </p>--}}
                                    {{--</span>--}}
                                    {{--</div>--}}
                                    {{--<hr style="height:1px;border:none;color:#eb1478;background-color:#eb1478;width: 10%; margin-top: 7px; margin-bottom: 0px;"/>--}}
                                </div>
                            </div>
                        </div>

                        <div class="kt-product-slide1" style="margin-top: 30px">
                            <h2 class="title-slide mg-related-text text-center" style="margin-top:35px; margin-bottom: 50px">RELATED
                                PRODUCT</h2>
                            <div class="products owl-carousel nav-style-1" data-margin="30" data-items="4"
                                 style="margin-bottom: 30px"
                                 data-dots="false"
                                 data-nav="true"
                                 data-responsive='{"0":{"items":1},"600":{"items":2},"992":{"items":3},"1200":{"items":4}}'>
                                @foreach($relatedProduct as $item)
                                    <div class="product kt-blog-post">
                                        <article class="blog-item">
                                            <div class="img-container-related img-responsive">
                                                <div class="item img-wrapper">
                                                    <a href="{{ url('shoes-style-detail', ['name' => \Illuminate\Support\Str::lower($item->main_name), 'sub_name' => \Illuminate\Support\Str::lower($item->sub_name) ]) }}">
                                                        <img width="600px" src="{{ asset($item->imageUrl()) }}">
                                                    </a>
                                                </div>
                                            </div>
                                            {{--<a href="{{ url('shoes-style-detail', \Illuminate\Support\Str::lower($item->name)) }}"><img--}}
                                            {{--alt="" src="{{ $item->imageUrl() }}"></a>--}}
                                            {{--<div class="product-button">--}}
                                            {{--<a href="{{ url('shoes-style-detail', \Illuminate\Support\Str::lower($item->name)) }}">Read--}}
                                            {{--more <span class="pe-icon pe-7s-right-arrow"></span></a>--}}
                                            {{--</div>--}}
                                            <div class="info-product post-info">
                                                <h3 class="title-post text-center"><b>
                                                        <a href="{{ url('shoes-style-detail',
                                                        ['name' => \Illuminate\Support\Str::lower($item->main_name), 'sub_name' => \Illuminate\Support\Str::lower($item->sub_name) ]) }}">{{ $item->main_name }}</a>
                                                    </b>
                                                </h3>
                                            </div>
                                            <h3 class="pf-title sub-title-post text-center">
                                                {{ $item->sub_name }}
                                            </h3>

                                        </article>

                                    </div>
                                @endforeach
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{--END SHOES STYLE DETAIL--}}
        @endsection

        @section('extra_scripts')
            <script>
                $(document).ready(function () {
                    var count = $("div.owl-stage").children().length;
                    $("div.owl-controls").addClass('hidden-lg hidden-md');

                });
            </script>
@endsection