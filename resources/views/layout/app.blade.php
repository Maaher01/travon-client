<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="keywords" content="@yield('keywords')">
        <meta name="author" content="@yield('author')">
        <meta property="og:title" content="@yield('title')" />
        <meta property="og:url" content="@yield('url')" />
        <meta property="og:image" content="@yield('image')" />
        <meta property="og:description" content="@yield('description')" />
        <meta property="og:site_name" content="@yield('site_name')" />
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Travon - Tour and Hotel Booking</title>

        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="{!! asset('logo-white.svg') !!}">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet"/>

        <!--============================== All CSS File ============================== -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}" />
        <!-- Fontawesome Icon -->
        <link rel="stylesheet" href="{{ asset('/assets/css/fontawesome.min.css') }}" />
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.min.css') }}" />
        <!-- Slick Slider -->
        <link rel="stylesheet" href="{{ asset('/assets/css/slick.min.css') }}" />
        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}" />
        <!--Global CSS File-->
        <link rel="stylesheet" href="{{ asset('css/global.css') }}">
        @yield('style')

        <style>
             .main-menu ul.sub-menu li a:before{
                content:"";
             }   

             .breadcumb-wrapper{
                padding:50px 0px;
             }   
        </style>
    </head>
    <body>
        <!--Header Start-->
        @include('include.header')
        <!--Header End-->

		<!-- Main content Start -->
        @yield('content') 
        
        <!-- Footer Start -->
        @include('include.footer')
        <!-- Footer End -->
      
         <!--============================== All Js File ============================== -->
        <!-- Jquery -->
        <script src="{{ asset('/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <!-- Slick Slider -->
        <script src="{{ asset('/assets/js/slick.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
        <!-- Magnific Popup -->
        <script src="{{ asset('/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Counter Up -->
        <script src="{{ asset('/assets/js/jquery.counterup.min.js') }}"></script>
        <!-- Nice Select -->
        <script src="{{ asset('/assets/js/nice-select.min.js') }}"></script>
        <!-- Isotope Filter -->
        <script src="{{ asset('/assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('/assets/js/isotope.pkgd.min.js') }}"></script>
        <!-- Main Js File -->
        <script src="{{ asset('/assets/js/main.js') }}"></script>

        @yield('script')
    </body>
</html>