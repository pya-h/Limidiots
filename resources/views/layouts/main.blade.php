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
    <link rel="shortcut icon" href="{{ asset('img/logo.svg') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/logo.svg') }}" type="image/x-icon">

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
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

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


                <!-- ========================
         ///// Begin page header /////
         =============================
         * Use class "ph-full" to enable fullscreen size (no effect on smaller screens!).
         * Use class "ph-cap-sm", "ph-cap-lg", "ph-cap-xlg" or "ph-cap-xxlg" to set caption size (no class = default size).
         * Use class "ph-center" to enable content center position.
         * Use class "ph-image-cropped" to crop image (if image is used). It uses fixed image dimensions (no effect with class "ph-bg-image"!).
         * Use class "ph-bg-image" to enable page header background image. Note: "ph-caption-title-ghost" will be disabled if you enable this option!
         * Use class "ph-bg-image-is-light" if needed, it makes the elements dark and more visible if you use a very light background image (effect only with class "ph-bg-image").
         * Use class "ph-image-cover-*" to set image overlay opacity. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5").
         * Use class "ph-content-parallax" to enable content parallax.
         * Use class "ph-stroke" to enable caption title stroke style.
         * Use class "ph-ghost-scroll" to enable the scroll effect to caption title ghost (no effect with class "ph-center"!).
         -->
                <div id="page-header" class="ph-full ph-cap-lg ph-ghost-scroll ph-image-cropped ph-content-parallax">
                    <div class="page-header-inner tt-wrap">

                        <!-- Begin page header image
           ============================= -->
                        <!-- <div class="ph-image">
            <div class="ph-image-inner">
             <img src="assets/img/page-header/ph-1.jpg" alt="Image">
            </div>
           </div> -->
                        <!-- End page header image -->

                        <!-- Begin page header caption
           ===============================
           Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
           -->
                        <div class="ph-caption">
                            <!-- <div class="ph-caption-subtitle">
             <div class="ph-appear">Subtitle</div>
            </div> -->
                            <h1 class="ph-caption-title text-center">
                                <div class="ph-appear"><em class="text-stroke-light"><span
                                            style="font-size: 1.5em;">L</span>imit</span></em> Foundation<br>
                                    <span style="font-size:0.8em"><em class="text-stroke-light">ZeWea</em>Studios<span>
                                            <br>
                                            <span style="font-size:0.25em"><span class="hide-from-sm">→</span>
                                                We are currently auctioning the Z collection
                                            </span>
                                </div>
                            </h1>
                            <div class="ph-caption-title-ghost">
                                @if (request()->is('/'))
                                    <div class="ph-appear">LIMIT<span class="hide-from-sm">→</span>ZEWEA</div>
                                @else
                                    <div class="ph-appear">@yield('page-title')</div>
                                @endif
                            </div>
                        </div>
                        <!-- End page header caption -->

                    </div> <!-- /.page-header-inner -->

                    <!-- Begin scroll down (you can change "data-offset" to set scroll top offset)
          ======================= -->
                    <div class="tt-scroll-down">
                        @if (!$contact_result)
                            <a href="#page-content" class="tt-sd-inner ph-appear" data-offset="0">
                                <div class="tt-sd-arrow">
                                    <div class="tt-sd-arrow-inner"></div>
                                </div>
                                <div class="tt-sd-text">Scroll</div>
                            </a>
                        @else
                            <a href="#contact-us-form" class="tt-sd-inner ph-appear" data-offset="0">
                                <div class="tt-sd-arrow">
                                    <div class="tt-sd-arrow-inner"></div>
                                </div>
                                <div class="tt-sd-text"
                                    style="color: {{ $contact_result['ok'] ? 'green' : 'red' }} !important; font-size: 175%;">
                                    Scroll Into Contact Result</div>
                            </a>
                        @endif
                    </div>
                    <!-- End scroll down -->

                </div>
                <!-- End page header -->


                <!-- *************************************
         *********** Begin page content ***********
         ************************************** -->
                <div id="page-content">
                    @yield('page-content')


                    @include('segments/contact-us')
                </div>
                <!-- End page content -->


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
