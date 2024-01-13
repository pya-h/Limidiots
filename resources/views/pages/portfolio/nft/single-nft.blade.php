@extends('layouts/single-project')

@section('page-title', 'NFT')

@section('page-content')

    <div id="page-header" class="ph-full ph-bg-image ph-image-cover-3 ph-content-parallax">
        <div class="page-header-inner tt-wrap">

            <!-- Begin page header image
       ============================= -->
            <div class="ph-image">
                <div class="ph-image-inner">
                    <img style="display:flex !important; justify-content: center !important; align-items: center !important;" src="{{ asset($nftBasePath . $nft->img) }}" alt="Image">
                </div>
            </div>
            <!-- End page header image -->

            <!-- Begin page header caption
       ===============================
       Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
       -->
            <div class="ph-caption">
                {{-- <div class="ph-categories">
                    <div class="ph-categories-inner ph-appear">
                        <div class="ph-category">{{ $nft->title }}</div>
                        <!-- <div class="ph-category">Varia</div> -->
                    </div>
                </div> <!-- /.ph-categories --> --}}
                <h1 class="ph-caption-title" style="font-size: 2em;">
                    <div class="ph-appear">{{ $nft->title }}</div>
                    <!-- You can use <br> to break a text line if needed -->
                </h1>
                <div class="ph-caption-title-ghost">
                    <div class="ph-appear">{{ $nft->title }}</div>
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

        <!-- Begin page header share (share buttons are for design purposes only!)
      ============================= -->
        {{-- <div class="ph-share ph-appear">
							<div class="ph-share-inner">
								<div class="ph-share-trigger">
									<div class="ph-share-text">Share</div>
									<div class="ph-share-icon"><i class="fas fa-share"></i></div>
								</div> <!-- /.ph-share-trigger -->

								<div class="social-buttons">
									<ul>
										<li><a href="#" class="magnetic-item" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#" class="magnetic-item" title="Share on Twitter"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#" class="magnetic-item" title="Share on Pinterest"><i class="fab fa-pinterest"></i></a></li>
									</ul>
								</div> <!-- /.social-buttons -->
							</div> <!-- /.ph-share-inner -->
						</div> --}}
        <!-- End page header share -->

    </div>
    <!-- End page header -->


    <!-- *************************************
     *********** Begin page content ***********
     ************************************** -->
    <div id="page-content">


        <!-- =======================
      ///// Begin tt-section /////
      ============================
      * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
      -->
      @if (!empty($nft->description))
        <div class="tt-section padding-top-xlg-180 padding-left-sm-3-p padding-right-sm-3-p">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-row">
                    <div class="tt-col-lg-4 padding-right-md-5-p">

                        <!-- Begin tt-Heading
                        ======================
                        * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
                        * Use class "tt-heading-stroke" to enable stroke style.
                        * Use class "tt-heading-center" to align tt-Heading to center.
                        * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                        -->
                        <div class="tt-heading tt-heading-xsmm margin-bottom-30 anim-fadeinup">
                            <h2 class="tt-heading-title">Description</h2>
                            <!-- You can use <br> to break a text line if needed -->
                            <!-- <h3 class="tt-heading-subtitle text-gray">Subtitle</h3> -->
                        </div>
                        <!-- End tt-Heading -->

                    </div> <!-- /.tt-col -->

                    <div class="tt-col-lg-8">

                        <div class="anim-fadeinup">
                            <h1 class="ph-caption-title">
                                <div class="ph-appear">{{ $nft->title }}</div>
                                <!-- You can use <br> to break a text line if needed -->
                            </h1>
                            <p>{{ $nft->description}}.</p>
                        </div>

                        <!-- Begin project info list
                            ============================= -->
                        {{-- <div class="project-info-list anim-fadeinup margin-top-40">
											<ul>
												<li>
													<div class="pi-list-heading">Client</div>
													<div class="pi-list-cont">Themetorium</div>
												</li>
												<li>
													<div class="pi-list-heading">Year</div>
													<div class="pi-list-cont">2022</div>
												</li>
												<li>
													<div class="pi-list-heading">Role</div>
													<div class="pi-list-cont">Photographer</div> <!-- Describe in a few words -->
												</li>
												<li>
													<div class="pi-list-heading">Website</div>
													<div class="pi-list-cont"><a href="https://themetorium.net" target="_blank" rel="noopener">Visit site<span class="pi-list-icon"><i class="fas fa-arrow-right"></i></span></a></div>
												</li>
											</ul>
										</div> --}}
                        <!-- End project info list -->

                    </div> <!-- /.tt-col -->
                </div> <!-- /.tt-row -->

            </div> <!-- /.tt-section-inner -->
        </div>
        @endif
        <!-- End tt-section -->


        <!-- =======================
      ///// Begin tt-section /////
      ============================
      * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
      -->
        {{-- <div class="tt-section no-padding">
            <div class="tt-section-inner">

                <!-- Begin next project
        ========================
        * Use class "tt-np-stroke" to enable caption title stroke style.
        * Use class "ph-image-cover-*" to set image overlay opacity. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5"). No effect with class "tt-np-image-is-light"!
        * Use class "tt-np-image-is-light" if needed, it makes the elements dark and more visible if you use a very light image.
        -->
                <div class="tt-next-project pn-image-cover-3">

                    <!-- Use if destination page contains page header image -->
                    <div class="tt-np-image">
                        <img src="assets/img/portfolio/1920/portfolio-2.jpg" alt="image">
                    </div>

                    <div class="tt-np-caption">
                        <div class="tt-np-subtitle">Next Project</div>
                        <h2 class="tt-np-title">
                            <a href="single-project-2.html" data-cursor="View<br> Project">The Chase</a>
                            <!-- You can use <br> to break a text line if needed -->
                        </h2>
                    </div> <!-- /.tt-np-caption -->

                    <div class="tt-np-ghost">Next</div>
                </div>
                <!-- End next project -->

            </div> <!-- /.tt-section-inner -->
        </div> --}}
        <!-- End tt-section -->

    </div>
    <!-- End page content -->
@endsection
