<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <!-- Author -->
        <meta name="author" content="Agence Uverax">
        <!-- description -->
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- keywords -->
        <meta name="keywords" content="africamoov, tourisme, achat, boutique, afrique, site touristique">
        <!-- Page Title -->
        <title>App Name - @yield('title')</title>
        <!-- Bundle -->
        <link href="{{url('vendor/css/bundle.min.css')}}" rel="stylesheet">
        <link href="{{url('vendor/css/revolution-settings.min.css')}}" rel="stylesheet">
        <!-- Plugin Css -->
        <link href="{{url('vendor/css/jquery.fancybox.min.css')}}" rel="stylesheet">
        <!-- Style Sheet -->
        <link href="{{url('innovative/css/style.css')}}" rel="stylesheet">
        <link href="{{url('innovative/css/common.css')}}" rel="stylesheet">
        <link href="{{url('innovative/css/theme.cs')}}s" rel="stylesheet">

        <!-- My Favicons -->
        <link rel="shortcut icon" href="innovative/img/mico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144"
              href="innovative/img/mico/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114"
              href="innovative/img/mico/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="innovative/img/mico/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="innovative/img/mico/apple-touch-icon-57x57.png">
        <!-- #My Favicons -->

        <script type="text/javascript" src="{{url('innovative/js/modernizr.custom.86080.js')}}"></script>
    </head>
<body>

@yield('content')

<!-- JavaScript -->
<script src="{{url('vendor/js/bundle.min.js')}}"></script>
<!-- Plugin Js -->
<script src="{{url('vendor/js/jquery.appear.j')}}s"></script>
<script src="{{url('vendor/js/jquery.fancybox.min.js')}}"></script>
<script src="{{url('vendor/js/parallaxie.min.js')}}"></script>
<script src="{{url('vendor/js/wow.min.j')}}s"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{url('vendor/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{url('vendor/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="{{url('vendor/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{url('vendor/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{url('vendor/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{url('vendor/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{url('vendor/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{url('vendor/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{url('vendor/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{url('vendor/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{url('vendor/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- custom script -->
<script src="{{url('innovative/js/script.js')}}"></script>
<script src="{{url('vendor/js/log/bootstrap.min.js')}}"></script>
</body>
</html>
