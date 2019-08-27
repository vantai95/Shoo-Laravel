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
    <meta name="description" content="Born out of one of Canadian best-respected shoemakers, ShoeX team believe that centuries of ShoeX shoe-making heritage could get a touch with the contemporary 3D technology, and that how we keep both the tradition and innovation alive in every pair of shoes we make.">
	<meta name="keywords" content="custom fit, dress shoes, men shoes, Oxford, Derby, Boot, Buckle">
    <title>{{ config('app.name', 'ShoeX | Error') }}</title>

    <link href="{{ asset('theme/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/bootstrap-extension.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user_styles.css') }}" rel="stylesheet">
    <!-- Google Tag Manager -->
    @foreach ($googleTagKeys as $key)
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','{{$key}}');
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
        <iframe src="https://www.googletagmanager.com/ns.html?id={{$key}}" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
@endforeach
<!-- End Google Tag Manager (noscript) -->
<section id="wrapper" class="error-page">
    <div class="error-box">
        <div class="error-body text-center">
            @yield('content')

            <div class="small text-danger" style="margin: 0 20px 30px; max-height:220px; overflow: scroll;">
                {{ isset($message) ? $message : '' }}
            </div>

            <a href="/" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Về Trang Chủ</a>
        </div>
        <footer class="footer text-center">
            <?php echo date("Y"); ?> &copy; Viettel Telecom. All rights reserved.
        </footer>
    </div>
</section>

<!-- jQuery -->
<script src="{{ asset('theme/js/jquery.min.js') }}"></script>
<script src="{{ asset('theme/js/tether.min.js') }}"></script>
<script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme/js/bootstrap-extension.min.js') }}"></script>
</body>
</html>

