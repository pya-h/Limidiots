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
            <header id="tt-header" class="tt-header-fixed">
                <div class="tt-header-inner">
                    <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes can be found in the file "helper.css". -->

                    <div class="tt-header-col">

                        <!-- Begin logo
                        ================ -->
                        <div class="tt-logo">
                            <a href="/">
                                <!-- Hint: You may need to change the img height to match your logo type. You can do this from the "theme.css" file (find: ".tt-logo img"). -->
                                <img src="{{ asset('img/logo.png') }}" class="tt-logo-light magnetic-item"
                                    alt="Logo">
                                <!-- logo light -->
                                {{-- <img src="{{ asset('img/logo.png') }}" class="logo magnetic-item"
                                    alt="Logo"> --}}
                                <!-- logo dark -->
                            </a>
                        </div>
                        <!-- End logo -->

                    </div> <!-- /.tt-header-col -->

                    <div class="tt-header-col">

                        <!-- Begin overlay menu toggle button -->
                        <div id="tt-ol-menu-toggle-btn-wrap">
                            <div class="tt-ol-menu-toggle-btn-text-wrap hide-cursor">
                                <div class="tt-ol-menu-toggle-btn-text">
                                    <span class="text-menu" data-hover="Open">Menu</span>
                                    <span class="text-close">Close</span>
                                </div> <!-- /.tt-ol-menu-toggle-btn-text -->
                            </div> <!-- /.tt-ol-menu-toggle-btn-text-wrap -->
                            <div class="tt-ol-menu-toggle-btn-holder">
                                <a href="#" class="tt-ol-menu-toggle-btn magnetic-item"><span></span></a>
                            </div> <!-- /.tt-ol-menu-toggle-btn-holder -->
                        </div>
                        <!-- End overlay menu toggle button -->

                        <!-- Begin overlay menu
       ========================
       * Use class "tt-ol-menu-count" to enable menu counter.
       -->
                        <nav class="tt-overlay-menu tt-ol-menu-count">
                            <div class="tt-ol-menu-ghost">Explore</div>
                            <div class="tt-ol-menu-holder">
                                <div class="tt-ol-menu-inner tt-wrap">
                                    <div class="tt-ol-menu-content">

                                        <!-- Begin menu list -->
                                        <ul class="tt-ol-menu-list">

                                            <li class="{{ request()->is('/') ? 'active' : '' }}"><a
                                                    href="/">Home</a></li>
                                            <!-- Begin submenu (submenu master)
            ==================================== -->
                                            <li
                                                class="tt-ol-submenu-wrap {{ request()->is('about-us') ? 'active' : '' }}">
                                                <div class="tt-ol-submenu-trigger">
                                                    <a href="#">About</a>
                                                    <div class="tt-ol-submenu-caret-wrap">
                                                        <div class="tt-ol-submenu-caret magnetic-item"></div>
                                                    </div> <!-- /.tt-ol-submenu-caret-wrap -->
                                                </div> <!-- /.tt-ol-submenu-trigger -->
                                                <div class="tt-ol-submenu">
                                                    <ul class="tt-ol-submenu-list">

                                                        <li><a href="/about-us">About Us</a></li>
                                                        <li><a href="/pydea.h">About Developer</a></li>

                                                    </ul> <!-- /.tt-ol-submenu-list -->
                                                </div> <!-- /.tt-ol-submenu -->
                                            </li>
                                            <!-- End submenu (sub-master) -->

                                            <!-- Begin submenu (submenu master)
            ==================================== -->
                                            <!-- Begin submenu (submenu master)
            ==================================== -->
                                            <li class="tt-ol-submenu-wrap">
                                                <div class="tt-ol-submenu-trigger">
                                                    <a href="#">Portfolio</a>
                                                    <div class="tt-ol-submenu-caret-wrap">
                                                        <div class="tt-ol-submenu-caret magnetic-item"></div>
                                                    </div> <!-- /.tt-ol-submenu-caret-wrap -->
                                                </div> <!-- /.tt-ol-submenu-trigger -->
                                                <div class="tt-ol-submenu">
                                                    <ul class="tt-ol-submenu-list">

                                                        <!-- Begin submenu
=================== -->
                                                        <li class="tt-ol-submenu-wrap">
                                                            <div class="tt-ol-submenu-trigger">
                                                                <a href="#" class="tt-ol-submenu-link">Portfolio
                                                                    List</a>
                                                                <div class="tt-ol-submenu-caret-wrap">
                                                                    <div class="tt-ol-submenu-caret magnetic-item">
                                                                    </div>
                                                                </div> <!-- /.tt-ol-submenu-caret-wrap -->
                                                            </div> <!-- /.tt-ol-submenu-trigger -->
                                                            <div class="tt-ol-submenu">
                                                                <ul class="tt-ol-submenu-list">

                                                                    <li><a href="portfolio-list.html">Portfolio List
                                                                            v.1</a>
                                                                    </li>
                                                                    <li><a href="portfolio-list-alter.html">Portfolio
                                                                            List
                                                                            v.2</a></li>

                                                                </ul> <!-- /.tt-ol-submenu-list -->
                                                            </div> <!-- /.tt-ol-submenu -->
                                                        </li>
                                                        <!-- End submenu -->

                                                        <!-- Begin submenu
