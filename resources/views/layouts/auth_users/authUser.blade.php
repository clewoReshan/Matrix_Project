<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matrix Reviealer - Dashboard</title>
    <link rel="icon" href="img/logo_white.png">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/8401e5ee3b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-HS6r7ie0J5yfnjJIGT+E0spXaJhGFBV3OviCvB9eWR/hPX5kD2ikOhOww3OjcvLp/JdMnjmtz/GVXoy/ANwjJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-GvkJ1TyTBkXwqfKxG2l3mKF6G4Lp1X7IzViC8X+zhrngR9vD2Ij2KDMt+GzQMc66yKuK6Lb8LE1vjXDvIuwhXw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- izitoast -->
    <link rel="stylesheet" href="iziToast.min.css">
</head>

<body>
    {{-- header --}}
    <style>
        .menu {
            display: none;
        }

        .nav_text_container {
            display: flex;
            align-items: center;
        }

        .btn-group {
            margin-left: 20px;
        }
    </style>
    <div class="navbar">
        <div class="navContentWrapper">
            <div class="img_logo">
                <img src="{{ asset('img/Logo.png') }}" alt="Matrix Logo">
            </div>
            <div class="nav_text_container">
                <a class="dropdown-item disabled" aria-disabled="true">{{$user->name}}</a>
                <div class="btn-group">
                    <button type="button" class="btn_custom dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../../img/avatar.png" alt="" class="avatar dropDownTrigger">
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Orders</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{route('logout')}}">Log out</a></li>
                    </ul>
                </div>
                <span class="menu">
                    <i class="bi bi-list"></i>
                </span>
            </div>
        </div>
    </div>

    <!-- {{-- successfull message --}} -->
    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span>Success : {{ Session::get('success') }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- {{-- error message --}} -->
    @if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error :</strong> {{ Session::get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- content --}}
    <div class="content">
        @yield('content')
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Sign Up</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form id="registrationForm" action="{{ route('reg_user'); }}" class="authform" method="post">
                @csrf
                <input type="text" name="name" class="form-control my-1" placeholder="Name">
                <input type="email" name="email" class="form-control my-1" placeholder="Email">
                <input type="password" name="password" class="form-control my-1" placeholder="Passowrd">
                <input type="password" name="confirm_password" class="form-control my-1" placeholder="Confirm Passowrd">
                <div id="errorContainer"></div>
                <button type="button" id="submitBtn" class="loginBtns_primary my-1">sign up</button>
            </form>
            <p class=" my-1">Already have an account ?</p>
            <a href="#" class="loginBtns_inverted my-1">Sign up with Google</a>
            <a href="#" class="loginBtns_inverted my-1">Sign up with Facebook</a>
        </div>
    </div>

    {{-- footer --}}
    <div class="footer">
        <div class="footer_container_main">
            <div class="content_container_footer">
                <span class="desktop_copyrights">Copyright © 2023 Matrix®. All rights reserved.</span>
            </div>
            <span class="mobile_copyrights">Copyright © 2023 Matrix®. All rights reserved.</span>
        </div>
    </div>

    <!-- izitoast -->
    <script src="iziToast.min.js" type="text/javascript"></script>

    <!-- user registration -->
    <script>
        $(document).ready(function() {
            $('#submitBtn').on('click', function(e) {
                e.preventDefault();
                $('#errorContainer').html('');
                var formData = $('#registrationForm').serialize();

                $.ajax({
                    type: 'POST',
                    url: '{{ route("reg_user") }}',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            window.location.href = '/portfolio';
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;

                            $.each(errors, function(key, value) {
                                $('#errorContainer').append('<p>' + value[0] + '</p>');
                            });
                        } else {
                            $('#errorContainer').html('<p>Error Occured</p>');
                        }
                    }
                });
            });
        });
    </script>

    <!-- general scripts -->
    <script>
        // when serivices button click scroll services section
        document.addEventListener('DOMContentLoaded', function() {
            const scrollButton = document.getElementById('scrollButton');

            if (scrollButton) {
                scrollButton.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('data-target');
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start', // or 'end', 'center', 'nearest'
                            inline: 'nearest', // or 'start', 'end', 'center', 'nearest'
                            duration: 5000
                        });
                    }
                });
            }
        });

        // this is for home page dropdown
        const questions = document.querySelectorAll(".question");

        questions.forEach((element) => {
            element.addEventListener("click", () => {
                const nextBox = element.nextElementSibling;
                const icons = element.querySelector(".icon");

                icons.style.transition = "0.5s linear";

                if (nextBox.classList.contains("active")) {
                    nextBox.classList.remove("active");
                    icons.style.transform = "rotate(0deg)";
                } else {
                    document
                        .querySelectorAll(".answer.active")
                        .forEach((nextBox) => nextBox.classList.remove("active"));
                    document
                        .querySelectorAll(".icon")
                        .forEach((normal) => (normal.style.transform = "rotate(0deg)"));

                    icons.style.transform = "rotate(180deg)";
                    nextBox.classList.add("active");
                }
            });
        });

        function animateIntersections(className) {
            const elementToAnimate = document.querySelectorAll(className)

            function handleIntersection(entries, observer) {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const block = entry.target;
                        const delay = block.getAttribute('data-delay');
                        setTimeout(() => {
                            block.classList.add('in-viewport');
                            setTimeout(() => {
                                block.classList.add('loaded');
                            }, 1000);
                        }, delay);

                        observer.unobserve(block);
                    }
                });
            }

            const options = {
                root: null,
                threshold: 0.1,
            };
            const observer = new IntersectionObserver(handleIntersection, options);

            elementToAnimate.forEach((block) => {
                observer.observe(block);
            });
        }
        animateIntersections('.animationsGlobal_Herizontal_left');
        animateIntersections('.animationsGlobal_Herizontal_right');
        animateIntersections('.animationsGlobal_Vertical');


        // this is for about counter
        function extractNumericValue(text) {
            const match = text.match(/[0-9.,]+/);
            return match ? parseFloat(match[0].replace(',', '')) : 0;
        }

        function animateCounter(element) {
            var countTo = extractNumericValue($(element).text());

            $({
                countNum: 0
            }).animate({
                countNum: countTo
            }, {
                duration: 3000,
                easing: 'linear',
                step: function() {
                    $(element).text(Math.floor(this.countNum));
                },
                complete: function() {
                    $(element).text(this.countNum);
                }
            });
        }

        const counterSection = document.querySelector('.counter');
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    $('.counting').each(function() {
                        animateCounter(this);
                    });

                    observer.unobserve(counterSection);
                }
            });
        }, {
            threshold: 0.5
        });

        observer.observe(counterSection);
    </script>

    <!-- boostrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.js"></script>
</body>

</html>