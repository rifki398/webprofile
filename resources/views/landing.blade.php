@extends('layout.main')
@section('title','Home')

@section('content')
<!-- Owl Carousel-->
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
<!---->
<section class="container-fluid bg-light position-relative" id="first-section">
    <div class="position-absolute top-50 start-50 translate-middle" id="welcome">
        <div class="position-absolute top-50 start-50 translate-middle"
            style="width:60%;">
            <div style="margin-bottom:20px;">
                <span class="d-flex justify-content-center align-items-center font-serif text-white fs-1 text">
                    Hi, I'm Rifqy
                </span>
            </div>
            <div class="d-flex justify-content-center" style="height:10vh; margin-top:30px;" id="role">
                <div style="text-align:center;">
                    <span class="font-serif text-white fs-1 text">I'm a</span>
                </div>
                <div>
                    <ul class="dynamic-txt text-warning">
                        <li><span class="fs-1 text">Electrical Engineering</span></li>
                        <li><span class="fs-1 text">Front-end Engineering</span></li>
                        <li><span class="fs-1 text">Physics Student</span></li>
                        <!-- Double It-->
                        <li><span class="fs-1 text">Electrical Engineering</span></li>
                        <li><span class="fs-1 text">Front-end Engineering</span></li>
                        <li><span class="fs-1 text">Physics Student</span></li>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-center" style="margin-top: 45px">
                <a href="{{'/about'}}" class="a-check"><span class="span-check fs-2 text">Check My Profile!</span></a>
            </div>
        </div>
    </div>
</section>
<section id="second-section">
    <div class="owl-carousel owl-theme">
        <div class="slide slide-1">
            <div class="slide-content d-flex flex-column justify-content-center align-items-center">
                <h1>IT Portfolio</h1>
                <p>Contains some experience like training and projects. Some activity implemented online.
                    Some projects are individual project for exam, hobby, etc. This Website is one of those
                    projects. A lot of my role at those projects as a front-end engineering.
                </p>
                <button class="btn btn-outline-light">Check it!</button>
            </div>
        </div>
        <div class="slide slide-2">
            <div class="slide-content">
                <h1>Instrument Portfolio</h1>
                <p>Contain some experience</p>
                <button class="btn btn-outline-light">Check it!</button>
            </div>
        </div>
        <div class="slide slide-3">
            <div class="slide-content">
                <h1>Other Portfolio</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Quis varius quam quisque id diam vel
                    quam. Mauris vitae ultricies leo integer malesuada nunc vel risus commodo.</p>
                <button class="btn btn-outline-light">Check it!</button>
            </div>
        </div>
    </div>
</section>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer">
</script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items:1,
            loop:true,
            dots:false,
            nav:true,
            autoplay:true,
            autoplaySpeed:1000,
            smartSpeed:1500,
            autoplayHoverPause:true
        });
    });
</script>
<!---->
@endsection