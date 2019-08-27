@extends('layouts.user.home')

@section('content')
    {{--Header--}}
    <header class="header header-style6">
        <div class="section-main-header">
            <div class="kt-mainmenu">
                <div class="container">
                    <div class="mainmenu-content">
                        <div class="left-mainmenu">
                            <div class="logo">
                                <a class="" title="{{ @trans("pages.header.virtus_logo")}}" href={{ url('/') }}>
                                    <img alt="Logo" src="{{asset('images/shoex cutom-fit shoes white.png')}}">
                                </a>
                            </div>
                        </div>
                        <div class="right-mainmenu">
                            <span class="togole-menu-mobile"><i class="fa fa-bars"></i></span>
                            <nav class="navigation">
                                <ul class="main-menu">
                                    <li class="menu-item menu-parent">
                                        <a href="{{ url('shoes-style') }}" title="">{{ @trans("pages.header.shoes")}} <span class="caret"></span></a>
                                        <ul class="sub-menu">
                                            @foreach($shoesTypes as $shoesType)
                                                <li class="menu-item">
                                                    <a href="{{url('shoes-style/'.\Illuminate\Support\Str::lower($shoesType->slug))}}"
                                                       title="{{ @trans("pages.header.virtus_shoes")}} {{$shoesType->name}}">{{ $shoesType ->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-parent">
                                        <a href="{{ url('how-it-works') }}" title="">{{ @trans("pages.header.how_it_works")}}</a>
                                    </li>
                                    <li class="menu-item menu-parent">
                                        <a href="{{url('about-us')}}" title="">{{ @trans("pages.header.about_us")}}</a>
                                    </li>
                                   
                                    @if($campaignMenuStatus == 1)
                                        <li class="menu-item menu-parent menu-header">                                   
                                            <a class="p-0 campaign-menu" onclick="mmConversionTag(1133926, this, 'blank','@php echo $indiegogoUrl; @endphp'); return false;" title="">
                                            {{$indiegogoName }}
                                            </a>
                                        </li>
                                    @endif
                                    @if(!\Illuminate\Support\Facades\Auth::check())
                                        <li class="menu-item menu-parent megamenu">
                                            <a href="{{ url('login') }}" title="{{ @trans("pages.header.login")}}">{{ @trans("pages.header.login")}}</a>
                                        </li>
                                    @else
                                        <li class="menu-item menu-parent ">
                                            <a href="#"
                                               title="">{{ \Illuminate\Support\Facades\Auth::user()->full_name }} <span
                                                        class="caret"></span></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="{{ url('/user/my-profile') }}" title="{{ @trans("pages.header.virtus_shoes_profile")}}">{{ @trans("pages.header.profile")}}</a>
                                                </li>                                                
                                                <li class="menu-item">
                                                    <a href="{{url('/user/my-orders')}}">{{ @trans("pages.header.my_orders")}}</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{url('/user/feet-profile')}}">{{ @trans("pages.header.feet_profile")}}</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{url('/user/shipping-information')}}">{{ @trans("pages.header.shipping_information")}}</a>
                                                </li>
                                                @if(!empty(\Illuminate\Support\Facades\Auth::user()->isAdmin()))
                                                    <li class="menu-item">
                                                        <a href="{{url('/admin')}}" title="{{ @trans("pages.header.virtus_shoes_management")}}">{{ @trans("pages.header.management")}}</a>
                                                    </li>
                                                @endif
                                                <li class="menu-item">
                                                    <a href="javascript:void(0)"
                                                       onclick="logout(event)" title="{{ @trans("pages.header.virtus_shoes_logout")}}">{{ @trans("pages.header.logout")}}</a>
                                                </li>
                                            </ul>
                                        </li>
                                    @endif
                                    @php
                                        $lang = Session::get('lang');
                                    @endphp
                                    <!-- <li class="menu-item menu-parent">
                                        <a class="p-0"> <img src="@php echo '/images/'.$lang.'.png'; @endphp" /> <span class="caret caret-header"></span></a>
                                        <ul class="sub-menu ">
                                            <li class="menu-item">
                                                <a href="{{url('/change-localization/en')}}" title="{{ @trans("pages.header.english")}}"><img src="/images/en.png" /> {{ @trans("pages.header.english")}}</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{url('/change-localization/vi')}}" title="{{ @trans("pages.header.vietnamese")}}"><img src="/images/vi.png" /> {{ @trans("pages.header.vietnamese")}}</a>
                                            </li>
                                        </ul>
                                    </li> -->                                  
                                    <li class="menu-item menu-parent menu-header menu-header-end menu-header-default">
                                        <a class="p-0" href="{{url('/shopping/user-cart')}}"><i class="fa fa-lg fa-shopping-cart"></i></a>
                                        <div class="cart-number-items"></div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="banner-home">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach($sliders as $slider)
                    <div class="item">
                        <img class="res-slider" src="{{ asset($slider->sliderUrl()) }}" alt="Banner">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="block-slide-content full-height">
                                    <div class="content-slide text-center content-style2">
                                        <div class="inner-content">
                                            <h3 class="title fz80 banner-text">{{ $slider ->title }}</h3>
                                            <div class="slide-desc">{!! $slider->description !!}</div>
                                            @if($campaignButtonStatus->config_value == 1)
                                            <a class="kt-button" 
                                                @if(!empty ($campaignButtonValue )) onclick="mmConversionTag(1133926, this,
                                                        'blank', '{{ $campaignButtonValue->config_value }}'); return false;"
                                                @else onclick="mmConversionTag(1133926, this, 'blank', '#'); return
                                                false;"
                                                @endif 
                                                href="" title="{{ $campaignButtonValue->title }}" target="_blank">{{ $campaignButtonValue->title }}</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- End Banner and Menu bar--}}

    {{--Shoes type--}}
    <div class="ss-ourblog mg-t70 homepage">
        <div class="container">
            <h2 class=" bd-recent model-mg-bottom text-center text-uppercase">{{ @trans("pages.home.models")}}</h2>
            <div class="ss-blog-post kt-blog-post">
                @for($i = 0; $i <= (integer)(count($shoesTypes) / 2); $i++)
                    <div class="row">
                        @foreach($shoesTypes as $key => $shoesType)
                            @if( (integer)($key / 2) == $i)
                                <div class="col-sm-6">
                                    <article class="blog-item">
                                        <div class="img-container img-responsive">
                                            <div class="item img-wrapper">
                                                <a href="{{ url('shoes-style/'.\Illuminate\Support\Str::lower($shoesType->slug)) }}"
                                                   title="{{ @trans("pages.header.virtus_shoes")}} {{$shoesType->name}}">
                                                    <img width="600px" src="{{ asset($shoesType->imageUrl()) }}"
                                                         alt="ShoeX shoes {{$shoesType->name}}">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <h2 class="title-post text-center mg-model-image">
                                                <a class="text-uppercase" href="{{ url('shoes-style/'.\Illuminate\Support\Str::lower($shoesType->slug)) }}"
                                                title="{{ @trans("pages.header.virtus_shoes")}} {{$shoesType->name}}">{{ $shoesType->name }}</a>
                                            </h2>
                                            <div class="description-mg-bottom excerpt-post text-center description-content ">
                                                {!! $shoesType->description_home !!}
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endfor
            </div>
        </div>
    </div>
    {{-- End Shoes type--}}

    {{--Product feature--}}
    <div class="ss-portfolio mg-t70 homepage">
        <div class="container">
            <div class="pf-project-relate kt-slide-owl">
                <h2 class="bd-recent model-mg-bottom text-uppercase text-center">{{ @trans("pages.home.our_scraftsmanship")}}</h2>
                <div class="portfolio-grid pf-gap-30" data-layoutMode="fitRows">
                    @foreach($productFeatures as $feature)
                        <div class="col-sm-6 ">
                            <div class="black-bordered item-portfolio">
                                <div class="img-container img-responsive">
                                    <div class="item pf-image img-wrapper">
                                        <a href="{{ $feature->link }}" class="pf-icon"
                                           title="{{ @trans("pages.header.virtus_shoes")}} {{$feature->title}}">
                                            <img width="600px" src="{{ $feature->imageProductFeatureURL() }}"
                                                 alt="{{ $feature->title }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="pf-info text-center ">
                                    <h3 class="title-post pf-title mg-model-image">
                                        <a href="{{ $feature->link }}" title="{{ @trans("pages.header.virtus_shoes")}} {{$feature->title}}">{{ $feature->title }}</a>
                                    </h3>
                                    <div class="pf-cats pf-description-mg-bottom ">
                                        <span>{!! $feature->description !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{--End Product feature--}}

    {{--Video--}}
    <div class="post-format post-video mg-t70">
        <div class="container">
            <div class="pf-project-relate kt-slide-owl">
                <h2 class=" bd-recent model-mg-bottom text-uppercase text-center">{{ @trans("pages.home.our_story")}}</h2>
            </div>
            @foreach($videos as $video)
                <div align="center" class="video-container">
                    <iframe id="video" src="{{ $video->config_value }}?loop=1&playlist=x4XRrGW7lxM&showinfo=0&frameborder=0"></iframe>
                </div>
            @endforeach
        </div>
    </div>
    {{--End Video--}}

    {{--How it works--}}
    <div class="ss-portfolio mg-t70 homepage">
        <div class="container">
            <div class="pf-project-relate kt-slide-owl">
                <h2 class="bd-recent model-mg-bottom text-uppercase text-center">{{ @trans("pages.home.how_it_works")}}</h2>
                <div class="row">

                    @foreach($homeHowItWork as $item)
                        <div class="col-sm-4">
                            <div class="kt-iconbox iconbox-style-3 text-center title-dark">
                                @if($loop->iteration == 1)
                                    <a href="{{ url('how-it-works') }}" title="{{ @trans("pages.header.virtus_shoes")}} {{ @trans("pages.home.title_how_it_works_step")}} 1">
                                        <center><i class="material-icons how-it-works-icon">looks_one</i></center>
                                    </a>
                                @elseif($loop->iteration == 2)
                                    <a href="{{ url('how-it-works') }}" title="{{ @trans("pages.header.virtus_shoes")}} {{ @trans("pages.home.title_how_it_works_step")}} 2">
                                        <center><i class="material-icons how-it-works-icon">looks_two</i></center>
                                    </a>
                                @elseif($loop->iteration == 3)
                                    <a href="{{ url('how-it-works') }}" title="{{ @trans("pages.header.virtus_shoes")}} {{ @trans("pages.home.title_how_it_works_step")}} 3">
                                        <center><i class="material-icons how-it-works-icon">looks_3</i></center>
                                    </a>
                                @endif
                                <div class="info-iconbox">
                                    <h4 class="title-iconbox"><a href="#" title="{{ @trans("pages.header.virtus_shoes")}} {{ @trans("pages.home.title_how_it_works_steps")}}">{{
                                    $item->title }}</a></h4>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{--End How it works--}}
@endsection

@section('extra_scripts')
    <script>
        $(document).ready( function() {
            getQuantityItems($('.cart-number-items'));
        });
    </script>
@endsection