=================== -->
                                                        <li class="tt-ol-submenu-wrap">
                                                            <div class="tt-ol-submenu-trigger">
                                                                <a href="#" class="tt-ol-submenu-link">Portfolio
                                                                    Grid</a>
                                                                <div class="tt-ol-submenu-caret-wrap">
                                                                    <div class="tt-ol-submenu-caret magnetic-item">
                                                                    </div>
                                                                </div> <!-- /.tt-ol-submenu-caret-wrap -->
                                                            </div> <!-- /.tt-ol-submenu-trigger -->
                                                            <div class="tt-ol-submenu">
                                                                <ul class="tt-ol-submenu-list">

                                                                    <li><a href="portfolio-grid-creative.html">Grid
                                                                            Creative</a>
                                                                    </li>
                                                                    <li><a href="portfolio-grid-modern.html">Grid
                                                                            Modern</a>
                                                                    </li>
                                                                    <li><a href="portfolio-grid-portrait-mode.html">Grid
                                                                            Portrait Mode</a></li>
                                                                    <li><a href="portfolio-grid-classic.html">Grid
                                                                            Classic</a>
                                                                    </li>

                                                                </ul> <!-- /.tt-ol-submenu-list -->
                                                            </div> <!-- /.tt-ol-submenu -->
                                                        </li>
                                                        <!-- End submenu -->

                                                        <!-- Begin submenu
=================== -->
                                                        <li class="tt-ol-submenu-wrap">
                                                            <div class="tt-ol-submenu-trigger">
                                                                <a href="#" class="tt-ol-submenu-link">Portfolio
                                                                    Interactive</a>
                                                                <div class="tt-ol-submenu-caret-wrap">
                                                                    <div class="tt-ol-submenu-caret magnetic-item">
                                                                    </div>
                                                                </div> <!-- /.tt-ol-submenu-caret-wrap -->
                                                            </div> <!-- /.tt-ol-submenu-trigger -->
                                                            <div class="tt-ol-submenu">
                                                                <ul class="tt-ol-submenu-list">

                                                                    <li><a href="portfolio-interactive.html">Interactive
                                                                            Classic</a></li>
                                                                    <li><a href="portfolio-interactive-center.html">Interactive
                                                                            Senter</a></li>
                                                                    <li><a href="portfolio-interactive-inline.html">Interactive
                                                                            Inline</a></li>

                                                                </ul> <!-- /.tt-ol-submenu-list -->
                                                            </div> <!-- /.tt-ol-submenu -->
                                                        </li>
                                                        <!-- End submenu -->

                                                        <!-- Begin submenu
