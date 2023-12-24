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


<!-- =======================
                  ///// Begin tt-section /////
                  ============================
                  * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
                  -->
<div class="tt-section padding-top-xlg-100 padding-bottom-xlg-150">
    <div class="tt-section-inner tt-wrap max-width-1700">

        <div class="tt-row margin-left-lg-3-p margin-right-lg-3-p">
            <div class="tt-col-xl-4">

                <!-- Begin tt-Heading
                      ======================
                      * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
                      * Use class "tt-heading-stroke" to enable stroke style.
                      * Use class "tt-heading-center" to align tt-Heading to center.
                      * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                      -->
                <div class="tt-heading tt-heading-xlg anim-fadeinup">
                    <h3 class="tt-heading-subtitle">Our Services</h3>
                    <h2 class="tt-heading-title"><span style="font-size: 1.7em;">L</span>iMi<span
                            style="font-size: 2em;">t</span></h2>
                    <!-- You can use <br> to break a text line if needed -->
                </div>
                <!-- End tt-Heading -->

                <div class="max-width-600 margin-bottom-60 anim-fadeinup">
                    <h5>When passion, courage, and craftsmanship are put into something, positive things
                        will happen.</h5>
                </div>

            </div> <!-- /.tt-col -->

            <div class="tt-col-xl-1">
            </div> <!-- /.tt-col -->

            <div class="tt-col-xl-7">

                <!-- Begin accordion
                      =====================
                      * Use class "tt-ac-sm", "tt-ac-lg", "tt-ac-xlg" or "tt-ac-xxlg" to set accordion size.
                      * Use class "tt-ac-borders" to enable borders.
                      * Note: Add class "is-open" to the "tt-accordion-content" to make this content open by default.
                      -->
                <div class="tt-accordion tt-ac-borders">
                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <div class="tt-ac-head cursor-alter">
                                <h3 class="tt-ac-head-title">Third-party entry and expertise</h3>
                                <!-- <div class="tt-accordion-subtext">Mauris mauris ante</div> -->
                            </div>

                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret-inner magnetic-item">
                                    <div class="tt-accordion-caret"></div>
                                </div>
                            </div> <!-- /.tt-accordion-caret-wrap -->
                        </div> <!-- /.tt-accordion-heading -->
                        <div class="tt-accordion-content max-width-800">
                            <p>&nbsp;&nbsp;&nbsp;&nbsp; Blockchains aim to eliminate third parties so that all matters
                                can only be resolved and
                                separated by algorithms through blockchains. However, we are seeking the entry of a
                                third party to resolve issues within the chain.</p>
                        </div> <!-- /.tt-accordion-content -->
                    </div> <!-- /.tt-accordion-item -->

                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <div class="tt-ac-head cursor-alter">
                                <h3 class="tt-ac-head-title">The role of guide or mentor</h3>
                                <!-- <div class="tt-accordion-subtext">Vivamus nisi</div> -->
                            </div>

                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret-inner magnetic-item">
                                    <div class="tt-accordion-caret"></div>
                                </div>
                            </div> <!-- /.tt-accordion-caret-wrap -->
                        </div> <!-- /.tt-accordion-heading -->
                        <div class="tt-accordion-content max-width-800">
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;For the first time, we have taken an active role in the
                                blockchain community as a mentor. A mentor in the network has a specific responsibility,
                                so we have allocated a particular reward from the network's tokenomics towards it. The
                                guide must educate individuals on entering the world of digital currency and always be
                                ready for guidance."</p>
                        </div> <!-- /.tt-accordion-content -->
                    </div> <!-- /.tt-accordion-item -->

                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <div class="tt-ac-head cursor-alter">
                                <h3 class="tt-ac-head-title">Governance</h3>
                                <!-- <div class="tt-accordion-subtext">Nam min proin eget</div> -->
                            </div>

                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret-inner magnetic-item">
                                    <div class="tt-accordion-caret"></div>
                                </div>
                            </div> <!-- /.tt-accordion-caret-wrap -->
                        </div> <!-- /.tt-accordion-heading -->
                        <div class="tt-accordion-content max-width-800">
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;The governance of Super Blockchain is the responsibility of its
                                members and the community that forms it. To influence the network and its decisions, it
                                is sufficient to have a verified digital identity and hold at least one token in your
                                wallet.</p>
                        </div> <!-- /.tt-accordion-content -->
                    </div> <!-- /.tt-accordion-item -->

                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <div class="tt-ac-head cursor-alter">
                                <h3 class="tt-ac-head-title">Identity Verification</h3>
                                <!-- <div class="tt-accordion-subtext">Condimentum sit amet</div> -->
                            </div>

                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret-inner magnetic-item">
                                    <div class="tt-accordion-caret"></div>
                                </div>
                            </div> <!-- /.tt-accordion-caret-wrap -->
                        </div> <!-- /.tt-accordion-heading -->
                        <div class="tt-accordion-content max-width-800">
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;We cannot provide a 100% guarantee of user privacy preservation in blockchain while
                                facilitating optimal user utilization of the network. We are exploring biometric
                                identity verification to allow users to easily register their identity on the network
                                and, by invoking it, contribute information about their daily activities to the ledger
                                to prove their uniqueness within the limit.</p>
                        </div> <!-- /.tt-accordion-content -->
                    </div> <!-- /.tt-accordion-item -->

                </div>
                <!-- End accordion -->

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
<div class="tt-section padding-top-xlg-120 padding-bottom-xlg-120 bg-white-accent-3">
    <div class="tt-section-inner">

        <!-- Begin scrolling text
                    ==========================
                    Change data-scroll-speed="*" to adjust scrolling speed.
                    Use class "scr-text-reverse" to reverse scrolling direction.
                    Use class "scr-text-stroke" to enable text stroke style (no effect on smaller screens!).
                    -->
        <div class="tt-scrolling-text" data-scroll-speed="10">
            <div class="tt-scrolling-text-inner" data-text="LIKE TO DO THINGS NO ONE WOULD/COULD - PYDEA.H →">
                LIKE TO DO THINGS NO ONE WOULD/COULD - PYDEA.H →
            </div> <!-- /.tt-scrolling-text-inner -->
        </div>
        <!-- End scrolling text -->

        <!-- Begin scrolling text
                    ==========================
                    Change data-scroll-speed="*" to adjust scrolling speed.
                    Use class "scr-text-reverse" to reverse scrolling direction.
                    Use class "scr-text-stroke" to enable text stroke style (no effect on smaller screens!).
                    -->
        <div class="tt-scrolling-text scr-text-stroke scr-text-reverse" data-scroll-speed="10">
            <div class="tt-scrolling-text-inner" data-text="Over 10 years of busting mf my lonely ass off →">
                Over 10 years of busting mf my lonely programmer ass off →
            </div> <!-- /.tt-scrolling-text-inner -->
        </div>
        <!-- End scrolling text -->

    </div> <!-- /.tt-section-inner -->
