@extends('layouts.user')

@section('content')
{{-- hero dection --}}
<div class="hero_sec">
    <div class="content">
        <div class="hero_textContainer">
            <div class="hero_text">
                <h2>Let’s Talk About Your Project</h2>
                <p>Elevate Your Digital Presence with Expert Web Development, Stunning UI/UX Design, and Seamless Video
                    Editing
                </p>
                <button id="scrollButton" data-target="targetSection">Our Services</button>

            </div>
        </div>
        <div class="hero_img">
            <img src="{{ asset('img/heroImg.png') }}" alt="Hero Image">
        </div>
    </div>
</div>

{{-- our services --}}
<section class="wrapper" id="targetSection">
    <span class="title">Our Sevices</span>
    <ul class="container">
        <li class="box">
            <div class="question">
                <p class="question__text">Graphic Design</p>
                <i class="fa-solid fa-caret-down icon"></i>
            </div>
            <div class="answer">
                <p class="answer__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse modi natus
                    placeat deleniti ipsum architecto maxime et totam sed perferendis, minima saepe ex similique facilis
                    voluptates itaque doloremque non iusto.</p>

                <button>Learn More</button>
            </div>
        </li>
        <li class="box">
            <div class="question">
                <p class="question__text">Creative Campaign</p>
                <i class="fa-solid fa-caret-down icon"></i>
            </div>
            <div class="answer">
                <p class="answer__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse modi natus
                    placeat deleniti ipsum architecto maxime et totam sed perferendis, minima saepe ex similique facilis
                    voluptates itaque doloremque non iusto.</p>
                <button>Learn More</button>

            </div>
        </li>
        <li class="box">
            <div class="question">
                <p class="question__text">UI/UX Design</p>
                <i class="fa-solid fa-caret-down icon"></i>
            </div>
            <div class="answer">
                <p class="answer__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse modi natus
                    placeat deleniti ipsum architecto maxime et totam sed perferendis, minima saepe ex similique facilis
                    voluptates itaque doloremque non iusto.</p>
                <button>Learn More</button>

            </div>
        </li>
        <li class="box">
            <div class="question">
                <p class="question__text">Development</p>
                <i class="fa-solid fa-caret-down icon"></i>
            </div>
            <div class="answer">
                <p class="answer__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse modi natus
                    placeat deleniti ipsum architecto maxime et totam sed perferendis, minima saepe ex similique facilis
                    voluptates itaque doloremque non iusto.</p>
                <button>Learn More</button>

            </div>
        </li>
    </ul>
</section>

{{-- portfolio --}}
<section class="portfolio">
    <div class="title">We envision a world where every idea, product, or service is brought to life through exceptional
        design.</div>
    <div class="content_container">
        <div class="content">
            <div class="img"></div>
            <div class="title_descr">
                <span class="title">Title</span>
                <span class="description">-Description</span>
            </div>
        </div>
        <div class="content">
            <div class="img"></div>
            <div class="title_descr">
                <span class="title">Title</span>
                <span class="description">-Description</span>
            </div>
        </div>
        <div class="content">
            <div class="img"></div>
            <div class="title_descr">
                <span class="title">Title</span>
                <span class="description">-Description</span>
            </div>
        </div>
        <div class="content">
            <div class="img"></div>
            <div class="title_descr">
                <span class="title">Title</span>
                <span class="description">-Description</span>
            </div>
        </div>
        <div class="content">
            <div class="img"></div>
            <div class="title_descr">
                <span class="title">Title</span>
                <span class="description">-Description</span>
            </div>
        </div>
        <div class="content">
            <div class="img"></div>
            <div class="title_descr">
                <span class="title">Title</span>
                <span class="description">-Description</span>
            </div>
        </div>
        <div class="content">
            <div class="img"></div>
            <div class="title_descr">
                <span class="title">Title</span>
                <span class="description">-Description</span>
            </div>
        </div>
        <div class="content">
            <div class="img"></div>
            <div class="title_descr">
                <span class="title">Title</span>
                <span class="description">-Description</span>
            </div>
        </div>
        <div class="content">
            <div class="img"></div>
            <div class="title_descr">
                <span class="title">Title</span>
                <span class="description">-Description</span>
            </div>
        </div>
    </div>
</section>

{{-- Testimonials --}}
<section class="Testimonials">
    <div class="title">Testimonials</div>
    <div class="content_container">
        <div class="content">
            <div class="img">Testimonials</div>
        </div>
        <div class="content">
            <div class="img">Testimonials</div>
        </div>
        <div class="content">
            <div class="img">Testimonials</div>
        </div>
    </div>
</section>

{{-- let's talk section --}}
<section class="letsTalk">
    <span class="text">Ready to turn your ideas into exceptional designs? Contact us today, and let's make something
        amazing together!</span>
    <button>Let's Talk</button>
</section>
@endsection