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

                    @include('segments/nft-grid')

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
