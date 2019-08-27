<header class="header header-style3">
    <div class="section-main-header">
        <div class="kt-mainmenu">
            <div class="container">
                <div class="mainmenu-content">
                    <div class="left-mainmenu">
                        <div class="logo">
                            <a class="" title="{{ @trans("pages.header.virtus_logo")}}" href="{{ url('/') }}">
                                <img alt="Logo" src="{{asset('images/shoex cutom-fit shoes black.png')}}">
                            </a>
                        </div>
                    </div>
                    <div class="right-mainmenu">
                        <span class="togole-menu-mobile"><i class="fa fa-bars"></i></span>
                        <nav class="navigation">
                            <ul class="main-menu">
                                <li class="menu-item menu-parent menu-header menu-header-default">
                                    <a class="p-0" href="{{ url('shoes-style') }}" title="">{{ @trans("pages.header.shoes")}} <span class="caret caret-header"></span></a>
                                    <ul class="sub-menu">
                                        @php  
                                            $lang = Session::get('lang');
                                            $shoesTypes=\App\Models\ShoeTypes::orderBy('index')->select('shoe_types.*',"name_$lang as name")->get();
                                        @endphp
                                        @foreach($shoesTypes as $shoesType)
                                            <li class="menu-item">
                                                <a href="{{url('shoes-style/'.\Illuminate\Support\Str::lower($shoesType->slug) )}}"
                                                   title="{{ @trans("pages.header.virtus_shoes")}} {{$shoesType->name}}">{{ $shoesType ->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="menu-item menu-parent menu-header">
                                   <a class="p-0" href="{{ url('how-it-works') }}" title="">{{ @trans("pages.header.how_it_works")}}</a>
                                </li>
                                <li class="menu-item menu-parent menu-header">
                                    <a class="p-0" href="{{url('about-us')}}" title="">{{ @trans("pages.header.about_us")}}</a>
                                </li>                               
                                @if($campaignMenuStatus == 1)
                                <li class="menu-item menu-parent menu-header">                                   
                                    <a class="p-0 campaign-menu" onclick="mmConversionTag(1133926, this, 'blank','@php echo $indiegogoUrl; @endphp'); return false;" title="">
                                       {{$indiegogoName }}
                                    </a>
                                </li>
                                @endif
                                <li class="menu-item menu-parent menu-header menu-header-default ">
                                         @if(!\Illuminate\Support\Facades\Auth::check())
                                            <a class="p-0" href="{{url('/login')}}" data-toggle="tooltip"
                                               datma-placement="top"
                                               title="">                                               
                                                {{ @trans("pages.header.login")}}                                               
                                            </a>
                                        @endif
                                        @if(\Illuminate\Support\Facades\Auth::check()) 
                                            <a class="p-0" href="#">{{ \Illuminate\Support\Facades\Auth::user()->full_name}} 
                                                <span class="caret caret-header"></span>
                                            </a> 
                                        @endif
                                       
                                            @if(\Illuminate\Support\Facades\Auth::check())
                                                <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="{{url('/user/my-profile')}}">{{ @trans("pages.header.profile")}}</a>
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
                                                            <a href="{{url('/admin')}}">{{ @trans("pages.header.management")}}</a>
                                                        </li>
                                                    @endif
                                                    <li class="menu-item">
                                                        <a href="javascript:void(0)" onclick="logout(event)">{{ @trans("pages.header.logout")}}</a>
                                                    </li>
                                                </ul>
                                            @endif
                                      
                                </li>
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
