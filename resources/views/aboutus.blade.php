@extends('layouts/main')

@section('page-title', 'About Us')

@section('page-content')


    <!-- =======================
        ///// Begin tt-section /////
        ============================
        * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
        -->
    <div class="tt-section">
        <div class="tt-section-inner tt-wrap">

            <div class="tt-row">
                <div class="tt-col-lg-9">

                    <div class="text-xlg anim-fadeinup">

                        <!-- Begin tt-Heading
                            ======================
                            * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
                            * Use class "tt-heading-stroke" to enable stroke style.
                            * Use class "tt-heading-center" to align tt-Heading to center.
                            * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                            -->
                        <div class="tt-heading tt-heading-lg margin-bottom-60">
                            <!-- <h3 class="tt-heading-subtitle">Subtitle</h3> -->
                            <h2 class="tt-heading-title">Howdy y'all!</h2>
                            <!-- You can use <br> to break a text line if needed -->
                        </div>
                        <!-- End tt-Heading -->

                        <p>&nbsp;&nbsp;&nbsp;&nbsp;At its early days "ZeWea" was set to make any idea into a work of art and
                            any work of art into even more ideas.

                            However in todays world ZeWea's original artists expanded their reach by finding more and more
                            people that understood their vision and by connecting all the assets at ZeWea Studios; ZeWea
                            organization created 676 non-fungible tokens ( each called a " Zea") released in 26 separate
                            collections.

                            Each Ze gives access to some LIM tokens and Jeton on the Limit blockchain.</P>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            By purchasing any Zea (ZeWea NFT) at auction, you will be the original owner of the Zea. In
                            subsequent purchases and sales of that Zea, you will be given some transaction fees.

                            You can also borrow a certain amount of LIM from LIMIT blockchain according to your Zea value by
                            staking that Zea.
                        </p>
                        <p>
                            Custom Zea: <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;There is a group of artists at ZeWea Studios who can create personalized
                            Zea which you can use as avatars.
                            You can also convert your custom Zea into characters in the ZeWea metaverse for free.
                        </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            Evolution: All 676 NFTs will be manually crafted and completed, and early buyers will have a
                            dynamic Zea that can interact with other Zea owners of the same collection to develop their Zea.
                        </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            A limited number of earlier owners of Zea will soon be converted into real sculptures, and the
                            owner will be able to have a physical version of the Zea individually.
                        </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            ZeWea Metaverse: A virtual world beyond your mind is waiting for you.</p>
                    </div>

                </div> <!-- /.tt-col -->

                <div class="tt-col-lg-3">
                </div> <!-- /.tt-col -->
            </div> <!-- /.tt-row -->

        </div> <!-- /.tt-section-inner -->
    </div>
    <!-- End tt-section -->


    <!-- =======================
        ///// Begin tt-section /////
        ============================
        * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
        -->
    <div class="tt-section">
        <div class="tt-section-inner">

            <!-- =============================
                ///// Begin content carousel /////
                ==================================
                * Use class "cc-shifted" to enable shifted style (no effect on small screens!).
                * Use class "cursor-drag" to enable cursor drag on carousel hover ("data-simulate-touch" attribute must be enabled!).
                * Use class "cc-scale-down" to enable scale down animation on carousel click.
                * Use class "cc-pagination-outside" to bring pagination outside.
                * Use class "cc-hide-pagination" to hide pagination (for desktop only!).
                * Use class "cc-hide-navigation" to hide navigation arrows.
                * Available data attributes:
                        data-speed="900"......................(milliseconds)
                        data-autoplay="5000"..................(milliseconds. Note: disabled after user first interactions)
                        data-simulate-touch="true"............(true/false)
                        data-loop="true"......................(true/false)
                        data-pagination-type="bullets"........(bullets/fraction/progressbar)
                -->
            <div class="tt-content-carousel cursor-drag cc-scale-down cc-hide-pagination cc-pagination-outside cc-hide-navigation"
                data-loop="true" data-simulate-touch="true" data-speed="900">

                <!-- Begin swiper container -->
                <div class="swiper">

                    <!-- Begin swiper wrapper (required) -->
                    <div class="swiper-wrapper">

                        <!-- Begin swiper slide
                            ======================== -->
                        <div class="swiper-slide">
                            <div class="tt-content-carousel-item">
                                <figure>
                                    <img class="tt-cc-image swiper-lazy" src="{{ asset('img/low-qlt-thumb.jpg') }}"
                                        data-src="{{ asset('img/misc/misc-1.jpg') }}" alt="Image">
                                    <!-- <figcaption>Image Caption</figcaption> -->
                                </figure>
                            </div> <!-- /.tt-content-carousel-item -->
                        </div>
                        <!-- End swiper slide -->

                        <!-- Begin swiper slide
                            ======================== -->
                        <div class="swiper-slide">
                            <div class="tt-content-carousel-item">
                                <figure>
                                    <img class="tt-cc-image swiper-lazy" src="{{ asset('img/low-qlt-thumb.jpg') }}"
                                        data-src="{{ asset('img/misc/misc-2.jpg') }}" alt="Image">
                                    <!-- <figcaption>Image Caption</figcaption> -->
                                </figure>
                            </div> <!-- /.tt-content-carousel-item -->
                        </div>
                        <!-- End swiper slide -->

                        <!-- Begin swiper slide
                            ======================== -->
                        <div class="swiper-slide">
                            <div class="tt-content-carousel-item">
                                <figure>
                                    <video class="tt-cc-video" loop muted preload="metadata"
                                        poster="{{ asset('vids/office-team.jpg') }}">
                                        <source src="{{ asset('vids/office-team.mp4') }}" type="video/mp4">
                                        <source src="{{ asset('vids/office-team.webm') }}" type="video/webm">
                                    </video>
                                </figure>
                            </div> <!-- /.tt-content-carousel-item -->
                        </div>
                        <!-- End swiper slide -->

                        <!-- Begin swiper slide
                            ======================== -->
                        <div class="swiper-slide">
                            <div class="tt-content-carousel-item">
                                <figure>
                                    <img class="tt-cc-image swiper-lazy" src="{{ asset('img/low-qlt-thumb.jpg') }}"
                                        data-src="{{ asset('img/misc/misc-3.jpg') }}" alt="Image">
                                    <!-- <figcaption>Image Caption</figcaption> -->
                                </figure>
                            </div> <!-- /.tt-content-carousel-item -->
                        </div>
                        <!-- End swiper slide -->

                        <!-- Begin swiper slide
                            ======================== -->
                        <div class="swiper-slide">
                            <div class="tt-content-carousel-item">
                                <figure>
                                    <img class="tt-cc-image swiper-lazy" src="{{ asset('img/low-qlt-thumb.jpg') }}"
                                        data-src="{{ asset('img/misc/misc-4.jpg') }}" alt="Image">
                                    <!-- <figcaption>Image Caption</figcaption> -->
                                </figure>
                            </div> <!-- /.tt-content-carousel-item -->
                        </div>
                        <!-- End swiper slide -->

                        <!-- Begin swiper slide
                            ======================== -->
                        <div class="swiper-slide">
                            <div class="tt-content-carousel-item">
                                <figure>
                                    <img class="tt-cc-image swiper-lazy" src="{{ asset('img/low-qlt-thumb.jpg') }}"
                                        data-src="{{ asset('img/misc/misc-5.jpg') }}" alt="Image">
                                    <!-- <figcaption>Image Caption</figcaption> -->
                                </figure>
                            </div> <!-- /.tt-content-carousel-item -->
                        </div>
                        <!-- End swiper slide -->

                    </div>
                    <!-- End swiper wrapper -->

                </div>
                <!-- End swiper container -->


                <!-- Begin content carousel navigation (arrows)
                    =================================================== -->
                <div class="tt-cc-nav-prev">
                    <div class="tt-cc-nav-arrow magnetic-item"><i class="tt-arrow-left"></i></div>
                </div>
                <div class="tt-cc-nav-next">
                    <div class="tt-cc-nav-arrow magnetic-item"><i class="tt-arrow-right"></i></div>
                </div>
                <!-- End content carousel navigation -->

                <!-- Content carousel pagination -->
                <div class="tt-cc-pagination hide-cursor"></div>

            </div>
            <!-- End content carousel -->

        </div> <!-- /.tt-section-inner -->
    </div>
    <!-- End tt-section -->


    @include('shared/services')
@endsection
