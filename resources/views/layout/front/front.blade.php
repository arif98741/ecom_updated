<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="e-commerce site well design with responsive view."/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('asset/front/image/favicon.png')}}" rel="icon" type="image/png">
    <link href="{{ asset('asset/front/css/bootstrap.min.css')}}" rel="stylesheet" media="screen"/>
    <link href="{{ asset('asset/front/javascript/font-awesome/css/font-awesome.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"/>
    <link href="{{ asset('asset/front/css/stylesheet.css')}}" rel="stylesheet">
    <link href="{{ asset('asset/front/css/responsive.css')}}" rel="stylesheet">
    <link href="{{ asset('asset/front/javascript/owl-carousel/owl.carousel.css')}}" type="text/css" rel="stylesheet"
          media="screen"/>
    <link href="{{ asset('asset/front/javascript/owl-carousel/owl.transitions.css')}}" type="text/css" rel="stylesheet"
          media="screen"/>
    <script type="text/javascript" src="{{ asset('asset/front/javascript/jquery-2.1.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/front/javascript/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/front/javascript/template_js/jstree.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/front/javascript/template_js/template.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/front/javascript/common.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/front/javascript/global.js')}}"></script>
    <script type="text/javascript" src="{{ asset('asset/front/javascript/owl-carousel/owl.carousel.min.js')}}"></script>
</head>
<body class="index">
{{--<div class="preloader loader" style="display: block;"><img src="{{ asset('asset/front/image/loader.gif')}}" alt="#"/>--}}
{{--</div>--}}
@include('layout.front.lib.top-header')
@include('layout.front.lib.nav')

@yield('content')

{{--Newsletter signup section brand--}}
@include('layout.front.lib.newsletter-signup')
{{--Favourite brand--}}
@include('layout.front.lib._extra.home.favourite-brand')
@include('layout.front.lib.footer')
<script src="{{ asset('asset/front/javascript/jquery.parallax.js')}}"></script>
<script>
    jQuery(document).ready(function ($) {
        $('.parallax').parallax();
    });
</script>
</body>
</html>
