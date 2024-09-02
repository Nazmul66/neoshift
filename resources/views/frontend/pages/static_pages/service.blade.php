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
                            <h1>Services</h1>
                            <ul class="breadcrumb_list">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a type="button">/</a>
                                </li>
                                <li>
                                    <a href="javascript::void()">Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
       </section>
    <!-- Breadcrumb section end -->


    {{-- <!-- Service section start -->
        <div class="service_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service_title">
                            <h5>Our Services</h5>
                            <h2>Explore Our Data</h2>
                            <span>Services</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service_detail">
                            <div class="service_icon">
                                <i class="ri-line-chart-fill"></i>
                            </div>

                            <div class="service_content">
                                <h3>Data Data Consulting</h3>
                                <p>Data Analytics is the only open and interactive cloud platform for data engineers and analysts to collaboratively  cloud platform for.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service_detail">
                            <div class="service_icon">
                                <i class="ri-line-chart-fill"></i>
                            </div>

                            <div class="service_content">
                                <h3>Data Data Consulting</h3>
                                <p>Data Analytics is the only open and interactive cloud platform for data engineers and analysts to collaboratively  cloud platform for.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service_detail">
                            <div class="service_icon">
                                <i class="ri-line-chart-fill"></i>
                            </div>

                            <div class="service_content">
                                <h3>Data Data Consulting</h3>
                                <p>Data Analytics is the only open and interactive cloud platform for data engineers and analysts to collaboratively  cloud platform for.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service_detail">
                            <div class="service_icon">
                                <i class="ri-line-chart-fill"></i>
                            </div>

                            <div class="service_content">
                                <h3>Data Data Consulting</h3>
                                <p>Data Analytics is the only open and interactive cloud platform for data engineers and analysts to collaboratively  cloud platform for.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service_detail">
                            <div class="service_icon">
                                <i class="ri-line-chart-fill"></i>
                            </div>

                            <div class="service_content">
                                <h3>Data Data Consulting</h3>
                                <p>Data Analytics is the only open and interactive cloud platform for data engineers and analysts to collaboratively  cloud platform for.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service_detail">
                            <div class="service_icon">
                                <i class="ri-line-chart-fill"></i>
                            </div>

                            <div class="service_content">
                                <h3>Data Data Consulting</h3>
                                <p>Data Analytics is the only open and interactive cloud platform for data engineers and analysts to collaboratively  cloud platform for.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <!-- Service section end -->


    <!-- Technology section start [Done] -->
    <section class="technology_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="technology_title">
                        <h5>Technologies</h5>
                        <h2>Our technologies</h2>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="technology_images">
                        <img src="{{ asset('public/frontend/assets/images/technology1.png') }}" alt="">
                        <h3>Power Bi</h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="technology_images">
                        <img src="{{ asset('public/frontend/assets/images/technology1.png') }}" alt="">
                        <h3>Tableau</h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="technology_images">
                        <img src="{{ asset('public/frontend/assets/images/technology1.png') }}" alt="">
                        <h3>Python/R</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Technology section end --> --}}


    <!-- Testimonial section start -->
        <section class="testimonial_section" style="margin-top: 40px;">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="testimonial_title">
                                <h5>Testimonials</h5>
                                <h2>What Client Says</h2>
                            </div>
                        </div>

                        <div class="owl-carousel owl-theme" id="testimonialSlider">
                            <div class="testimonial_content">
                                <div class="testimonial_description">
                                    <p>Sed vehicula vulputate lectus et molestie. Praesent sed erat vel lorem volutpat tempus tempus non dolor. Suspendisse ullamcorper finibus neque.</p>
                                    <div class="testimonial_ratings">
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bx-star' ></i>
                                    </div>
                                </div>

                                <div class="testimonial_user_content">
                                    <img src="{{ asset('public/frontend/assets/images/review-3.png') }}" alt="">
                                    <div class="testimonial_user_title">
                                        <h3>Courtney Henry</h3>
                                        <p>Nursing Assistant</p>
                                    </div>
                                </div>
                            </div>


                            <div class="testimonial_content">
                                <div class="testimonial_description">
                                    <p>Sed vehicula vulputate lectus et molestie. Praesent sed erat vel lorem volutpat tempus tempus non dolor. Suspendisse ullamcorper finibus neque.</p>
                                    <div class="testimonial_ratings">
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bx-star' ></i>
                                    </div>
                                </div>

                                <div class="testimonial_user_content">
                                    <img src="{{ asset('public/frontend/assets/images/review-1.png') }}" alt="">
                                    <div class="testimonial_user_title">
                                        <h3>Courtney Henry</h3>
                                        <p>Nursing Assistant</p>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial_content">
                                <div class="testimonial_description">
                                    <p>Sed vehicula vulputate lectus et molestie. Praesent sed erat vel lorem volutpat tempus tempus non dolor. Suspendisse ullamcorper finibus neque.</p>
                                    <div class="testimonial_ratings">
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bxs-star' ></i>
                                        <i class='bx bx-star' ></i>
                                    </div>
                                </div>

                                <div class="testimonial_user_content">
                                    <img src="{{ asset('public/frontend/assets/images/review-2.png') }}" alt="">
                                    <div class="testimonial_user_title">
                                        <h3>Courtney Henry</h3>
                                        <p>Nursing Assistant</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    <!-- Testimonial section end -->


    <!-- Video section start -->
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

@endsection

@push('add-js')

<script>
    $('#testimonialSlider').owlCarousel({
        loop: true,
        margin: 50,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            769: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
</script>

@endpush
