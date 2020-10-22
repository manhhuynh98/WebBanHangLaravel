<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <base href="{{ asset('') }}">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets1/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets1/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets1/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets1/css/flaticon.css">
            <link rel="stylesheet" href="assets1/css/slicknav.css">
            <link rel="stylesheet" href="assets1/css/animate.min.css">
            <link rel="stylesheet" href="assets1/css/magnific-popup.css">
            <link rel="stylesheet" href="assets1/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets1/css/themify-icons.css">
            <link rel="stylesheet" href="assets1/css/slick.css">
            <link rel="stylesheet" href="assets1/css/nice-select.css">
            <link rel="stylesheet" href="assets1/css/style.css">
            <link rel="stylesheet" href="assets1/css/shoppingcart.css">

            <style>
                a{
                    color: black;
                }
                a:hover{
                    color: blueviolet;
                }
            </style>
            @yield('css')
   </head>

   <body>

    {{-- <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets1/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start --> --}}

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

	<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets1/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets1/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets1/js/popper.min.js"></script>
        <script src="./assets1/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets1/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets1/js/owl.carousel.min.js"></script>
        <script src="./assets1/js/slick.min.js"></script>

		<!-- One Page, Animated-HeadLin -->
        <script src="./assets1/js/wow.min.js"></script>
		<script src="./assets1/js/animated.headline.js"></script>
        <script src="./assets1/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets1/js/jquery.scrollUp.min.js"></script>
        <script src="./assets1/js/jquery.nice-select.min.js"></script>
		<script src="./assets1/js/jquery.sticky.js"></script>

        <!-- contact js -->
        <script src="./assets1/js/contact.js"></script>
        <script src="./assets1/js/jquery.form.js"></script>
        <script src="./assets1/js/jquery.validate.min.js"></script>
        <script src="./assets1/js/mail-script.js"></script>
        <script src="./assets1/js/jquery.ajaxchimp.min.js"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="./assets1/js/plugins.js"></script>
        <script src="./assets1/js/main.js"></script>

        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
        <!-- Default theme -->

        @yield('script')
    </body>


</html>
