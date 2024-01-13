<!DOCTYPE html>

<!--
 Template:   Nui - Creative Portfolio Showcase HTML Website Template
 Author:     Themetorium
 URL:        https://github.com/pya-h/
-->

<html lang="en">

<head>

    <!-- Title -->
    <title>Limit - @yield('page-title')</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Limit - Zewea">
    <meta name="author" content="github.com/pya-h">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon (http://www.favicon-generator.org/) -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Analytics -->
    <!-- Paste your Google Analytics code here (go to http://www.google.com/analytics/ for more information). -->

    <!-- Google fonts (https://www.google.com/fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"> <!-- Body font -->
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Secondary/Alter font -->

    <!-- Libs and Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/normalize/normalize.min.css') }}">
    <!-- Normalize CSS (https://necolas.github.io/normalize.css/) -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- Font Icons CSS (https://fontawesome.com) Free version! -->
    <link rel="stylesheet" href="{{ asset('vendor/swiper/css/swiper-bundle.min.css') }}">
    <!-- Swiper CSS (https://swiperjs.com/) -->
    <link rel="stylesheet" href="{{ asset('vendor/lightgallery/css/lightgallery.min.css') }}">
    <!-- lightGallery CSS (http://sachinchoolur.github.io/lightGallery) -->

    <!-- Template master CSS -->
    <link rel="stylesheet" href="{{ asset('css/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">

</head>


<!-- ===========
 ///// Body /////
 ================
 * Use class "tt-boxed" to enable page boxed layout globally (affects all elements containing class "tt-wrap").
 * Use class "tt-smooth-scroll" to enable page smooth scrolling.
 * Use class "tt-transition" to enable page transitions.
 * Use class "tt-magic-cursor" to enable magic cursor.
 * Note: there may be classes that are specific to this page only!
 -->

<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor">


    <!-- *************************************
  *********** Begin body inner *************
  ************************************** -->
    <main id="body-inner">

        <!-- Begin page transition (do not remove!!!)
   =========================== -->
        <div id="page-transition">
            <div class="ptr-overlay"></div>
            <div class="ptr-preloader">
                <div class="ptr-prel-content">
                    <!-- Hint: You may need to change the img height and opacity to match your logo type. You can do this from the "theme.css" file (find: ".ptr-prel-image"). -->
                    <img src="{{ asset('img/logo.png') }}" {{-- width="500px" height="500px" --}} class="ptr-prel-image tt-logo-light"
                        alt="Logo">
                </div> <!-- /.ptr-prel-content -->
            </div> <!-- /.ptr-preloader -->
        </div>
        <!-- End page transition -->

        <!-- Begin magic cursor
   ======================== -->
        <div id="magic-cursor">
            <div id="ball"></div>
        </div>
        <!-- End magic cursor -->


        <!-- *****************************************
   *********** Begin scroll container ***********
   ****************************************** -->
        <div id="scroll-container">

            <!-- ===================
    ///// Begin header /////
    ========================
    * Use class "tt-header-fixed" to set header to fixed position.
    -->
            @include('common/menu')
            <!-- End header -->
            <!-- *************************************
        *********** Begin content wrap ***********
        ************************************** -->
            <div id="content-wrap">


                @yield('page-content')


                {{-- @include('segments/contact-us') --}}

                @include('common/footer')
            </div>
            <!-- End content wrap -->
        </div>
        <!-- End scroll container -->
    </main>
    <!-- End body inner -->

    <!-- ====================
  ///// Scripts below /////
  ===================== -->

    <!-- Core JS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script> <!-- jquery JS (https://jquery.com) -->

    <!-- Libs and Plugins JS -->
    <script src="{{ asset('vendor/gsap/gsap.min.js') }}"></script> <!-- GSAP JS (https://greensock.com/gsap/) -->
    <script src="{{ asset('vendor/gsap/ScrollToPlugin.min.js') }}"></script> <!-- GSAP ScrollToPlugin JS (https://greensock.com/scrolltoplugin/) -->
    <script src="{{ asset('vendor/gsap/ScrollTrigger.min.js') }}"></script> <!-- GSAP ScrollTrigger JS (https://greensock.com/scrolltrigger/) -->

    <script src="{{ asset('vendor/smooth-scrollbar.js') }}"></script> <!-- Smooth Scrollbar JS (https://github.com/idiotWu/smooth-scrollbar/) -->
    <script src="{{ asset('vendor/swiper/js/swiper-bundle.min.js') }}"></script> <!-- Swiper JS (https://swiperjs.com/) -->
    <script src="{{ asset('vendor/isotope/imagesloaded.pkgd.min.js') }}"></script> <!-- imagesloaded JS (more info: https://imagesloaded.desandro.com/) -->
    <script src="{{ asset('vendor/isotope/isotope.pkgd.min.js') }}"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
    <script src="{{ asset('vendor/isotope/packery-mode.pkgd.min.js') }}"></script> <!-- Isotope Packery Mode JS (https://isotope.metafizzy.co/layout-modes/packery.html) -->
    <script src="{{ asset('vendor/lightgallery/js/lightgallery-all.min.js') }}"></script> <!-- lightGallery Plugins JS (http://sachinchoolur.github.io/lightGallery) -->
    <script src="{{ asset('vendor/jquery.mousewheel.min.js') }}"></script>
    <!-- A jQuery plugin that adds cross browser mouse wheel support (https://github.com/jquery/jquery-mousewheel) -->

    <!-- Template master JS -->
    <script src="{{ asset('js/theme.js') }}"></script>



</body>

</html>
