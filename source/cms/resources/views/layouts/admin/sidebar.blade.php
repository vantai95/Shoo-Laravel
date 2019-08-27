@php
    $controller = strtolower(request()->route()->getAction()['controller']);
    $userMenuSelected = strpos($controller, 'users') > -1 || strpos($controller, 'roles') > -1;
    $shoeMenuSelected = strpos($controller, 'shoestyles') > -1 || strpos($controller, 'toeshapes') > -1 || strpos($controller, 'leather') > -1 || strpos($controller, 'shoecategory') > -1 || strpos($controller, 'shoetypes') > -1 || strpos($controller, 'outsoletype') > -1|| strpos($controller, 'flagshipstyles') > -1;
    $productMenuSelected = strpos($controller, 'productpackages');
    $orderMenuSelected = strpos($controller, 'orders') ;
    $homeMenuSelected = strpos($controller, 'slider') > -1 || strpos($controller, 'productfeature') > -1 || strpos($controller, 'productfeaturedetail') > -1 || strpos($controller, 'video') > -1 || strpos($controller, 'homehowitwork') > -1 ;
    $pageMenuSelected = strpos($controller, 'page') > -1 || (strpos($controller, 'howitwork') > -1 && strpos($controller, 'homehowitwork') <= -1) || strpos($controller, 'aboutusdescription') > -1 || (strpos($controller, 'aboutus') > -1 && strpos($controller, 'aboutusdescription') <= -1);
    $settingMenuSelected = strpos($controller, 'email') > -1 || strpos($controller, 'setting') > -1 ;

    $delivery_information = \App\Models\Page::CONSTANTS['DELIVERY_INFORMATION'];
    $privacy_policy = \App\Models\Page::CONSTANTS['PRIVACY_POLICY'];
    $term_and_condition = \App\Models\Page::CONSTANTS['TERM_AND_CONDITION'];

    $page_names = [
        $delivery_information => 'Delivery Information',
        $term_and_condition => 'Terms And Conditions'
    ];
@endphp

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            {{--<li class="sidebar-search hidden-sm hidden-md hidden-lg">--}}
                {{--<div class="input-group custom-search-form">--}}
                    {{--<button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>--}}
                {{--</div>--}}
            {{--</li>--}}
            <li class="user-pro">
                <a href="javascript:void(0)" class="waves-effect">
                    <img src="{{ Auth::user()->imageUrl() }}" alt="user-img" class="img-circle">
                    <span class="hide-menu">{{ Auth::user()->full_name }}</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="waves-effect {{ $userMenuSelected ? 'active' : '' }}">
                    <i class="icon-people fa-fw"></i>
                    <span class="hide-menu">Users <i class="fa arrow"></i></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/admin/users') }}">User Accounts</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/facebook-leads') }}">Facebook Leads</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="waves-effect {{ $shoeMenuSelected ? 'active' : '' }}">
                    <i class="linea-icon linea-basic fa-fw" data-icon="f"></i>
                    <span class="hide-menu">Shoes Management<i class="fa arrow"></i></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/admin/shoe-categories') }}">Shoes Categories</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/shoe-types') }}">Models</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/shoe-styles') }}">Styles</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/toe-shapes') }}">Toe Shapes</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/leather') }}">Leather</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/outsole-types') }}">Outsole Types</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/shoe-sizes') }}">Shoes Sizes</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/flagship-styles') }}">Flagship Styles</a>
                    </li>
                </ul>

            </li>

            <li>
                <a href="javascript:void(0);" class="waves-effect {{ $productMenuSelected ? 'active' : '' }}">
                    <i class="linea-icon linea-ecommerce fa-fw" data-icon=":"></i>
                    <span class="hide-menu">Products<i class="fa arrow"></i></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/admin/product-packages') }}">Product Packages</a>
                    </li>
                </ul>

            </li>

            <li>
                <a href="javascript:void(0);" class="waves-effect {{ $orderMenuSelected ? 'active' : '' }}">
                    <i class="linea-icon linea-ecommerce fa-fw" data-icon="A"></i>
                    <span class="hide-menu">Orders<i class="fa arrow"></i></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/admin/pre-orders') }}">Pre Orders</a>
                        <a href="{{ url('/admin/orders') }}">Orders</a>
                    </li>
                </ul>

            </li>
            <li>
                <a href="javascript:void(0);" class="waves-effect {{ $homeMenuSelected ? 'active' : '' }}">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="hide-menu">Home Page<i class="fa arrow"></i></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/admin/slider') }}">Slider</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/product-feature') }}">Product Feature</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/pf-details') }}">Product Feature Details</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/video') }}">Video</a>
                    </li>
                    <li>
                        <a href="{{url('/admin/home-how-it-works')}}">How It Works</a>
                    </li>
                </ul>

            </li>
            <li>
                <a href="javascript:void(0);" class="waves-effect {{ $pageMenuSelected ? 'active' : '' }}">
                    <i class="fa fa-sitemap" aria-hidden="true"></i>
                    <span class="hide-menu">Pages <i class="fa arrow"></i></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/admin/page-how-it-works') }}">How It Works</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/about-us-image') }}">About Us Image</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/about-us-description') }}">About Us Description</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/pages/indiegogo') }}">Indiegogo</a>
                    </li>
                    @foreach($page_names as $key => $page_name)
                        <li>
                            <a href="{{ url('/admin/pages/'. $key) }}">{{ $page_name }}</a>
                        </li>
                    @endforeach

                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="waves-effect {{ $settingMenuSelected ? 'active' : '' }} ">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                    <span class="hide-menu">Settings<i class="fa arrow"></i></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('/admin/settings/emails') }}">Email Templates</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/settings/index') }}">Settings</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/settings/currency') }}">Currency</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
