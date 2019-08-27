@php
    $googleTagKeys = ['GTM-5TD465X'];
    $googleAnalyticsKeys = ['UA-119149804-1']
@endphp
        <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ url('/favicon.ico') }}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ShoeX') }}</title>
    <meta name="description"
          content="Born out of one of Canadian best-respected shoemakers, ShoeX team believe that centuries of Shoex shoe-making heritage could get a touch with the contemporary 3D technology, and that how we keep both the tradition and innovation alive in every pair of shoes we make.">
    <meta name="keywords" content="custom fit, dress shoes, men shoes, Oxford, Derby, Boot, Buckle">
    <!-- Theme Styles -->
    <link href="{{ asset('theme/user/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/user/css/bootstrap-extension.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/user/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/user/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/user/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/user/css/Pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/user/css/arrowlightregular.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/user/css/supergroteska_medregular.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/user/css/supergroteska_rgregular.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/user/css/chosen.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/user/css/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/user/css/jquery.toast.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/user/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/user/css/bootstrap-datetimepicker.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/user_styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
    <!-- Google Tag Manager -->
    @foreach ($googleTagKeys as $key)
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', '{{$key}}');
        </script>
@endforeach
<!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    @foreach ($googleAnalyticsKeys as $key)
    <script async src="https://www.googletagmanager.com/gtag/js?id={{$key}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', '{{$key}}');
    </script>
     @endforeach

</head>
<body>
<!-- Google Tag Manager (noscript) -->
@foreach ($googleTagKeys as $key)
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id={{$key}}" height="0" width="0"
                style="display:none;visibility:hidden"></iframe>
    </noscript>
@endforeach
<!-- End Google Tag Manager (noscript) -->


@include('layouts.user.header')
@yield('content')
@include('layouts.user.footer')
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>


<!-- Theme Scripts -->
<script src="{{ asset('theme/user/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('theme/user/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('theme/user/js//owl.carousel.min.js') }}"></script>
<script src="{{ asset('theme/user/js/jquery.debouncedresize.js') }}"></script>
<script src="{{ asset('theme/user/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('theme/user/js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('theme/user/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('theme/user/js/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('theme/user/js/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('theme/user/js/jquery.jplayer.min.js') }}"></script>
<script src="{{ asset('theme/user/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('theme/user/js/Modernizr.js') }}"></script>
<script src="{{ asset('theme/user/js/hm-masonry.js') }}"></script>
<script src="{{ asset('theme/user/js/bootstrap-extension.min.js') }}"></script>
<script src="{{ asset('theme/user/js/jquery.toast.js') }}"></script>
<script src="{{ asset('theme/user/js/moment.min.js') }}"></script>
<script src="{{ asset('theme/user/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('theme/user/js/bootstrap-datetimepicker.js') }}"></script>
<script src="{{ asset('theme/user/js/jquery-qrcode-0.14.0.min.js') }}"></script>

<script src="{{ asset('theme/user/js/user_custom.js') }}"></script>
<!-- Scripts -->
<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/user.js') }}"></script>

<script type="text/javascript">
    @if (session('flash_message'))
    $(document).ready(function () {
        $.toast({
            heading: null,
            text: '{{ session('flash_message') }}',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 4000,
            stack: 6
        })
    });
    @endif

    @if (session('flash_error'))
    $(document).ready(function () {
        $.toast({
            heading: null,
            text: '{{ session('flash_error') }}',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'error',
            hideAfter: 4000,
            stack: 6
        })
    });
    @endif

    $(document).ready( function() {
        getQuantityItems($('.cart-number-items'));
    });
</script>

@yield('extra_scripts')
</body>
</html>
