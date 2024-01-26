@extends('layouts/no-header')

@section('page-title', 'whoami?')

@section('page-content')
    <div id="page-header" class="ph-full ph-bg-image ph-image-cover-3 ph-content-parallax">
        <div class="page-header-inner tt-wrap">

            <!-- Begin page header image
                           ============================= -->
            <div class="ph-image">
                <div class="ph-image-inner">
                    <style>
                        * {
                            margin: 0;
                            padding: 0
                        }

                        body {
                            background: #000;
                        }

                        canvas {
                            display: block;
                        }
                    </style>
                    <canvas>

                    </canvas>
                    <script>
                        // Initialising the canvas
                        var canvas = document.querySelector('canvas'),
                            ctx = canvas.getContext('2d');

                        // Setting the width and height of the canvas
                        canvas.width = window.innerWidth;
                        canvas.height = window.innerHeight;

                        // Setting up the letters
                        var letters =
                            'pya.h01thcpp10whoami01pydea.rs';
                        letters = letters.split('');

                        // Setting up the columns
                        var fontSize = 10,
                            columns = canvas.width / fontSize;

                        // Setting up the drops
                        var drops = [];
                        for (var i = 0; i < columns; i++) {
                            drops[i] = 1;
                        }

                        // Setting up the draw function
                        function draw() {
                            ctx.fillStyle = 'rgba(0, 0, 0, .1)';
                            ctx.fillRect(0, 0, canvas.width, canvas.height);
                            for (var i = 0; i < drops.length; i++) {
                                var text = letters[Math.floor(Math.random() * letters.length)];
                                ctx.fillStyle = '#0f0';
                                ctx.fillText(text, i * fontSize, drops[i] * fontSize);
                                drops[i]++;
                                if (drops[i] * fontSize > canvas.height && Math.random() > .95) {
                                    drops[i] = 0;
                                }
                            }
                        }

                        // Loop the animation
                        setInterval(draw, 33);
                    </script>
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
                <h1 class="ph-caption-title">
                    <div class="ph-appear">I
                        am:<br>&nbsp;&nbsp;thcpp<br>&nbsp;&nbsp;&nbsp;&nbsp;pya.h<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pydea.rs
                    </div>
                    <!-- You can use <br> to break a text line if needed -->
                </h1>

            </div>
            <!-- End page header caption -->

        </div> <!-- /.page-header-inner -->

        <div class="tt-scroll-down">
            <a href="#page-content" class="tt-sd-inner ph-appear" data-offset="0">
                <div class="tt-sd-arrow">
                    <div class="tt-sd-arrow-inner"></div>
                </div>
                <div class="tt-sd-text">Scroll</div>
            </a>
        </div>

    </div>

    <div id="page-content">

        <div class="tt-section padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap max-width-900">

                <div class="text-xxlg">
                    <h2 class="anim-fadeinup">Hello, Friend! THIS IS MY DESIGN.</h2>

                    <p class="anim-fadeinup">I'm like god; I have many names and no picture :) Well! call me whatever you
                        like. I don't care. It's my work that really matters.</p>
                    <p class="anim-fadeinup">Please do not consider this one serious. This project is merely a joke for me,
                        comparing to my <a href="https://github.com/pya-h" target="_blank" rel="noopener">OTHER
                            Projects</a>.
                        Believe me.</p>

                    <p class="anim-fadeinup">I'm a Fullstack Developer, with more than 10 years of experience in
                        programming, and still longing for learning more.</p>

                    <p class="anim-fadeinup">This project is written in php, uses laravel framework and a cool template
                        called Nui designed by Stephan Gordon.</p>
                    <p class="anim-fadeinup">I think I use each one of these so called names, while woking on a certain area
                        and aspect. Each one is used for its special purposes. For example pya.h is
                        used for serious and professional works, while pydea.rs is used for projects that are
                        less professional, and mainly mathematical problems; or Maybe It's not about that and I'm just a
                        freak with DID issues :)</p>

                    <p class="anim-fadeinup">The social links section of the menu, and the follow section(bottom of page) of
                        this page, Are the ways you can checkout and communicate with me.</p>
                </div>

            </div> <!-- /.tt-section-inner -->
        </div>

    </div>
@endsection
