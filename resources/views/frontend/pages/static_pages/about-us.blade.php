@extends('frontend.layout.master')

@push('meta-title')

@endpush

@push('add-css')

@endpush


@section('body-content')


    <!-- Breadcrumb section start -->
       <section class="breadcrumb_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_content">
                            <h1>About Us</h1>
                            <ul class="breadcrumb_list">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a type="button">/</a>
                                </li>
                                <li>
                                    <a href="javascript::void()">About Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
       </section>
    <!-- Breadcrumb section end -->


    <!-- About section start [Done] -->
        <section class="about_section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 ">
                        <div class="about_image">
                            <img src="{{ asset('public/frontend/assets/images/about.png') }}" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6 ">
                        <div class="about_detail">
                            <h5>About Us</h5>
                            <h2>Transform your data. Transform your business.</h2>

                            <div class="about_description_container">
                                <p>Sed eget pulvinar orci, sit amet vestibulum tellus. Quisque semper sem vel sagittis facilisis. Donec at facilisis risus. Curabitur porttitor ex id blandit vulputate. Donec vulputate eleifend mauris. In commodo elementum turpis, accumsan commodo magn</p>

                                <ul>
                                    <li>Sed eget pulvinar orci, sit amet vestibulum tellus.</li>
                                    <li>Sed eget pulvinar orci, sit amet vestibulum tellus.</li>
                                    <li>Sed eget pulvinar orci, sit amet vestibulum tellus.</li>
                                    <li>Sed eget pulvinar orci, sit amet vestibulum tellus.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- About section end -->


    <!-- Video section start [Done] -->
        <section class="video_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="video-setup">
                            <h1>Our Most Recent Data Analytics Strategy Story</h1>
                            <div class="video-play">
                                <button class="video_btn">
                                    <i class='bx bxs-right-arrow'></i>
                                </button>
                            </div>

                            <div class="popup_video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/jYuAmonOUvU?si=Y0T-s84MplUoObyO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                                <div class="video_close">
                                    <i class='bx bx-x'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Video section end -->


    <!-- Counter section start [Done] -->
    <section class="counter_section">
        <div class="container">
            <div class="row">
                <div class="counter_contents">
                    <div class="counter_title">
                        <h1>500</h1>
                        <p>+ Project Done</p>
                    </div>

                    <div class="counter_title">
                        <h1>150</h1>
                        <p>+ Cup Of Tea</p>
                    </div>

                    <div class="counter_title">
                        <h1>120</h1>
                        <p>+ Total Employee</p>
                    </div>

                    <div class="counter_title">
                        <h1>50</h1>
                        <p>+ Win Awards</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter section end -->


    <!-- Team section start [Done] -->
    <section class="team_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-l2">
                    <div class="col-lg-12">
                        <div class="team_title">
                            <h5>Team</h5>
                            <h2>Meet Our Team</h2>
                        </div>
                    </div>

                    <div class="owl-carousel owl-theme" id="teamSlider">
                        <div class="team_details">
                            <img src="{{ asset('public/frontend/assets/images/team-1.png') }}" alt="">

                            <div class="team_content">
                                <h2>Olivia Rhye</h2>
                                <h5>Founder & CEO</h5>
                                <p>Former co-founder of Opendoor. Early staff at Spotify and Clearbit.</p>

                                <ul class="team_social">
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="team_details">
                            <img src="{{ asset('public/frontend/assets/images/team-2.png') }}" alt="">

                            <div class="team_content">
                                <h2>Olivia Rhye</h2>
                                <h5>Founder & CEO</h5>
                                <p>Former co-founder of Opendoor. Early staff at Spotify and Clearbit.</p>

                                <ul class="team_social">
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="team_details">
                            <img src="{{ asset('public/frontend/assets/images/team-3.png') }}" alt="">

                            <div class="team_content">
                                <h2>Olivia Rhye</h2>
                                <h5>Founder & CEO</h5>
                                <p>Former co-founder of Opendoor. Early staff at Spotify and Clearbit.</p>

                                <ul class="team_social">
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="team_details">
                            <img src="{{ asset('public/frontend/assets/images/team-1.png') }}" alt="">

                            <div class="team_content">
                                <h2>Olivia Rhye</h2>
                                <h5>Founder & CEO</h5>
                                <p>Former co-founder of Opendoor. Early staff at Spotify and Clearbit.</p>

                                <ul class="team_social">
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="team_details">
                            <img src="{{ asset('public/frontend/assets/images/team-2.png') }}" alt="">

                            <div class="team_content">
                                <h2>Olivia Rhye</h2>
                                <h5>Founder & CEO</h5>
                                <p>Former co-founder of Opendoor. Early staff at Spotify and Clearbit.</p>

                                <ul class="team_social">
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
    <!-- Team section end -->

@endsection


@push('add-js')

<script>
    $('#teamSlider').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        navText: ["<i class='bx bx-chevron-left' ></i>" , "<i class='bx bx-chevron-right'></i>"],
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                margin: 30,
                items: 1
            },
            577: {
                margin: 10,
                items: 2
            },
            769: {
                items: 2
            },
            993: {
                items: 3
            },
        }
    });
</script>

@endpush
