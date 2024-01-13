
        <!-- Begin tt-Grid items wrap
                            ============================== -->
        <div class="tt-grid-items-wrap isotope-items-wrap">

            @foreach ($nfts as $nft)
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
                                            <img src="{{ asset($nftBasePath . $nft->img) }}" alt="image">
                                        </figure> <!-- /.pgi-image -->
                                    </div> <!-- /.pgi-image-inner -->
                                </div> <!-- /.pgi-image-holder -->
                            </a> <!-- /.pgi-image-wrap -->

                            <div class="pgi-caption">
                                <div class="pgi-caption-inner">
                                    <h2 class="pgi-title">
                                        <a href="single-project-1.html">{{ $nft->title }}</a>
                                    </h2>
                                    @if (!empty($nft->description))
                                        <div class="pgi-categories-wrap">
                                            <div class="pgi-category">{{ $nft->truncateDescription() }}</div>
                                            <!-- <div class="pgi-category">Varia</div> -->
                                        </div> <!-- /.pli-categories-wrap -->
                                    @endif
                                </div> <!-- /.pgi-caption-inner -->
                            </div> <!-- /.pgi-caption -->
                        </div>
                        <!-- End portfolio grid item -->

                    </div> <!-- /.ttgr-item-inner -->
                </div>
            @endforeach

            <!-- End tt-Grid item -->

            <!-- Begin tt-Grid item
                            ======================== -->
            {{-- <div class="tt-grid-item isotope-item creative">
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
        </div> --}}
            <!-- End tt-Grid item -->

            <!-- Begin tt-Grid item
                            ======================== -->
            {{-- <div class="tt-grid-item isotope-item people">
                <div class="ttgr-item-inner">

                    <!-- Begin portfolio grid item
                    ===============================
                    * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
                    -->
                    <div class="portfolio-grid-item">
                        <a href="single-project-3.html" class="pgi-image-wrap" data-cursor="View<br>Project">
                            <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                            <div class="pgi-image-holder">
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
            </div> --}}
            <!-- End tt-Grid item -->

            <!-- Begin tt-Grid item
                            ======================== -->
            {{-- <div class="tt-grid-item isotope-item nature">
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
            </div> --}}
            <!-- End tt-Grid item -->

        </div>
        <!-- End tt-Grid items wrap  -->