</div>
<!-- End tt-section -->


<!-- =======================
                  ///// Begin tt-section /////
                  ============================
                  * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
                  -->
<div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
    <div class="tt-section-inner tt-wrap">

        <!-- Begin logo wall
                    =====================
                    * Use class "cl-col-2", "cl-col-3" or "cl-col-4" to change columns.
                    * Hint: for better results make sure all your images are in the same dimensions!
                    -->
        <ul class="tt-logo-wall anim-fadeinup">
            <li>
                <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                    <img src="{{ asset('img/clients/client-1-light.png') }}" class="lv-client-light" alt="Client">
                    <img src="{{ asset('img/clients/client-1-dark.png') }}" class="lv-client-dark" alt="Client">
                </a>
            </li>
            <li>
                <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                    <img src="{{ asset('img/clients/client-2-light.png') }}" class="lv-client-light" alt="Client">
                    <img src="{{ asset('img/clients/client-2-dark.png') }}" class="lv-client-dark" alt="Client">
                </a>
            </li>
            <li>
                <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                    <img src="{{ asset('img/clients/client-3-light.png') }}" class="lv-client-light" alt="Client">
                    <img src="{{ asset('img/clients/client-3-dark.png') }}" class="lv-client-dark" alt="Client">
                </a>
            </li>
            <li>
                <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                    <img src="{{ asset('img/clients/client-4-light.png') }}" class="lv-client-light" alt="Client">
                    <img src="{{ asset('img/clients/client-4-dark.png') }}" class="lv-client-dark" alt="Client">
                </a>
            </li>
            <li>
                <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                    <img src="{{ asset('img/clients/client-5-light.png') }}" class="lv-client-light" alt="Client">
                    <img src="{{ asset('img/clients/client-5-dark.png') }}" class="lv-client-dark" alt="Client">
                </a>
            </li>
            <li>
                <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                    <img src="{{ asset('img/clients/client-6-light.png') }}" class="lv-client-light" alt="Client">
                    <img src="{{ asset('img/clients/client-6-dark.png') }}" class="lv-client-dark" alt="Client">
                </a>
            </li>
            <li>
                <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                    <img src="{{ asset('img/clients/client-7-light.png') }}" class="lv-client-light" alt="Client">
                    <img src="{{ asset('img/clients/client-7-dark.png') }}" class="lv-client-dark" alt="Client">
                </a>
            </li>
            <li>
                <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                    <img src="{{ asset('img/clients/client-8-light.png') }}" class="lv-client-light" alt="Client">
                    <img src="{{ asset('img/clients/client-8-dark.png') }}" class="lv-client-dark" alt="Client">
                </a>
            </li>
            <li>
                <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                    <img src="{{ asset('img/clients/client-9-light.png') }}" class="lv-client-light" alt="Client">
                    <img src="{{ asset('img/clients/client-9-dark.png') }}" class="lv-client-dark" alt="Client">
                </a>
            </li>
            <li>
                <a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
                    <img src="{{ asset('img/clients/client-10-light.png') }}" class="lv-client-light" alt="Client">
                    <img src="{{ asset('img/clients/client-10-dark.png') }}" class="lv-client-dark" alt="Client">
                </a>
            </li>

            <!-- Use the below example if you want a list without links -->
            <!-- <li><img src="assets/img/clients/client-1.png" alt="Client"></li> -->
        </ul>
        <!-- End logo wall -->

    </div> <!-- /.tt-section-inner -->
