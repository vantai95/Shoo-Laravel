@extends('layouts.user.app')

@section('content')

    {{--How it works--}}
    <div class="main-wrapper normalize-font-size">
        <div class="container">
            {{--<div class="banner-page hidden-xs">--}}
            {{--<img src="{{asset($bannerImage->bannerUrl())}}">--}}
            {{--</div>--}}
            {{--<div class="section-breadcrumb">--}}
            {{--<div class="breadcrumb">--}}
            {{--<a href="{{url('/')}}">Home</a>--}}
            {{--<span>How It Works</span>--}}
            {{--</div>--}}
            {{--</div>--}}

            <div class="content information-page how-it-works-content">

                {{--<h1 class='page-heading'>{{ @trans("pages.how_it_works.how_it_works")}}</h1>--}}
                <div class="info-container">
                    <div class="section fast-easy">
                        <h2>{{ @trans("pages.how_it_works.how_it_works")}}</h2>
                        <p class='introduction'>{{ @trans("pages.how_it_works.how_it_works_description")}}</p>
                        <div id='mobile-gallery' class="section-how-it-work">
                            <div class='swiper hidden-md hidden-sm hidden-xs'>

                                <ul class='subsection three-steps'>

                                    <li class='selected step-1 clearfix'>
                                        <h3 class='step-header'>1. {{$howItWorks[0]['title']}}</h3>
                                        <div class='image hide-mobile'>
                                            <img src="{{url($howItWorks[0]->imageUrl())}}">
                                        </div>
                                        <div class="description">{!! $howItWorks[0]['description'] !!}</div>
                                    </li>

                                    <li class='step-2 clearfix'>
                                        <h3 class='step-header '>2. {{$howItWorks[1]['title']}}</h3>
                                        <div class='image hide-mobile'>
                                            <img src="{{url($howItWorks[1]->imageUrl())}}">
                                        </div>
                                        <div class="description">{!! $howItWorks[1]['description'] !!}</div>
                                    </li>

                                    <li class='step-3 clearfix last'>
                                        <h3 class='step-header'>3. {{$howItWorks[2]['title']}}</h3>
                                        <div class='image hide-mobile'>
                                            <img src="{{url($howItWorks[2]->imageUrl())}}">
                                        </div>
                                        <div class="description">{!! $howItWorks[2]['description'] !!}</div>
                                    </li>

                                </ul>

                            </div>

                            <div class="row hidden-lg text-center">
                                <div class="owl-carousel owl-theme how-it-work-carousel" data-items='1.1'
                                     data-center="true" data-margin="18" data-nav="true">
                                    <div class="carousel-item">
                                        <h3 class='step-header'>1. {{$howItWorks[0]['title']}}</h3>
                                        <p>{!! $howItWorks[0]['description']!!}</p>
                                        <center><img src="{{url($howItWorks[0]->imageUrl())}}"></center>
                                    </div>
                                    <div class="carousel-item">
                                        <h3 class='step-header '>2. {{$howItWorks[1]['title']}}</h3>
                                        <p>{!!$howItWorks[1]['description']!!}</p>
                                        <center><img src="{{url($howItWorks[1]->imageUrl())}}"></center>
                                    </div>
                                    <div class="carousel-item">
                                        <h3 class='step-header'>3. {{$howItWorks[2]['title']}}</h3>
                                        <p>{!!$howItWorks[2]['description']!!}</p>
                                        <center><img src="{{url($howItWorks[2]->imageUrl())}}"></center>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Blue Session -->
        <div class="flex-row background-blue flex-column">
            <h1 class="text-center title center-block text-white"> {{ @trans("pages.how_it_works.start_from")}} <br/> {{ @trans("pages.how_it_works.only_on_indiegogo")}}
            </h1>
            <div class="max-505">
                <form method="post" class="first" action="">
                    <input type='hidden' name='reflink' value=''>
                    <input type='hidden' name='webform[reflink]' value=''>
                    <input type='hidden' name='custom_reflink' value=''>
                    <div class="group" style="visibility: hidden">
                        <input name="webform[email]" type="text">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>{{ @trans("pages.how_it_works.your_email")}}</label>
                    </div>
                    <a @if($indiegogoLink != null) href="{{ $indiegogoLink->config_value }}" @else href="#"
                       @endif target="_blank" class="button-indiegogo button-primary-indiegogo"
                       style="margin-top: 15px;padding-bottom: 20px;padding-top: 20px;text-decoration: none; top: -35px; line-height: 30px;">
                       {{ @trans("pages.how_it_works.get_it_now")}}
                        <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                    </a>
                </form>
            </div>
        </div>
        <!-- End Blue Session -->
        <div class="container">
            <div class="text-center mg-t50">
                <h2>{{ @trans("pages.how_it_works.delivery_information")}}</h2>                
                {!! @trans("pages.how_it_works.delivery_information_description")!!}
            </div>

            <hr class="mg-t50 mg-b50" style="text-align: center; border: 1px solid; width: 20%; " />

            <div class="text-center mg-t50 mg-b50">
            <h2>{{ @trans("pages.how_it_works.guarantee_fit")}}</h2>                
            {!! @trans("pages.how_it_works.guarantee_fit_description")!!}
            </div>
        </div>

    </div>
    {{--End How it works--}}


@endsection
@section('extra_scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $("li").find("h3").click(
                function () {
                    $("ul").find("li").removeClass("selected");
                    $(this).parent("li").addClass("selected");
                }
            );
        });
    </script>
@endsection