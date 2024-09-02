@extends('frontend.layout.master')

@push('meta-title')

@endpush

@push('add-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush


@section('body-content')

    <!-- Banner section start -->
    <section class="banner_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                   <div class="banner_content">
                       <h5>Data Analysis Agency</h5>
                       <h2><strong>Data Science</strong> & Data Analysis Agency</h2>
                       <p>Holisticly procrastinate mission-critical convergence with reliable customer service. Assertively underwhelm idea-sharing for impactful solutions.</p>

                       <div class="banner_action">
                            <a href="">Learn More</a>

                            <div class="banner_watch_video">
                                <i class="bx bxs-right-arrow"></i>
                                <span>Watch Video</span>
                            </div>

                             <!-- PopUp Video -->
                            <div class="banner_popup_video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/jYuAmonOUvU?si=Y0T-s84MplUoObyO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                                <div class="banner_video_close">
                                    <i class='bx bx-x'></i>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>

                <div class="col-lg-6">
                    <div class="banner_img">
                        <img src="{{ asset('public/frontend/assets/images/banner-img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
       </section>
    <!-- Banner section end -->


    {{-- <!-- Schedule section start -->
      <section class="schedule_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-sm-2 order-md-2 order-lg-1">
                  <div class="schedual_meeting_img">
                     <img src="{{ asset('public/frontend/assets/images/schedule_meeting.png') }}" alt="">
                  </div>
                </div>

                <div class="col-lg-6 offset-lg-1 order-1 order-sm-1 order-md-1 order-lg-2">
                    <div class="contact_form">
                        <div class="schedule_title">
                            <h5>Schedule</h5>
                            <h2>Schedule Meeting</h2>
                        </div>

                        <form action="">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form_data">
                                        <input type="text" name="name" class="form_control" id="name" placeholder="Full Name....">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form_data">
                                        <input type="text" name="phone" class="form_control" id="phone" placeholder="Mobile Phone....">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form_data">
                                        <input type="email" name="email" class="form_control" id="email" placeholder="Email Address....">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form_data">
                                        <input type="text" name="company_name" class="form_control" id="company_name" placeholder="Company Name....">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form_data">
                                        <input type="datetime-local" class="form_control" id="datetimepicker" name="date_time" placeholder="Select Date & Time....">
                                    </div>
                                </div>

                                <button type="submit" class="contact_buttons">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </section>
    <!-- Schedule section start --> --}}


    {{-- <!-- Category section start -->
    <section class="category_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="category_title">
                        <h5>Category</h5>
                        <h2>Our Service Category</h2>
                    </div>
                </div>

                <div class="owl-carousel owl-theme" id="categorySlider">
                    <div class="category_details">
                        <div class="category_img">
                            <img src="{{ asset('public/frontend/assets/images/category-1.png') }}" alt="">
                        </div>
                        <h3>Data mining</h3>
                    </div>
                    <div class="category_details">
                        <div class="category_img">
                            <img src="{{ asset('public/frontend/assets/images/category-1.png') }}" alt="">
                        </div>
                        <h3>Data mining</h3>
                    </div>
                    <div class="category_details">
                        <div class="category_img">
                            <img src="{{ asset('public/frontend/assets/images/category-1.png') }}" alt="">
                        </div>
                        <h3>Data mining</h3>
                    </div>
                    <div class="category_details">
                        <div class="category_img">
                            <img src="{{ asset('public/frontend/assets/images/category-1.png') }}" alt="">
                        </div>
                        <h3>Data mining</h3>
                    </div>
                    <div class="category_details">
                        <div class="category_img">
                            <img src="{{ asset('public/frontend/assets/images/category-1.png') }}" alt="">
                        </div>
                        <h3>Data mining</h3>
                    </div>
                    <div class="category_details">
                        <div class="category_img">
                            <img src="{{ asset('public/frontend/assets/images/category-1.png') }}" alt="">
                        </div>
                        <h3>Data mining</h3>
                    </div>
                    <div class="category_details">
                        <div class="category_img">
                            <img src="{{ asset('public/frontend/assets/images/category-1.png') }}" alt="">
                        </div>
                        <h3>Data mining</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category section end -->


    <!-- Service section start -->
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
   <!-- Service section end --> --}}


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


   <!-- Counter section start -->
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


   <!-- Portfolio Section Start -->
        <section class="portfolio_section">
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio_title">
                        <h5>Portfolio</h5>
                        <h2>Work Portfolio</h2>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="portfolio_menu">
                        <ul>
                            <li class="menu_listing active_portfolio"><i class='bx bx-store-alt'></i> E-commerce</li>
                            <li class="menu_listing"><i class='bx bxs-business'></i> Real-Estate</li>
                            <li class="menu_listing"><i class='bx bxs-bar-chart-alt-2'></i> Corporate</li>
                            <li class="menu_listing"><i class='bx bxs-plane-alt'></i> Travel Agency</li>
                        </ul>
                    </div>

                    <div class="portfolio_show">
                        <div class="portfolio_container active_portfolio">
                            <div class="portfolio_showcase">
                                <div class="portfolio_image">
                                    <img src="{{ asset('public/frontend/assets/images/portfolio-1.png') }}" alt="">
                                    <div class="portfolio_overlay">
                                        <a class="portfolio_link" href=""><i class='bx bx-link-alt'></i></a>
                                    </div>
                                </div>

                                <h3>Tuning into user behaviors with analytics</h3>
                            </div>

                            <div class="portfolio_showcase">
                                <div class="portfolio_image">
                                    <img src="{{ asset('public/frontend/assets/images/portfolio-1.png') }}" alt="">
                                    <div class="portfolio_overlay">
                                        <a class="portfolio_link" href=""><i class='bx bx-link-alt'></i></a>
                                    </div>
                                </div>

                                <h3>Tuning into user behaviors with analytics</h3>
                            </div>

                            <div class="portfolio_showcase">
                                <div class="portfolio_image">
                                    <img src="{{ asset('public/frontend/assets/images/portfolio-1.png') }}" alt="">
                                    <div class="portfolio_overlay">
                                        <a class="portfolio_link" href=""><i class='bx bx-link-alt'></i></a>
                                    </div>
                                </div>

                                <h3>Tuning into user behaviors with analytics</h3>
                            </div>
                        </div>

                        <div class="portfolio_container">
                            <div class="portfolio_showcase">
                                <div class="portfolio_image">
                                    <img src="{{ asset('public/frontend/assets/images/portfolio-1.png') }}" alt="">
                                    <div class="portfolio_overlay">
                                        <a class="portfolio_link" href=""><i class='bx bx-link-alt'></i></a>
                                    </div>
                                </div>

                                <h3>Tuning into user behaviors with analytics</h3>
                            </div>

                            <div class="portfolio_showcase">
                                <div class="portfolio_image">
                                    <img src="{{ asset('public/frontend/assets/images/portfolio-1.png') }}" alt="">
                                    <div class="portfolio_overlay">
                                        <a class="portfolio_link" href=""><i class='bx bx-link-alt'></i></a>
                                    </div>
                                </div>

                                <h3>Tuning into user behaviors with analytics</h3>
                            </div>
                        </div>

                        <div class="portfolio_container">
                            <div class="portfolio_showcase">
                                <div class="portfolio_image">
                                    <img src="{{ asset('public/frontend/assets/images/portfolio-1.png') }}" alt="">
                                    <div class="portfolio_overlay">
                                        <a class="portfolio_link" href=""><i class='bx bx-link-alt'></i></a>
                                    </div>
                                </div>

                                <h3>Tuning into user behaviors with analytics</h3>
                            </div>
                        </div>

                        <div class="portfolio_container">
                            <div class="portfolio_showcase">
                                <div class="portfolio_image">
                                    <img src="{{ asset('public/frontend/assets/images/portfolio-1.png') }}" alt="">
                                    <div class="portfolio_overlay">
                                        <a class="portfolio_link" href=""><i class='bx bx-link-alt'></i></a>
                                    </div>
                                </div>

                                <h3>Tuning into user behaviors with analytics</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>
    <!-- Portfolio Section end -->


    {{-- <!-- Technology section start -->
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


    {{-- <!-- Faq section start -->
      <section class="faq_section">
          <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq_title">
                        <h5>FAQ</h5>
                        <h2>Any Questions? Find Here.</h2>
                    </div>

                    <div class="col-lg-10 offset-lg-1">

                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Mauris iaculis, leo ut malesuada sodales ?
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   <p>It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS</p>
                                </div>
                              </div>
                            </div>


                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  ADuis quis suscipit justo. Sed ac tempor ?
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   <p>It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Fusce nec tortor massa ed efficitur neque ?
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   <p>It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS</p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
          </div>
      </section>
    <!-- Faq section end --> --}}


    <!-- Testimonial section start -->
       <section class="testimonial_section">
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


    <!-- Team section start -->
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


    {{-- <!-- Call-to-action section start -->
        <section class="cta_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="action-content">
                            <h1>Unlock Your Potential Today</h1>

                            <div class="action-hook">
                                <a class="call_btn" href="http://">Request a Quote <i class="fa-solid fa-arrow-right"></i></a>

                                <div class="call-action">
                                    <i class="fa-solid fa-phone"></i>

                                    <div class="call-action-titles">
                                        <span>Make a Call</span>
                                        <a class="" href="tel:01868512081">01868512081</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Call-to-action section end --> --}}

    <!-- About section start -->
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


    <!-- Blog section start -->
       <section class="blog_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog_title">
                            <h5>Blog</h5>
                            <h2>Inside Story & Blog</h2>
                        </div>
                    </div>

                    <div class="owl-carousel owl-theme" id="blogSlider">
                        <div class="blog_details">
                            <div class="blog_img">
                                <img src="{{ asset('public/frontend/assets/images/blog-1.png') }}" alt="">

                                <div class="view_stack">
                                    <div class="view_stack_content">
                                        <i class='bx bx-message-square-detail' ></i>
                                        <span>16 June</span>
                                    </div>

                                    <div class="view_stack_content">
                                        <i class="fa-solid fa-eye"></i>
                                        <span>54</span>
                                    </div>

                                    <div class="view_stack_content">
                                        <i class='bx bx-calendar' ></i>
                                        <span>1.9k</span>
                                    </div>
                                </div>
                            </div>

                            <div class="blog_content">
                               <h2>The power product and the quotient rules</h2>
                               <p>Donec blandit hendrerit erat nec pretium. Pellentesque scelerisque tortor turpis.</p>
                               <div class="hr"></div>

                               <div class="blog_user_content">
                                   <img src="{{ asset('public/frontend/assets/images/user-1.png') }}" alt="">

                                   <div class="blog_user_title">
                                        <h2>antixidant</h2>
                                        <p>Health & Food</p>
                                   </div>
                               </div>
                            </div>
                        </div>

                        <div class="blog_details">
                            <div class="blog_img">
                                <img src="{{ asset('public/frontend/assets/images/blog-2.png') }}" alt="">

                                <div class="view_stack">
                                    <div class="view_stack_content">
                                        <i class='bx bx-message-square-detail' ></i>
                                        <span>16 June</span>
                                    </div>

                                    <div class="view_stack_content">
                                        <i class="fa-solid fa-eye"></i>
                                        <span>54</span>
                                    </div>

                                    <div class="view_stack_content">
                                        <i class='bx bx-calendar' ></i>
                                        <span>1.9k</span>
                                    </div>
                                </div>
                            </div>

                            <div class="blog_content">
                               <h2>The power product and the quotient rules</h2>
                               <p>Donec blandit hendrerit erat nec pretium. Pellentesque scelerisque tortor turpis.</p>
                               <div class="hr"></div>

                               <div class="blog_user_content">
                                   <img src="{{ asset('public/frontend/assets/images/user-2.png') }}" alt="">

                                   <div class="blog_user_title">
                                        <h2>antixidant</h2>
                                        <p>Health & Food</p>
                                   </div>
                               </div>
                            </div>
                        </div>

                        <div class="blog_details">
                            <div class="blog_img">
                                <img src="{{ asset('public/frontend/assets/images/blog-3.png') }}" alt="">

                                <div class="view_stack">
                                    <div class="view_stack_content">
                                        <i class='bx bx-message-square-detail' ></i>
                                        <span>16 June</span>
                                    </div>

                                    <div class="view_stack_content">
                                        <i class="fa-solid fa-eye"></i>
                                        <span>54</span>
                                    </div>

                                    <div class="view_stack_content">
                                        <i class='bx bx-calendar' ></i>
                                        <span>1.9k</span>
                                    </div>
                                </div>
                            </div>

                            <div class="blog_content">
                               <h2>The power product and the quotient rules</h2>
                               <p>Donec blandit hendrerit erat nec pretium. Pellentesque scelerisque tortor turpis.</p>
                               <div class="hr"></div>

                               <div class="blog_user_content">
                                   <img src="{{ asset('public/frontend/assets/images/user-3.png') }}" alt="">

                                   <div class="blog_user_title">
                                        <h2>antixidant</h2>
                                        <p>Health & Food</p>
                                   </div>
                               </div>
                            </div>
                        </div>

                        <div class="blog_details">
                            <div class="blog_img">
                                <img src="{{ asset('public/frontend/assets/images/blog-1.png') }}" alt="">

                                <div class="view_stack">
                                    <div class="view_stack_content">
                                        <i class='bx bx-message-square-detail' ></i>
                                        <span>16 June</span>
                                    </div>

                                    <div class="view_stack_content">
                                        <i class="fa-solid fa-eye"></i>
                                        <span>54</span>
                                    </div>

                                    <div class="view_stack_content">
                                        <i class='bx bx-calendar' ></i>
                                        <span>1.9k</span>
                                    </div>
                                </div>
                            </div>

                            <div class="blog_content">
                               <h2>The power product and the quotient rules</h2>
                               <p>Donec blandit hendrerit erat nec pretium. Pellentesque scelerisque tortor turpis.</p>
                               <div class="hr"></div>

                               <div class="blog_user_content">
                                   <img src="{{ asset('public/frontend/assets/images/user-1.png') }}" alt="">

                                   <div class="blog_user_title">
                                        <h2>antixidant</h2>
                                        <p>Health & Food</p>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </section>
    <!-- Blog section end -->

@endsection


@push('add-js')

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    flatpickr("#datetimepicker", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        // minDate: "today",
        // maxDate: new Date().fp_incr(14)
    });
</script>
@endpush
