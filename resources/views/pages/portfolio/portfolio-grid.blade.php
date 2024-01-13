@extends('layouts/main')

@section('page-title', 'Portfolio - Grid')

@section('page-content')

    <div class="tt-section">
        <div class="tt-section-inner">

            <!-- Begin portfolio grid (works combined with tt-Ggrid!)
                ==========================
                * Use class "pgi-hover" to enable portfolio grid item hover effect (behavior depends on "ttgr-gap-*" classes below!).
                * Use class "pgi-cap-hover" to enable portfolio grid item caption hover effect (effect only with class "pgi-cap-inside"! Also no effect on mobile devices!).
                * Use class "pgi-cap-center" to position portfolio grid item caption to center.
                * Use class "pgi-cap-inside" to position portfolio grid item caption to inside.
                -->
            <div id="portfolio-grid" class="pgi-hover pgi-cap-inside">

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
                <div class="tt-grid ttgr-layout-3 ttgr-gap-3">

                    <!-- Begin tt-Ggrid top content
                    ================================ -->
                    {{-- <div class="tt-grid-top">

                        <!-- Begin tt-Ggrid categories/filter
                ====================================== -->
                        <div class="tt-grid-categories">

                            <!-- Begin tt-Ggrid categories trigger
                =======================================
                * Use class "ttgr-cat-fixed" to enable categories trigger fixed position.
                -->
                            <div class="ttgr-cat-trigger-wrap ttgr-cat-fixed">
                                <a href="#portfolio-grid" class="ttgr-cat-trigger not-hide-cursor" data-offset="150">
                                    <div class="ttgr-cat-text hide-cursor">
                                        <span data-hover="Open">Filter</span>
                                    </div>
                                    <div class="ttgr-cat-icon">
                                        <span class="magnetic-item"><i class="fas fa-layer-group"></i></span>
                                    </div>
                                </a>
                            </div>
                            <!-- End tt-Ggrid categories trigger -->

                            <!-- Begin tt-Ggrid categories nav
                =================================== -->
                            <div class="ttgr-cat-nav">
                                <div class="ttgr-cat-list-holder cursor-close">
                                    <div class="ttgr-cat-list-inner">
                                        <div class="ttgr-cat-list-content">
                                            <ul class="ttgr-cat-list">
                                                <li class="ttgr-cat-close">Close <i class="fas fa-times"></i></li>
                                                <!-- For mobile devices! -->
                                                <li class="ttgr-cat-item"><a href="#" class="active">Show All</a>
                                                </li>
                                                <li class="ttgr-cat-item"><a href="#"
                                                        data-filter=".branding">Branding</a></li>
                                                <li class="ttgr-cat-item"><a href="#" data-filter=".people">People</a>
                                                </li>
                                                <li class="ttgr-cat-item"><a href="#" data-filter=".nature">Nature</a>
                                                </li>
                                                <li class="ttgr-cat-item"><a href="#"
                                                        data-filter=".creative">Creative</a></li>
                                            </ul>
                                        </div> <!-- /.ttgr-cat-links-content -->
                                    </div> <!-- /.ttgr-cat-links-inner -->
                                </div> <!-- /.ttgr-cat-links-holder -->
                            </div>
                            <!-- End tt-Ggrid categories nav -->

                        </div>
                        <!-- End tt-Ggrid categories/filter-->

                    </div>
                    <!-- End tt-Grid top content --> --}}

                    @include('pages/portfolio/nft/nft-grid')
                </div>
                <!-- End tt-Grid -->

            </div>
            <!-- End portfolio grid -->


            <!-- Begin tt-pagination (uncomment below code if you want to use pagination)
                =========================
                * Use class "tt-pagin-center" to align center.
                -->
            <!-- <div class="tt-pagination tt-pagin-center anim-fadeinup">
                    <div class="tt-pagin-prev">
                    <a href="" class="tt-pagin-item magnetic-item"><i class="fas fa-chevron-left"></i></a>
                    </div>
                    <div class="tt-pagin-numbers">
                    <a href="#" class="tt-pagin-item magnetic-item active">1</a>
                    <a href="" class="tt-pagin-item magnetic-item">2</a>
                    <a href="" class="tt-pagin-item magnetic-item">3</a>
                    <a href="" class="tt-pagin-item magnetic-item">4</a>
                    </div>
                    <div class="tt-pagin-next">
                    <a href="" class="tt-pagin-item tt-pagin-next magnetic-item"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div> -->
            <!-- End tt-pagination -->

        </div> <!-- /.tt-section-inner -->
    </div>
    <!-- End tt-section -->
@endsection
