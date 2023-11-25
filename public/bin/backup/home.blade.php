@extends('layouts.user')

@section('content')
{{-- hero dection --}}
<div class="hero_sec">
    <div class="content">
        <div class="hero_textContainer">
            <div class="hero_text">
                <h2 class="animationsGlobal_Herizontal_left" data-delay="100">Let’s Talk About Your Project</h2>
                <p class="animationsGlobal_Herizontal_left" data-delay="400">Elevate Your Digital Presence with Expert Web Development, Stunning UI/UX Design, and Seamless Video
                    Editing
                </p>
                <button class="animationsGlobal_Herizontal_left primaryBtn_global" data-delay="600" id="scrollButton" data-target="targetSection">Our Services</button>

            </div>
        </div>
        <div class="hero_img animationsGlobal_Herizontal_right" data-delay="500">
            <img src="{{ asset('img/heroImg.png') }}" alt="Hero Image">
        </div>
    </div>
</div>

{{-- our services --}}
<section class="wrapper" id="targetSection">
    <span class="title animationsGlobal_Vertical" data-delay="100">Our Sevices</span>
    <ul class="container">
        <li class="box animationsGlobal_Vertical" data-delay="300">
            <div class="question">
                <p class="question__text">Graphic Design</p>
                <i class="fa-solid fa-caret-down icon"></i>
            </div>
            <div class="answer">
                <p class="answer__text">Your brand is more than just a logo; it's the essence of your business. We create compelling brand identities that tell your unique story and resonate with your target audience.</p>

                <button class="primaryBtn_global_invert">Learn More</button>
            </div>
        </li>
        <li class="box animationsGlobal_Vertical" data-delay="400">
            <div class="question">
                <p class="question__text">Creative Campaign</p>
                <i class="fa-solid fa-caret-down icon"></i>
            </div>
            <div class="answer">
                <p class="answer__text">Your brand is more than just a logo; it's the essence of your business. We create compelling brand identities that tell your unique story and resonate with your target audience.</p>
                <button class="primaryBtn_global_invert">Learn More</button>

            </div>
        </li>
        <li class="box animationsGlobal_Vertical" data-delay="500">
            <div class="question">
                <p class="question__text">UI/UX Design</p>
                <i class="fa-solid fa-caret-down icon"></i>
            </div>
            <div class="answer">
                <p class="answer__text">Your brand is more than just a logo; it's the essence of your business. We create compelling brand identities that tell your unique story and resonate with your target audience.</p>
                <button class="primaryBtn_global_invert">Learn More</button>

            </div>
        </li>
        <li class="box animationsGlobal_Vertical" data-delay="600">
            <div class="question">
                <p class="question__text">Development</p>
                <i class="fa-solid fa-caret-down icon"></i>
            </div>
            <div class="answer">
                <p class="answer__text">Your brand is more than just a logo; it's the essence of your business. We create compelling brand identities that tell your unique story and resonate with your target audience.</p>
                <button class="primaryBtn_global_invert">Learn More</button>

            </div>
        </li>
    </ul>
</section>

{{-- portfolio --}}
<section class="portfolio">
    <div class="title animationsGlobal_Vertical" data-delay="100">We envision a world where every idea, product, or service is brought to life through exceptional
        design.</div>
    <div class="content_container">
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
    <button class="primaryBtn_global portfolioBtn animationsGlobal_Vertical" data-delay="400">see portfolio</button>
</section>

{{-- Testimonials --}}
<section class="testimonials" data-delay="300">
    <div class="title animationsGlobal_Vertical" data-delay="100">Testimonials</div>
    <div class="content_container">
        <div class="content animationsGlobal_Vertical" data-delay="200">
            <div class="img">Testimonials</div>
        </div>
        <div class="content animationsGlobal_Vertical" data-delay="400">
            <div class="img">Testimonials</div>
        </div>
        <div class="content animationsGlobal_Vertical" data-delay="600">
            <div class="img">Testimonials</div>
        </div>
    </div>
</section>

{{-- let's talk section --}}
<section class="letsTalk animationsGlobal_Vertical" data-delay="100">
    <span class="text">Ready to turn your ideas into exceptional designs? Contact us today, and let's make something
        amazing together!</span>
    <button class="primaryBtn_global animationsGlobal_Herizontal_left" data-delay="300">Let's Talk</button>
</section>
@endsection