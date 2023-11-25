@extends('layouts.user')

@section('content')
{{-- hero dection --}}
<div class="portfolio_hero animationsGlobal_Vertical" data-delay="100">
    <h1 class="heroTitle">Our Portfolio</h1>
</div>

{{-- Page content --}}
<section class="portfolio_wrapper">
    <div class="title_portfolio animationsGlobal_Vertical" data-delay="200">We envision a world where every idea, product, or service is brought to life through exceptional
        design.</div>
    <div class="portfolio_navSlider mobileSlidingNav animationsGlobal_Vertical" data-delay="400">
        <div class="navSlide slide_1_portfolio active" data-delay="300" data-rel="all">All</div>

        <div class="navSlide slide_2_portfolio" data-delay="500" data-rel="video_editing">Video Editing</div>

        <div class="navSlide slide_3_portfolio" data-delay="300" data-rel="graphic_design">Graphic Design</div>

        <div class="navSlide slide_4_portfolio" data-delay="500" data-rel="web_dev">Web Development</div>
    </div>
    <div class="portfolio_navSlider desktopNav_portfolio">
        <div class="navSlide slide_1_portfolio animationsGlobal_Herizontal_left active" data-delay="300" data-rel="all">All</div>
        <div class="navSlide slide_2_portfolio animationsGlobal_Herizontal_left" data-delay="500" data-rel="video_editing">Video Editing</div>
        <div class="navSlide slide_3_portfolio animationsGlobal_Herizontal_right" data-delay="300" data-rel="graphic_design">Graphic Design</div>
        <div class="navSlide slide_4_portfolio animationsGlobal_Herizontal_right" data-delay="500" data-rel="web_dev">Web Development</div>
    </div>
    <div class="portfolio_content">
        <div class="cardContainer__portfolio video_editing all">
            <div class="portfolio_card animationsGlobal_Vertical" data-delay="0">
            </div>
            <div class="portfolio_card animationsGlobal_Vertical" data-delay="50">
            </div>
            <div class="portfolio_card animationsGlobal_Vertical" data-delay="100">
            </div>
        </div>
        <div class="cardContainer__portfolio graphic_design all">
            <div class="portfolio_card animationsGlobal_Vertical" data-delay="0">
            </div>
            <div class="portfolio_card animationsGlobal_Vertical" data-delay="50">
            </div>
            <div class="portfolio_card animationsGlobal_Vertical" data-delay="100">
            </div>
        </div>
        <div class="cardContainer__portfolio web_dev all">
            <div class="portfolio_card animationsGlobal_Vertical" data-delay="0">
            </div>
            <div class="portfolio_card animationsGlobal_Vertical" data-delay="50">
            </div>
            <div class="portfolio_card animationsGlobal_Vertical" data-delay="100">
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.navSlide').click(function() {
                $('.navSlide').removeClass("active");
                $(this).addClass("active");
                return false;
            });

            $(function() {
                var selectedClass = "";
                $(".navSlide").click(function() {
                    selectedClass = $(this).attr("data-rel");

                    $(".portfolio_content .cardContainer__portfolio").fadeOut(300);

                    $(".portfolio_content .cardContainer__portfolio." + selectedClass).delay(0).fadeIn(300);
                });
            });

        });

        $('.mobileSlidingNav').slick({
            dots: false,
            autoplay: false,
            slidesToShow: 2,
            centerMode: false,
            infinite: true,
            variableWidth: true,
            cssEase: 'ease-in-out',
            arrows: false
        });
    </script>
</section>
@endsection