</div>
<!-- End tt-section -->


<!-- =======================
                  ///// Begin tt-section /////
                  ============================
                  * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
                  -->
<div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150 bg-white-accent-3">
    <div class="tt-section-inner tt-wrap max-width-1600">

        <!-- Begin tt-Heading
                    ======================
                    * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
                    * Use class "tt-heading-stroke" to enable stroke style.
                    * Use class "tt-heading-center" to align tt-Heading to center.
                    * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                    -->
        <div class="tt-heading tt-heading-xlg margin-bottom-7-p anim-fadeinup max-width-1250 margin-auto">
            <h3 class="tt-heading-subtitle">Latest News</h3>
            <h2 class="tt-heading-title">From the Blog</h2>
            <!-- You can use <br> to break a text line if needed -->
            <a href="blog-classic.html" class="tt-btn tt-btn-link">
                <div data-hover="Browse All News">Browse All News</div>
                <span class="tt-btn-icon"><i class="fas fa-arrow-right"></i></span>
            </a>
        </div>
        <!-- End tt-Heading -->

        <!-- ==========================
                    ///// Begin blog carousel /////
                    ===============================
                    * Use class "tt-blc-shifted" to enable shifted style (no effect on smaller screens!).
                    * Use class "tt-blc-hide-navigation" to hide navigation.
                    * Available data attributes:
                      data-speed="800"......................(milliseconds)
                      data-autoplay="5000"..................(milliseconds. Note: disabled after user first interactions)
                      data-simulate-touch="true"............(true/false)
                      data-pagination-type="bullets"........(bullets/fraction/progressbar)
                    -->
        <div class="tt-blog-carousel anim-fadeinup" data-speed="800" data-simulate-touch="true"
            data-pagination-type="bullets">

            <!-- Begin swiper container -->
            <div class="swiper">

                <!-- Begin swiper wrapper (required) -->
                <div class="swiper-wrapper">

                    <!-- Begin swiper slide
                       ======================== -->
                    <div class="swiper-slide">

                        <!-- Begin blog carousel item
                        ============================== -->
                        <div class="tt-blog-carousel-item">
                            <a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
                                <figure class="tt-bci-image">
                                    <img class="swiper-lazy" src="{{ asset('img/low-qlt-thumb.jpg') }}"
                                        data-src="{{ asset('img/blog/carousel/blog-carousel-1.jpg') }}" alt="Image">
                                </figure> <!-- /.tt-bci-image -->
                            </a> <!-- /.tt-bci-image-wrap -->

                            <div class="tt-bci-info">
                                <div class="tt-bci-categories">
                                    <a href="blog-archive.html">Lifestyle</a>
                                    <!-- <a href="blog-archive.html">Uncategorized</a> -->
                                </div>
                                <h2 class="tt-bci-title"><a href="blog-post.html">5 Surprising Techniques
                                        to
                                        Improve Your Creativity</a></h2>
                                <div class="tt-bci-meta">
                                    <span class="published">May 26, 2022</span>
                                    <span class="posted-by">- by <a href="blog-archive.html"
                                            title="View all posts by John Doe">John Doe</a></span>
                                </div> <!-- /.tt-bci-meta -->
                            </div> <!-- /.tt-bci-inf -->
                        </div>
                        <!-- End blog carousel item -->

                    </div>
                    <!-- End swiper slide -->

                    <!-- Begin swiper slide
                       ======================== -->
                    <div class="swiper-slide">

                        <!-- Begin blog carousel item
                        ============================== -->
                        <div class="tt-blog-carousel-item">
                            <a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
                                <figure class="tt-bci-image">
                                    <img class="swiper-lazy" src="{{ asset('img/low-qlt-thumb.jpg') }}"
                                        data-src="{{ asset('img/blog/carousel/blog-carousel-2.jpg') }}" alt="Image">
                                </figure> <!-- /.tt-bci-image -->
                            </a> <!-- /.tt-bci-image-wrap -->

                            <div class="tt-bci-info">
                                <div class="tt-bci-categories">
                                    <a href="blog-archive.html">Tutorials</a>
                                    <!-- <a href="blog-archive.html">Uncategorized</a> -->
                                </div>
                                <h2 class="tt-bci-title"><a href="blog-post.html">Avoid the Top 10
                                        Mistakes
                                        Made by Beginners</a></h2>
                                <div class="tt-bci-meta">
                                    <span class="published">May 24, 2022</span>
                                    <span class="posted-by">- by <a href="blog-archive.html"
                                            title="View all posts by John Doe">John Doe</a></span>
                                </div> <!-- /.tt-bci-meta -->
                            </div> <!-- /.tt-bci-inf -->
                        </div>
                        <!-- End blog carousel item -->

                    </div>
                    <!-- End swiper slide -->

                    <!-- Begin swiper slide
                       ======================== -->
                    <div class="swiper-slide">

                        <!-- Begin blog carousel item
                        ============================== -->
                        <div class="tt-blog-carousel-item">
                            <a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
                                <figure class="tt-bci-image">
                                    <img class="swiper-lazy" src="{{ asset('img/low-qlt-thumb.jpg') }}"
                                        data-src="{{ asset('img/blog/carousel/blog-carousel-3.jpg') }}" alt="Image">
                                </figure> <!-- /.tt-bci-image -->
                            </a> <!-- /.tt-bci-image-wrap -->

                            <div class="tt-bci-info">
                                <div class="tt-bci-categories">
                                    <a href="blog-archive.html">Lifestyle</a>
                                    <!-- <a href="blog-archive.html">Uncategorized</a> -->
                                </div>
                                <h2 class="tt-bci-title"><a href="blog-post.html">Why Some People Save
                                        Money
                                        With This Method</a></h2>
                                <div class="tt-bci-meta">
                                    <span class="published">May 23, 2022</span>
                                    <span class="posted-by">- by <a href="blog-archive.html"
                                            title="View all posts by John Doe">John Doe</a></span>
                                </div> <!-- /.tt-bci-meta -->
                            </div> <!-- /.tt-bci-inf -->
                        </div>
                        <!-- End blog carousel item -->

                    </div>
                    <!-- End swiper slide -->

                    <!-- Begin swiper slide
                       ======================== -->
                    <div class="swiper-slide">

                        <!-- Begin blog carousel item
                        ============================== -->
                        <div class="tt-blog-carousel-item">
                            <a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
                                <figure class="tt-bci-image">
                                    <img class="swiper-lazy" src="{{ asset('img/low-qlt-thumb.jpg') }}"
                                        data-src="{{ asset('img/blog/carousel/blog-carousel-4.jpg') }}" alt="Image">
                                </figure> <!-- /.tt-bci-image -->
                            </a> <!-- /.tt-bci-image-wrap -->

                            <div class="tt-bci-info">
                                <div class="tt-bci-categories">
                                    <a href="blog-archive.html">Inspiration</a>
                                    <!-- <a href="blog-archive.html">Uncategorized</a> -->
                                </div>
                                <h2 class="tt-bci-title"><a href="blog-post.html">Want to Step Up Your
                                        Skills? You Need to Read This First</a></h2>
                                <div class="tt-bci-meta">
                                    <span class="published">May 21, 2022</span>
                                    <span class="posted-by">- by <a href="blog-archive.html"
                                            title="View all posts by John Doe">John Doe</a></span>
                                </div> <!-- /.tt-bci-meta -->
                            </div> <!-- /.tt-bci-inf -->
                        </div>
                        <!-- End blog carousel item -->

                    </div>
                    <!-- End swiper slide -->

                    <!-- Begin swiper slide
                       ======================== -->
                    <div class="swiper-slide">

                        <!-- Begin blog carousel item
                        ============================== -->
                        <div class="tt-blog-carousel-item">
                            <a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
                                <figure class="tt-bci-image">
                                    <img class="swiper-lazy" src="{{ asset('img/low-qlt-thumb.jpg') }}"
                                        data-src="{{ asset('img/blog/carousel/blog-carousel-5.jpg') }}" alt="Image">
                                </figure> <!-- /.tt-bci-image -->
                            </a> <!-- /.tt-bci-image-wrap -->

                            <div class="tt-bci-info">
                                <div class="tt-bci-categories">
                                    <a href="blog-archive.html">Tutorials</a>
                                    <!-- <a href="blog-archive.html">Uncategorized</a> -->
                                </div>
                                <h2 class="tt-bci-title"><a href="blog-post.html">Secrets to Getting Your
                                        Project to Complete Quickly</a></h2>
                                <div class="tt-bci-meta">
                                    <span class="published">May 19, 2022</span>
                                    <span class="posted-by">- by <a href="blog-archive.html"
                                            title="View all posts by John Doe">John Doe</a></span>
                                </div> <!-- /.tt-bci-meta -->
                            </div> <!-- /.tt-bci-inf -->
                        </div>
                        <!-- End blog carousel item -->

                    </div>
                    <!-- End swiper slide -->

                </div>
                <!-- End swiper wrapper -->

            </div>
            <!-- End swiper container -->


            <!-- Begin blog carousel navigation (arrows)
                     ============================================= -->
            <div class="tt-blc-nav-prev">
                <div class="tt-blc-nav-arrow magnetic-item"><i class="tt-arrow-left"></i></div>
            </div>
            <div class="tt-blc-nav-next">
                <div class="tt-blc-nav-arrow magnetic-item"><i class="tt-arrow-right"></i></div>
            </div>
            <!-- End blog carousel navigation -->

            <!-- Blog carousel pagination -->
            <div class="tt-blc-pagination hide-cursor"></div>

        </div>
        <!-- End blog carousel -->

    </div> <!-- /.tt-section-inner -->
