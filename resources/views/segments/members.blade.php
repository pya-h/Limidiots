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
                                <img class="tt-cc-image swiper-lazy" src="{{ asset('img/us/abolhokm.jpg') }}"
                                    data-src="{{ asset('img/us/abolhokm.jpg') }}" alt="Image">
                                <figcaption>Abolhokmn</figcaption>
                            </figure>
                        </div> <!-- /.tt-content-carousel-item -->
                    </div>
                    <!-- End swiper slide -->

                    <!-- Begin swiper slide
                                                                        ======================== -->
                    <div class="swiper-slide">
                        <div class="tt-content-carousel-item">
                            <figure>
                                <img class="tt-cc-image swiper-lazy" src="{{ asset('img/us/Daarhem.jpg') }}"
                                    data-src="{{ asset('img/us/Daarhem.jpg') }}" alt="Image">
                                <figcaption>Daarhem</figcaption>
                            </figure>
                        </div> <!-- /.tt-content-carousel-item -->
                    </div>
                    <!-- End swiper slide -->

                    {{-- <!-- Begin swiper slide
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
                                                <!-- End swiper slide --> --}}

                    <!-- Begin swiper slide
                                                                        ======================== -->
                    <div class="swiper-slide">
                        <div class="tt-content-carousel-item">
                            <figure>
                                <img class="tt-cc-image swiper-lazy" src="{{ asset('img/us/Impometutemopmi.jpg') }}"
                                    data-src="{{ asset('img/us/Impometutemopmi.jpg') }}" alt="Image">
                                <figcaption>Impometutemopmi</figcaption>
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
