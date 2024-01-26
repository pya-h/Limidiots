<header id="tt-header" class="tt-header-fixed">

    <div class="tt-header-inner">
        <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes can be found in the file "helper.css". -->

        <div class="tt-header-col">

            <!-- Begin logo
        ================ -->
            <div class="tt-logo">
                <a href="/">
                    <!-- Hint: You may need to change the img height to match your logo type. You can do this from the "theme.css" file (find: ".tt-logo img"). -->
                    <img src="{{ asset('img/logo.png') }}" class="tt-logo-light magnetic-item" alt="Logo">
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

                                <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                                <!-- Begin submenu (submenu master)
==================================== -->
                                <li
                                    class="tt-ol-submenu-wrap {{ request()->is('about-us') || request()->is('about-project') || request()->is('whoami') ? 'active' : '' }}">
                                    <div class="tt-ol-submenu-trigger">
                                        <a href="#">About</a>
                                        <div class="tt-ol-submenu-caret-wrap">
                                            <div class="tt-ol-submenu-caret magnetic-item"></div>
                                        </div> <!-- /.tt-ol-submenu-caret-wrap -->
                                    </div> <!-- /.tt-ol-submenu-trigger -->
                                    <div class="tt-ol-submenu">
                                        <ul class="tt-ol-submenu-list">
                                            <li class="{{ request()->is('about-us') ? 'active' : '' }}"><a
                                                    href="/about-us">About Us</a></li>
                                            <li class="{{ request()->is('about-project') ? 'active' : '' }}"><a
                                                    href="/about-project">About Project</a></li>
                                            <li class="{{ request()->is('whoami') ? 'active' : '' }}"><a
                                                    href="/whoami">About Developer</a></li>
                                        </ul> <!-- /.tt-ol-submenu-list -->
                                    </div> <!-- /.tt-ol-submenu -->
                                </li>
                                <!-- End submenu (sub-master) -->

                                <!-- Begin submenu (submenu master)
==================================== -->
                                <li class="tt-ol-submenu-wrap {{ request()->is('portfolio/grid') ? 'active' : '' }}">
                                    <div class="tt-ol-submenu-trigger">
                                        <a href="#">Portfolio</a>
                                        <div class="tt-ol-submenu-caret-wrap">
                                            <div class="tt-ol-submenu-caret magnetic-item"></div>
                                        </div> <!-- /.tt-ol-submenu-caret-wrap -->
                                    </div> <!-- /.tt-ol-submenu-trigger -->
                                    <div class="tt-ol-submenu">
                                        <ul class="tt-ol-submenu-list">

                                            <li class="{{ request()->is('portfolio/grid') ? 'active' : '' }}"><a
                                                    href="/portfolio/grid">Grid</a></li>

                                        </ul> <!-- /.tt-ol-submenu-list -->
                                    </div> <!-- /.tt-ol-submenu -->
                                </li>
                                <!-- End submenu (sub-master) -->
                                <!-- End submenu (sub-master) -->
                                <li class="{{ request()->is('roadmap') ? 'active' : '' }}"><a
                                        href="/roadmap">Roadmap</a></li>

                            </ul>
                            <!-- End menu list -->

                            <!-- Begin overlay menu social links
===================================== -->
                            <ul class="tt-ol-menu-social">
                                @if (!request()->is('whoami'))
                                    <li>
                                        <h6 class="tt-ol-menu-social-heading">Social Links:</h6>
                                    </li>
                                    <li><a href="https://opensea.io/ZeweaStudio" target="_blank"
                                            rel="noopener">Opensea</a>
                                    </li>
                                    <li><a href="https://x.com/ZeweaStudio" target="_blank" rel="noopener">X</a>
                                    </li>
                                    <li><a href="https://discord.gg/limitfound" target="_blank"
                                            rel="noopener">Discord</a>
                                    </li>
                                    <li><a href="https://t.me/LimitFoundation" target="_blank"
                                            rel="noopener">Telegram</a></li>

                                    <li><a href="https://www.github.com/pya-h" target="_blank" rel="noopener">Developer
                                            Github</a></li>
                                @else
                                    <li>
                                        <h6 class="tt-ol-menu-social-heading">Social Links:</h6>
                                    </li>
                                    <li><a href="https://t.me/pydea_h" target="_blank" rel="noopener">Telegram
                                            pydea.rs</a></li>
                                    <li><a href="https://t.me/pya_h" target="_blank" rel="noopener">Telegram pya.h</a>
                                    </li>

                                    <li><a href="https://www.github.com/pya-h" target="_blank" rel="noopener">Github
                                            pya.h</a></li>

                                    <li><a href="https://www.github.com/pydea-rs" target="_blank" rel="noopener">Github
                                            pydea.rs</a></li>

                                    <li><a href="mailto:thcplusplus@gmail.com">Gmail: thcplusplus@gmail.com</a></li>
                                @endif
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
