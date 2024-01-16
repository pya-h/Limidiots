<footer id="tt-footer">
    <div class="tt-footer-inner">

        <!-- Begin footer column
========================= -->
        <div class="footer-col tt-align-center-left">
            <div class="footer-col-inner">

                <a href="#" class="tt-btn tt-btn-link scroll-to-top">
                    <span class="tt-btn-icon"><i class="fas fa-arrow-up"></i></span>
                    <div data-hover="Back to Top">Back to Top</div>
                </a>

            </div> <!-- /.footer-col-inner -->
        </div>


        <!-- Begin footer column ========================= -->
        <div class="footer-col tt-align-center-right">
            <div class="footer-col-inner">

                <div class="footer-social">
                    <div class="footer-social-text"><span>Follow</span><i class="fas fa-share-alt"></i></div>
                    <div class="social-buttons">
                        <ul>
                            @if (!request()->is('whoami'))
                                <li><a href="https://x.com/ZeweaStudio" class="magnetic-item" target="_blank"
                                        rel="noopener"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="https://t.me/Zeweastudio" class="magnetic-item" target="_blank"
                                        rel="noopener"><i class="fab fa-telegram"></i></a></li>
                                <li><a href="https://t.me/LimitFoundation" class="magnetic-item" target="_blank"
                                        rel="noopener"><i class="fab fa-telegram"></i></a></li>
                                <li><a href="https://discord.com/invite/9398BdbP" class="magnetic-item" target="_blank"
                                        rel="noopener"><i class="fab fa-discord"></i></a>
                                </li>
                                <li><a href="https://www.reddit.com/u/ZeweaStudio" class="magnetic-item" target="_blank"
                                        rel="noopener"><i class="fab fa-reddit"></i></a>
                                </li>
                                <li><a href="https://github.com/pya-h" class="magnetic-item" target="_blank"
                                        rel="noopener"><i class="fab fa-github"></i></a></li>
                            @else
                                <li><a href="https://t.me/pya_h" class="magnetic-item" target="_blank" rel="noopener"><i
                                            class="fab fa-telegram"></i></a></li>
                                <li><a href="https://github.com/pya-h" class="magnetic-item" target="_blank"
                                        rel="noopener"><i class="fab fa-github"></i></a></li>

                                <li><a href="https://t.me/pydea_rs" class="magnetic-item" target="_blank"
                                        rel="noopener"><i class="fab fa-telegram"></i></a></li>
                                <li><a href="https://github.com/pydea-rs" class="magnetic-item" target="_blank"
                                        rel="noopener"><i class="fab fa-github"></i></a></li>

                                <li><a href="mailto:thcplusplus@gmail.com" class="magnetic-item" target="_blank"
                                        rel="noopener"><i class="fa fa-envelope"></i></a>
                                </li>
                            @endif
                        </ul>
                    </div> <!-- /.social-buttons -->
                </div> <!-- /.footer-social -->

            </div> <!-- /.footer-col-inner -->
        </div>
        <!-- Begin footer column -->

    </div> <!-- /.tt-section-inner -->
</footer>
<!-- End tt-footer -->