</div>
<!-- End tt-section -->


<!-- =======================
                  ///// Begin tt-section /////
                  ============================
                  * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
                  -->
<div class="tt-section padding-top-xlg-150">
    <div class="tt-section-inner tt-wrap max-width-700">

        <!-- Begin tt-Heading
                    ======================
                    * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
                    * Use class "tt-heading-stroke" to enable stroke style.
                    * Use class "tt-heading-center" to align tt-Heading to center.
                    * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                    -->
        <div class="tt-heading tt-heading-xxlg margin-bottom-8-p anim-fadeinup">
            <h3 class="tt-heading-subtitle">Get in Touch</h3>
            <h2 class="tt-heading-title">Let's Work<br> Together!</h2>
            <!-- You can use <br> to break a text line if needed -->
        </div>
        <!-- End tt-Heading -->

        <!-- Begin form
                    ================
                    * Use class "tt-form-filled" or "tt-form-minimal" to change form style.
                    * Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).
                    -->
        <form id="tt-contact-form" class="tt-form-filled anim-fadeinup">

            <!-- Begin hidden required fields (https://github.com/agragregra/uniMail) -->
            <input type="hidden" name="project_name" value="yourwebsiteaddress.com">
            <!-- Change value to your site name -->
            <input type="hidden" name="admin_email" value="your@email.com">
            <!-- Change value to your valid email address (where a message will be sent) -->
            <input type="hidden" name="form_subject" value="Message from yourwebsiteaddress.com">
            <!-- Change value to your own message subject -->
            <!-- End Hidden Required Fields -->

            <div class="tt-row">
                <div class="tt-col-md-6">

                    <div class="tt-form-group">
                        <label>Your Name <span class="required">*</span></label>
                        <input class="tt-form-control" type="text" name="Name" placeholder="" required>
                    </div>

                </div> <!-- /.tt-col -->

                <div class="tt-col-md-6">

                    <div class="tt-form-group">
                        <label>Email address <span class="required">*</span></label>
                        <input class="tt-form-control" type="email" name="Email" placeholder="" required>
                    </div>

                </div> <!-- /.tt-col -->
            </div> <!-- /.tt-row -->

            <div class="tt-form-group">
                <label>Subject <span class="required">*</span></label>
                <input class="tt-form-control" type="text" name="Subject" placeholder="" required>
            </div>

            <!-- <div class="tt-form-group">
                      <label>Select an option <span class="required">*</span></label>
                      <select class="tt-form-control" name="option" required>
                       <option value="" disabled selected>Please choose an option</option>
                       <option value="Say Hello">Say hello</option>
                       <option value="New Project">New project</option>
                       <option value="Feedback">Feedback</option>
                       <option value="Other">Other</option>
                      </select>
                     </div> -->

            <div class="tt-form-group">
                <label>Your Message <span class="required">*</span></label>
                <textarea class="tt-form-control" rows="5" name="Message" placeholder="" required></textarea>
            </div>

            <small class="tt-form-text"><em>Fields marked with an asterisk (*) are required!</em></small>

            <button type="submit" class="tt-btn tt-btn-primary margin-top-30">
                <div data-hover="Send Message">Send Message</div>
                <span class="tt-btn-icon"><i class="fas fa-paper-plane"></i></span>
            </button>
        </form>
        <!-- End form -->

    </div> <!-- /.tt-section-inner -->
</div>
<!-- End tt-section -->



@endsection
