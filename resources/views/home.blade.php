@extends('layouts/main')

@section('page-title', 'Home')

@section('page-content')

<!-- =======================
                  ///// Begin tt-section /////
                  ============================
                  * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
                  -->
<div class="tt-section">
    <div class="tt-section-inner">

        <!-- Begin portfolio grid (works combined with tt-Ggrid!)
                    ==========================
                    * Use class "pgi-hover" to enable portfolio grid item hover effect (behavior depends on "ttgr-gap-*" classes below!).
                    * Use class "pgi-cap-hover" to enable portfolio grid item caption hover effect (effect only with class "pgi-cap-inside"! Also no effect on mobile devices!).
                    * Use class "pgi-cap-center" to position portfolio grid item caption to center.
                    * Use class "pgi-cap-inside" to position portfolio grid item caption to inside.
                    -->
        <div id="portfolio-grid" class="pgi-hover">

            <!-- Begin tt-Grid
                     ===================
                     * Use class "ttgr-layout-2", "ttgr-layout-3", "ttgr-layout-4" to set grid layout (columns). No class = one column.
                     * Use class "ttgr-layout-1-2", "ttgr-layout-2-1", "ttgr-layout-2-3", "ttgr-layout-3-2", "ttgr-layout-3-4" or "ttgr-layout-4-3" to set grid mixed layout (columns).
                     * Use class "ttgr-layout-creative-1" or "ttgr-layout-creative-2" to set grid creative mixed layout (no effect with classes "ttgr-portrait", "ttgr-portrait-half", "ttgr-not-cropped" and "ttgr-shifted").
                     * Use class "ttgr-portrait" or "ttgr-portrait-half" to enable portrait mode (no effect with classes "ttgr-layout-creative-1", "ttgr-layout-creative-2" and "ttgr-not-cropped").
                     * Use class "ttgr-gap-1", "ttgr-gap-2", "ttgr-gap-3", "ttgr-gap-4", "ttgr-gap-5" or "ttgr-gap-6" to add space between items.
                     * Use class "ttgr-not-cropped" to enable not cropped mode (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
                     * Use class "ttgr-shifted" to enable shifted layout (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
                     -->
            <div class="tt-grid ttgr-layout-creative-2 ttgr-gap-4">

                <!-- Begin tt-Grid items wrap
                      ============================== -->
                <div class="tt-grid-items-wrap isotope-items-wrap">

                    <!-- Begin tt-Grid item
                       ======================== -->
                    <div class="tt-grid-item isotope-item people">
                        <div class="ttgr-item-inner">

                            <!-- Begin portfolio grid item
                         ===============================
                         * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"! Also no effect on small screens!).
                         -->
                            <div class="portfolio-grid-item">
                                <a href="single-project-1.html" class="pgi-image-wrap" data-cursor="View<br>Project">
                                    <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                    <div class="pgi-image-holder">
                                        <div class="pgi-image-inner anim-zoomin">
                                            <figure class="pgi-image ttgr-height">
                                                <img src="{{ asset('img/nft/Characters....jpg') }}" alt="image">
                                            </figure> <!-- /.pgi-image -->
                                        </div> <!-- /.pgi-image-inner -->
                                    </div> <!-- /.pgi-image-holder -->
                                </a> <!-- /.pgi-image-wrap -->

                                <div class="pgi-caption">
                                    <div class="pgi-caption-inner">
                                        <h2 class="pgi-title">
                                            <a href="single-project-1.html">Elegant Women</a>
                                        </h2>
                                        <div class="pgi-categories-wrap">
                                            <div class="pgi-category">People</div>
                                            <!-- <div class="pgi-category">Varia</div> -->
                                        </div> <!-- /.pli-categories-wrap -->
                                    </div> <!-- /.pgi-caption-inner -->
                                </div> <!-- /.pgi-caption -->
                            </div>
                            <!-- End portfolio grid item -->

                        </div> <!-- /.ttgr-item-inner -->
                    </div>
                    <!-- End tt-Grid item -->

                    <!-- Begin tt-Grid item
                       ======================== -->
                    <div class="tt-grid-item isotope-item creative">
                        <div class="ttgr-item-inner">

                            <!-- Begin portfolio grid item
                         ===============================
                         * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
                         -->
                            <div class="portfolio-grid-item">
                                <a href="single-project-2.html" class="pgi-image-wrap" data-cursor="View<br>Project">
                                    <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                    <div class="pgi-image-holder">
                                        <div class="pgi-image-inner anim-zoomin">
                                            <figure class="pgi-image ttgr-height">
                                                <img src="{{ asset('img/nft/Other Planets.jpg') }}" alt="image">
                                            </figure> <!-- /.pgi-image -->
                                        </div> <!-- /.pgi-image-inner -->
                                    </div> <!-- /.pgi-image-holder -->
                                </a> <!-- /.pgi-image-wrap -->

                                <div class="pgi-caption">
                                    <div class="pgi-caption-inner">
                                        <h2 class="pgi-title">
                                            <a href="single-project-2.html">The Chase</a>
                                        </h2>
                                        <div class="pgi-categories-wrap">
                                            <div class="pgi-category">Creative</div>
                                            <!-- <div class="pgi-category">Varia</div> -->
                                        </div> <!-- /.pli-categories-wrap -->
                                    </div> <!-- /.pgi-caption-inner -->
                                </div> <!-- /.pgi-caption -->
                            </div>
                            <!-- End portfolio grid item -->

                        </div> <!-- /.ttgr-item-inner -->
                    </div>
                    <!-- End tt-Grid item -->

                    <!-- Begin tt-Grid item
                       ======================== -->
                    <div class="tt-grid-item isotope-item people">
                        <div class="ttgr-item-inner">

                            <!-- Begin portfolio grid item
                         ===============================
                         * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
                         -->
                            <div class="portfolio-grid-item">
                                <a href="single-project-3.html" class="pgi-image-wrap" data-cursor="View<br>Project">
                                    <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                    {{-- <div class="pgi-image-holder">
                                        <div class="pgi-image-inner anim-zoomin">
                                            <figure class="pgi-video-wrap ttgr-height">
                                                <video class="pgi-video" loop muted preload="metadata"
                                                    poster="{{ asset('vids/fashion-shoot.jpg') }}">
                                                    <source src="{{ asset('vids/fashion-shoot.mp4') }}"
                                                        type="video/mp4">
                                                    <source src="{{ asset('vids/fashion-shoot.webm') }}"
                                                        type="video/webm">
                                                </video>

                                            </figure> <!-- /.pgi-video-wrap -->
                                        </div> <!-- /.pgi-image-inner -->
                                    </div> <!-- /.pgi-image-holder --> --}}
                                    <div class="pgi-image-holder">
                                        <div class="pgi-image-inner anim-zoomin">
                                            <figure class="pgi-image ttgr-height">
                                                <img src="{{ asset('img/nft/1.jpg') }}" alt="image">
                                            </figure> <!-- /.pgi-image -->
                                        </div> <!-- /.pgi-image-inner -->
                                    </div> <!-- /.pgi-image-holder -->
                                </a> <!-- /.pgi-image-wrap -->

                                <div class="pgi-caption">
                                    <div class="pgi-caption-inner">
                                        <h2 class="pgi-title">
                                            <a href="single-project-3.html">Fashion Shoot</a>
                                        </h2>
                                        <div class="pgi-categories-wrap">
                                            <div class="pgi-category">People</div>
                                            <!-- <div class="pgi-category">Varia</div> -->
                                        </div> <!-- /.pli-categories-wrap -->
                                    </div> <!-- /.pgi-caption-inner -->
                                </div> <!-- /.pgi-caption -->
                            </div>
                            <!-- End portfolio grid item -->

                        </div> <!-- /.ttgr-item-inner -->
                    </div>
                    <!-- End tt-Grid item -->

                    <!-- Begin tt-Grid item
                       ======================== -->
                    <div class="tt-grid-item isotope-item nature">
                        <div class="ttgr-item-inner">

                            <!-- Begin portfolio grid item
                         ===============================
                         * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
                         -->
                            <div class="portfolio-grid-item">
                                <a href="single-project-4.html" class="pgi-image-wrap" data-cursor="View<br>Project">
                                    <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                    <div class="pgi-image-holder">
                                        <div class="pgi-image-inner anim-zoomin">
                                            <figure class="pgi-image ttgr-height">
                                                <img src="{{ asset('img/nft/33.jpg') }}" alt="image">
                                            </figure> <!-- /.pgi-image -->
                                        </div> <!-- /.pgi-image-inner -->
                                    </div> <!-- /.pgi-image-holder -->
                                </a> <!-- /.pgi-image-wrap -->

                                <div class="pgi-caption">
                                    <div class="pgi-caption-inner">
                                        <h2 class="pgi-title">
                                            <a href="single-project-4.html">Enchanting Nature</a>
                                        </h2>
                                        <div class="pgi-categories-wrap">
                                            <div class="pgi-category">Nature</div>
                                            <!-- <div class="pgi-category">Varia</div> -->
                                        </div> <!-- /.pli-categories-wrap -->
                                    </div> <!-- /.pgi-caption-inner -->
                                </div> <!-- /.pgi-caption -->
                            </div>
                            <!-- End portfolio grid item -->

                        </div> <!-- /.ttgr-item-inner -->
                    </div>
                    <!-- End tt-Grid item -->

                </div>
                <!-- End tt-Grid items wrap  -->

            </div>
            <!-- End tt-Grid -->

        </div>
        <!-- End portfolio grid -->


        <div class="text-center anim-fadeinup">

            <!-- Begin scrolling button (See all works)
                     ============================ -->
            <a href="portfolio-grid-creative.html" class="tt-scrolling-btn all-works-btn" data-cursor="All<br>Works">
                <div class="scr-btn-inner ph-appear">
                    <div class="scr-btn-icon"><i class="fas fa-arrow-right"></i></div>
                    <div class="scr-btn-spinner">
                        <svg viewBox="0 0 500 500">
                            <defs>
                                <path
                                    d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250"
                                    id="textcircle"></path>
                            </defs>
                            <!-- If you change the text, you probably need to adjust the CSS so that it fits correctly. Find ".scr-btn-text" in file "theme.css" and adjust it for your needs. -->
                            <text dy="30" class="scr-btn-text">
                                <textPath xlink:href="#textcircle">See All Works - See All Works -
                                </textPath>
                            </text>
                        </svg>
                    </div>
                </div> <!-- /.sdc-inner -->
            </a>
            <!-- End scrolling button -->

        </div> <!-- /.text-center -->

    </div> <!-- /.tt-section-inner -->
</div>
<!-- End tt-section -->


@include('segments/services')


@include('segments/my-banner')

@endsection