=================== -->
                                                        <li class="tt-ol-submenu-wrap">
                                                            <div class="tt-ol-submenu-trigger">
                                                                <a href="#" class="tt-ol-submenu-link">Slider
                                                                    &amp;
                                                                    Carousel</a>
                                                                <div class="tt-ol-submenu-caret-wrap">
                                                                    <div class="tt-ol-submenu-caret magnetic-item">
                                                                    </div>
                                                                </div> <!-- /.tt-ol-submenu-caret-wrap -->
                                                            </div> <!-- /.tt-ol-submenu-trigger -->
                                                            <div class="tt-ol-submenu">
                                                                <ul class="tt-ol-submenu-list">

                                                                    <li><a href="portfolio-fullscreen-slider.html">Fullscreen
                                                                            Slider</a></li>
                                                                    <li><a href="portfolio-fullscreen-carousel.html">Fullscreen
                                                                            Carousel</a></li>

                                                                </ul> <!-- /.tt-ol-submenu-list -->
                                                            </div> <!-- /.tt-ol-submenu -->
                                                        </li>
                                                        <!-- End submenu -->

                                                        <li><a href="portfolio-one-column.html">One Column</a></li>
                                                        <li><a href="elements-classic-menu.html">Classic Menu</a></li>

                                                    </ul> <!-- /.tt-ol-submenu-list -->
                                                </div> <!-- /.tt-ol-submenu -->
                                            </li>
                                            <!-- End submenu (sub-master) -->
                                            <li class="{{ request()->is('roadmap') ? 'active' : '' }}"><a
                                                    href="/roadmap">Roadmap</a></li>

                                        </ul>
                                        <!-- End menu list -->

                                        <!-- Begin overlay menu social links
           ===================================== -->
                                        <ul class="tt-ol-menu-social">
                                            <li>
                                                <h6 class="tt-ol-menu-social-heading">Social Links:</h6>
                                            </li>
                                            <li><a href="https://x.com/ZeweaStudio" target="_blank"
                                                    rel="noopener">Twitter</a></li>
                                            <li><a href="https://discord.com/invite/9398BdbP" target="_blank"
                                                    rel="noopener">Discord</a>
                                            </li>
                                            <li><a href="https://t.me/Zeweastudio" target="_blank"
                                                    rel="noopener">Telegram Zewea</a></li>
                                            <li><a href="https://t.me/LimitFoundation" target="_blank"
                                                    rel="noopener">Telegram Limit</a></li>
                                            <li><a href="https://www.reddit.com/u/ZeweaStudio" target="_blank"
                                                    rel="noopener">Reddit</a></li>
                                        </ul>
                                        <!-- End overlay menu social links -->

                                    </div> <!-- /.tt-ol-menu-content -->
                                </div> <!-- /.tt-ol-menu-inner -->
                            </div> <!-- /.tt-ol-menu-holder -->
                        </nav>
                        <!-- End overlay menu -->

                    </div> <!-- /.header-col -->
                </div> <!-- /.header-inner -->
            </header>
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
                                            style="font-size: 1.7em;">L</span>iMi<span
                                            style="font-size: 2em;">t</span></em> Foundation<br>
                                    <span style="font-size:0.8em"><em class="text-stroke-light">ZeWea</em>Studio<span>
                                            <br>
                                            <span style="font-size:0.25em"><span class="hide-from-sm">→</span>
                                                We are currently auctioning the Z collection
                                            </span>
                                </div>
                            </h1>
                            <div class="ph-caption-title-ghost">
                                <div class="ph-appear">LIMIT<span class="hide-from-sm">→</span>ZEWEA</div>
                            </div>
                        </div>
                        <!-- End page header caption -->

                    </div> <!-- /.page-header-inner -->

                    <!-- Begin scroll down (you can change "data-offset" to set scroll top offset)
          ======================= -->
                    <div class="tt-scroll-down">
                        <a href="#page-content" class="tt-sd-inner ph-appear" data-offset="0">
                            <div class="tt-sd-arrow">
                                <div class="tt-sd-arrow-inner"></div>
                            </div>
                            <div class="tt-sd-text">Scroll</div>
                        </a>
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


                <!-- ======================
     ///// Begin tt-footer /////
     =========================== -->
                <footer id="tt-footer">
                    <div class="tt-footer-inner">

                        <!-- Begin footer column
       ========================= -->
                        <div class="footer-col tt-align-center-left">
                            <div class="footer-col-inner">

                                <a href="#" class="tt-btn tt-btn-link scroll-to-top">
                                    <span class="tt-btn-icon"><i class="fas fa-arrow-up"></i></span>
                                    <div data-hover="Back to Top">Back to Top</div>
                                </a>

                            </div> <!-- /.footer-col-inner -->
                        </div>


                        <!-- Begin footer column ========================= -->
                        <div class="footer-col tt-align-center-right">
                            <div class="footer-col-inner">

                                <div class="footer-social">
                                    <div class="footer-social-text"><span>Follow</span><i
                                            class="fas fa-share-alt"></i></div>
                                    <div class="social-buttons">
                                        <ul>
                                            <li><a href="https://x.com/ZeweaStudio" class="magnetic-item"
                                                    target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li><a href="https://t.me/Zeweastudio" class="magnetic-item"
                                                    target="_blank" rel="noopener"><i
                                                        class="fab fa-telegram"></i></a></li>
                                            <li><a href="https://t.me/LimitFoundation" class="magnetic-item"
                                                    target="_blank" rel="noopener"><i
                                                        class="fab fa-telegram"></i></a></li>
                                            <li><a href="https://discord.com/invite/9398BdbP" class="magnetic-item"
                                                    target="_blank" rel="noopener"><i class="fab fa-discord"></i></a>
                                            </li>
                                            <li><a href="https://www.reddit.com/u/ZeweaStudio" class="magnetic-item"
                                                    target="_blank" rel="noopener"><i class="fab fa-reddit"></i></a>
                                            </li>
                                        </ul>
                                    </div> <!-- /.social-buttons -->
                                </div> <!-- /.footer-social -->

                            </div> <!-- /.footer-col-inner -->
                        </div>
                        <!-- Begin footer column -->

                    </div> <!-- /.tt-section-inner -->
                </footer>
                <!-- End tt-footer -->


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
