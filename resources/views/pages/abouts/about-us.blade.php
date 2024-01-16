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

                            Each Ze gives access to some LIM tokens and Jeton on the Limit blockchain.</p>
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

    <div class="tt-section">
        <div class="tt-section-inner tt-wrap">

            <div class="tt-row">
                <div class="tt-col-lg-9">

                    <div class="text-xlg anim-fadeinup">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            Role of Zewea NFT Collection on Limit Blockchain
                            Since 2008, thanks to the introduction of the blockchain mechanism by Satoshi Nakamoto and
                            society's understanding of its potential after the launch of Ethereum, blockchain technology has
                            been widely recognized as an integral part of the next generation of platforms and we'll be the
                            only platform for the next generation. Blockchain can address many questions and needs in real
                            life that traditional systems cannot. We have identified these needs according to priority and
                            are working to meet and address them.</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            With the introduction of the Proof of Work (PoW) protocol in the Bitcoin blockchain, we have
                            entered an era where only work represents the original value of money. In the PoW protocol, we
                            always pay attention to the miners' minimum costs to determine the bottom of the price, but the
                            reversal cycles in the Bitcoin chart show that this assumption is not always true, because there
                            is no guarantee that anyone will buy at a certain price.
                        </p>
                        <p>
                            In Proof of Stake (PoS), we also have many problems with the lack of control over the network by
                            the PoS pools. It's easier to achieve one's goal on this blockchain by controlling more than
                            half of staked Ethereum. So we were looking for an alternative way to take control of the
                            network, even in a theoretical and conceptual way, out of the reach of everyone.
                        </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            We don’t mint any unbacked coins on Limit Blockchain Lim. In the first step, to properly release
                            LIM (network tokens) in the network, we auction Zewea NFTs to cover the cost of setting up the
                            blockchain.
                        </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            The NFTs are offered in 26 collections, each containing 26 unique NFTs, totalling 676 ZE. Most
                            of the proceeds from the auction are spent on the design and development of the Limit
                            blockchain. If you purchase and hold any of these works until the launch of the MainNet network,
                            you will be able to release the LIM equivalent to the value of the work.
                        </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            In short, at first the only owners of ZE (ZeWea NFTs) are those who make initial offerings in
                            the network by staking ZE and releasing LIM. These collections are not only unique artworks, but
                            also have financial use and are backed by coins. We will avoid coinage in the future through
                            Fath’s algorithm. If you are interested, you can participate in the launch of the Limit Super
                            Blockchain by purchasing these collections.</p>
                    </div>

                </div> <!-- /.tt-col -->

                <div class="tt-col-lg-3">
                </div> <!-- /.tt-col -->
            </div> <!-- /.tt-row -->

        </div> <!-- /.tt-section-inner -->
    </div>
    @include('segments/services')
    <div class="tt-section">
        <div class="tt-section-inner tt-wrap">

            <div class="tt-row">
                <div class="tt-col-lg-9">

                    <div class="text-xlg anim-fadeinup">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            According to the ROADMAP, we have entered the auction phase of ZE collections. These collections
                            will each guarantee the release of a certain amount of Lim currency in the Main Net of Limit. In
                            this way, we try to provide a substantial reward for the initial bidders. This is a progressive
                            pricing bonus on 25 ZE NFTs per collection.
                        </p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            Starting price for 25 works per collection (except headers) are as follows:
                        </p>
                        <ol>
                            <li> 0.26 eth</li>
                            <li> 0.286 eth</li>
                            <li> 0.315 eth</li>
                            <li> 0.345 eth</li>
                            <li> 0.380 eth</li>
                            <li> 0.418 eth</li>
                            <li> 0.46 eth</li>
                            <li> 0.5 eth</li>
                            <li> 0.55 eth</li>
                            <li> 0.61 eth</li>
                            <li> 0.67 eth</li>
                            <li> 0.73 eth</li>
                            <li> 0.8 eth</li>
                            <li> 0.88 eth</li>
                            <li> 0.97 eth</li>
                            <li> 1.06 eth</li>
                            <li> 1.17 eth</li>
                            <li> 1.29 eth</li>
                            <li> 1.42 eth</li>
                            <li> 1.56 eth</li>
                            <li> 1.72 eth</li>
                            <li> 1.89 eth</li>
                            <li> 2.08 eth</li>
                            <li> 2.3 eth</li>
                            <li> 2.52 eth</li>

                        </ol>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                            * Collection number 26 contains 26 headers for each ZE collections that will be sold privately.
                        </p>

                    </div>

                </div> <!-- /.tt-col -->

                <div class="tt-col-lg-3">
                </div> <!-- /.tt-col -->
            </div> <!-- /.tt-row -->

        </div> <!-- /.tt-section-inner -->
    </div>

@endsection
