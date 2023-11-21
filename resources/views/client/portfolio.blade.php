@extends('layouts.user')

@section('content')
{{-- hero dection --}}
<div class="portfolio_hero animationsGlobal_Vertical" data-delay="100">
    <h1 class="heroTitle">Our Portfolio</h1>
</div>

{{-- Page content --}}
<section class="portfolio_wrapper">
    <div class="title_portfolio animationsGlobal_Vertical" data-delay="300">We envision a world where every idea, product, or service is brought to life through exceptional
        design.</div>
    <div class="portfolio_navSlider">
        <div class="navSlide slide_1_portfolio animationsGlobal_Vertical active" data-delay="400">All</div>
        <div class="navSlide slide_2_portfolio animationsGlobal_Vertical" data-delay="500">Video Editing</div>
        <div class="navSlide slide_3_portfolio animationsGlobal_Vertical" data-delay="600">Graphic Design</div>
        <div class="navSlide slide_4_portfolio animationsGlobal_Vertical" data-delay="700">Web Development</div>
    </div>
    <div class="portfolio_content">
        <div class="cardContainer__portfolio">
            <div class="portfolio_card animationsGlobal_Vertical" data-delay="100">
            </div>
            <div class="portfolio_card animationsGlobal_Vertical" data-delay="200">
            </div>
            <div class="portfolio_card animationsGlobal_Vertical" data-delay="300">
            </div>
            <div class="portfolio_card animationsGlobal_Vertical" data-delay="100">
            </div>
            <div class="portfolio_card animationsGlobal_Vertical" data-delay="200">
            </div>
            <div class="portfolio_card animationsGlobal_Vertical" data-delay="300">
            </div>
            <div class="portfolio_card animationsGlobal_Vertical" data-delay="100">
            </div>
            <div class="portfolio_card animationsGlobal_Vertical" data-delay="200">
            </div>
            <div class="portfolio_card animationsGlobal_Vertical" data-delay="300">
            </div>
        </div>
    </div>
    <main id="main">
        <nav class="nav">
            <a href="#" class="nav-item active" data-rel="project">All</a>
            <a href="#" class="nav-item" data-rel="option-1">Silhouettes</a>
            <a href="#" class="nav-item" data-rel="option-2">Competitions</a>
            <a href="#" class="nav-item" data-rel="option-3">Extreme</a>
        </nav>

        <ul class="portfolio">
            <li class="project option-1">
                <div class="project-image"><img src="http://lorempixel.com/400/400/sports/1/" alt="Sports Image" /></div>
                <div class="project-info">
                    <h2 class="project-info-title">Cricket Tourney</h2>
                    <a class="project-info-button" href="#">View Project</a>
                </div>
            </li>

            <li class="project option-2">
                <div class="project-image"><img src="http://lorempixel.com/400/400/sports/2/" alt="Sports Image" /></div>
                <div class="project-info">
                    <h2 class="project-info-title">Surfing</h2>
                    <a class="project-info-button" href="#">View Project</a>
                </div>
            </li>

            <li class="project option-3">
                <div class="project-image"><img src="http://lorempixel.com/400/400/sports/3/" alt="Sports Image" /></div>
                <div class="project-info">
                    <h2 class="project-info-title">Tour De Force</h2>
                    <a class="project-info-button" href="#">View Project</a>
                </div>
            </li>

            <li class="project option-2">
                <div class="project-image"><img src="http://lorempixel.com/400/400/sports/10/" alt="Sports Image" /></div>
                <div class="project-info">
                    <h2 class="project-info-title">Baseball Season</h2>
                    <a class="project-info-button" href="#">View Project</a>
                </div>
            </li>

            <li class="project option-3">
                <div class="project-image"><img src="http://lorempixel.com/400/400/sports/5/" alt="Sports Image" /></div>
                <div class="project-info">
                    <h2 class="project-info-title">BMX Arrives</h2>
                    <a class="project-info-button" href="#">View Project</a>
                </div>
            </li>

            <li class="project option-1">
                <div class="project-image"><img src="http://lorempixel.com/400/400/sports/6/" alt="Sports Image" /></div>
                <div class="project-info">
                    <h2 class="project-info-title">World Cup 2016</h2>
                    <a class="project-info-button" href="#">View Project</a>
                </div>
            </li>

            <li class="project option-3">
                <div class="project-image"><img src="http://lorempixel.com/400/400/sports/7/" alt="Sports Image" /></div>
                <div class="project-info">
                    <h2 class="project-info-title">100 Meter Swim</h2>
                    <a class="project-info-button" href="#">View Project</a>
                </div>
            </li>

            <li class="project option-1">
                <div class="project-image"><img src="http://lorempixel.com/400/400/sports/8/" alt="Sports Image" /></div>
                <div class="project-info">
                    <h2 class="project-info-title">Kung Fu</h2>
                    <a class="project-info-button" href="#">View Project</a>
                </div>
            </li>

            <li class="project option-2">
                <div class="project-image"><img src="http://lorempixel.com/400/400/sports/9/" alt="Sports Image" /></div>
                <div class="project-info">
                    <h2 class="project-info-title">Women's Relay</h2>
                    <a class="project-info-button" href="#">View Project</a>
                </div>
            </li>
        </ul>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.nav-item').click(function() {
                $('.nav-item').removeClass("active");
                $(this).addClass("active");
                return false;
            });


            $(function() {
                var selectedClass = "";
                $(".nav-item").click(function() {
                    selectedClass = $(this).attr("data-rel");
                    $(".portfolio li").fadeOut(300);
                    $(".portfolio li." + selectedClass).delay(300).fadeIn(300);
                });
            });

        });
    </script>
</section>
@endsection