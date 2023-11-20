<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matrix</title>
    <link rel="icon" href="{{ asset('img/Logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/6e8a2ac668.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-HS6r7ie0J5yfnjJIGT+E0spXaJhGFBV3OviCvB9eWR/hPX5kD2ikOhOww3OjcvLp/JdMnjmtz/GVXoy/ANwjJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-GvkJ1TyTBkXwqfKxG2l3mKF6G4Lp1X7IzViC8X+zhrngR9vD2Ij2KDMt+GzQMc66yKuK6Lb8LE1vjXDvIuwhXw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    {{-- header --}}
    <div class="navbar">
        <div class="navContentWrapper">
            <div class="img">
                <img src="{{ asset('img/Logo.png') }}" alt="Matrix Logo">
            </div>
            <div class="nav_text">
                <span class="pages">Home</span>
                <span class="pages">About Us</span>
                <span class="pages">Portfolio</span>
                <span class="call">Schedule a Call</span>
                <span class="menu">
                    <i class="fa-solid fa-bars"></i>
                </span>
            </div>
        </div>
    </div>
    {{-- content --}}
    <div class="content">
        @yield('content')
    </div>

    {{-- footer --}}
    <div class="footer">
        <div class="logo">
            <img src="{{ asset('img/Logo.png') }}" alt="Matrix Logo">
        </div>
        <div class="content_container">
            <span class="content">Matrix is where your imagination and our expertise converge to create design solutions
                that elevate your brand and set you apart from the competition.</span>
            <span class="email">hello@matrix.com</span>
            <span class="number">+1-800-123 4567</span>
            <span class="content">Copyright © 2023 Matrix®. All rights reserved.</span>
        </div>
        <div class="abouts">
            <div class="pages">
                <span>Home</span>
                <span>Services</span>
                <span>Portfolio</span>
                <span>Schedule a Call</span>
            </div>
            <div class="platforms">
                <span>Facebook</span>
                <span>Twitter</span>
                <span>LinkedIn</span>
                <span>Instergram</span>
                <span>Dribble</span>
            </div>
        </div>
    </div>

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


        // this is for home page testimonial animation
        document.addEventListener('DOMContentLoaded', function() {
            var boxes = document.querySelectorAll('.content');

            // Function to add animation class when scrolled
            function handleScroll() {
                boxes.forEach(function(box) {
                    var boxTop = box.offsetTop;
                    var scrollPosition = window.scrollY;

                    if (scrollPosition > boxTop - window.innerHeight) {
                        box.classList.add('animate-up');
                    } else {
                        box.classList.remove('animate-up');
                    }
                });
            }

            // Listen for scroll events
            window.addEventListener('scroll', handleScroll);
        });
    </script>
</body>

</html>