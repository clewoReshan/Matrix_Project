@extends('layouts.user')

@section('content')
    <div class="about_hero_sec">
        <div class="content">
            <div class="hero_textContainer">
                <div class="hero_text">
                    <h2 class="animationsGlobal_Herizontal_left" data-delay="100">Our Story</h2>
                    <h3 class="animationsGlobal_Herizontal_left" data-delay="400">While the lovely valley teems with vapour
                        around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees.
                    </h3>
                    <p class="animationsGlobal_Herizontal_left" data-delay="400">In 2007 while the lovely valley teems with
                        vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my
                        trees. While the lovely valley teems with vapour around me, and the meridian sun strikes the upper
                        surface of the impenetrable foliage of my trees. and the meridian sun strikes the upper surface of
                        the impenetrable foliage.
                        While the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface
                        of the impenetrable foliage of my trees. and the meridian sun strikes the upper surface of the
                        impenetrable foliage.
                    </p>
                </div>
            </div>
            <div class="hero_img animationsGlobal_Herizontal_right" data-delay="500">
                <img src="{{ asset('img/heroImg.png') }}" alt="Hero Image">
            </div>
        </div>
    </div>

    {{-- counter --}}
    <div class="counter">
        <div class="content_container">
            <div class="content">
                <div class="number">
                    <h1 class="counting">12</h1>
                    <h1>k</h1>
                </div>
                <div class="title">
                    <p>Happy</p>
                    <p>Customer</p>
                </div>
            </div>
            <div class="content">
                <div class="number">
                    <h1 class="counting">99
                </div>
                <div class="title">
                    <p>Business</p>
                    <p>plan</p>
                </div>
            </div>
            <div class="content">
                <div class="number">
                    <h1 class="counting">210
                </div>

                <div class="title">
                    <p>Complete</p>
                    <p>Project</p>
                </div>
            </div>
            <div class="content">
                <div class="number">
                    <h1>+</h1>
                    <h1 class="counting">10</h1>
                </div>
                <div class="title">
                    <p>Years</p>
                    <p>Experience</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Our team --}}
    <div class="team">
        <div class="title animationsGlobal_Vertical" data-delay="100">Meet Our Teem</div>
        <div class="content_container">
            <div class="team_card animationsGlobal_Vertical" data-delay="100">
                <div class="img"> <img src="{{ asset('img/Logo.png') }}" alt="Hero Image"></div>
                <div class="content">
                    <span class="name">Vera Duncan</span>
                    <span class="pos">Product Manager</span>
                </div>

            </div>
            <div class="team_card animationsGlobal_Vertical" data-delay="200">
                <div class="img"> <img src="{{ asset('img/Logo.png') }}" alt="Hero Image"></div>
                <div class="content">
                    <span class="name">Vera Duncan</span>
                    <span class="pos">Product Manager</span>
                </div>
            </div>
            <div class="team_card animationsGlobal_Vertical" data-delay="300">
                <div class="img"> <img src="{{ asset('img/Logo.png') }}" alt="Hero Image"></div>
                <div class="content">
                    <span class="name">Vera Duncan</span>
                    <span class="pos">Product Manager</span>
                </div>
            </div>
            <div class="team_card animationsGlobal_Vertical" data-delay="100">
                <div class="img"> <img src="{{ asset('img/Logo.png') }}" alt="Hero Image"></div>
                <div class="content">
                    <span class="name">Vera Duncan</span>
                    <span class="pos">Product Manager</span>
                </div>
            </div>
        </div>
    </div>


    <script>

    </script>
@endsection
