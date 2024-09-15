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
                       <h5>{{ $banner->title }}</h5>
                       {!! $banner->main_title !!}
                       <p>{{ $banner->description }}</p>

                       <div class="banner_action">
                            <a href="{{ $banner->url }}">Explore Products</a>

                            <div class="banner_watch_video">
                                <i class="bx bxs-right-arrow"></i>
                                <span>Watch Video</span>
                            </div>

                             <!-- PopUp Video -->
                            <div class="banner_popup_video">
                                {!! $banner->youtube_video !!}

                                <div class="banner_video_close">
                                    <i class='bx bx-x'></i>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>

                <div class="col-lg-6">
                    <div class="banner_img">
                        <img src="{{ $banner->image }}" alt="">
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
                        <h1>{{ $counter->main_title }}</h1>
                        <div class="video-play">
                            <button class="video_btn">
                                <i class='bx bxs-right-arrow'></i>
                            </button>
                        </div>

                        <div class="popup_video">
                            {!! $counter->youtube_video !!}

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
                      <h1>{{ $counter->project_count }}</h1>
                      <p>+ {{ $counter->project_title }}</p>
                  </div>

                  <div class="counter_title">
                    <h1>{{ $counter->option_count }}</h1>
                    <p>+ {{ $counter->option_title }}</p>
                  </div>

                   <div class="counter_title">
                       <h1>{{ $counter->employee_count }}</h1>
                       <p>+ {{ $counter->employee_title }}</p>
                   </div>

                   <div class="counter_title">
                       <h1>{{ $counter->award_count }}</h1>
                       <p>+ {{ $counter->award_title }}</p>
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
                        {{-- <h5>Portfolio</h5> --}}
                        <h2>Products We Serve</h2>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="portfolio_menu">
                        <ul>
                            @foreach ($portfolioCategories as $row => $item)
                                <li class="menu_listing {{ $row == 0 ? 'active_portfolio' : '' }}" data-id={{ $item->id }}>
                                    <i class='{{ $item->category_icon }}'></i>
                                    {{ $item->category_name }}
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="portfolio_show">
                        {{-- Fetch All Data --}}
                        <div class="portfolio_container">

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

                        @foreach ($testimonials as $row)
                            <div class="testimonial_content">
                                <div class="testimonial_description">
                                    <p>{{ $row->description }}</p>
                                    <div class="testimonial_ratings">
                                        @if ( $row->review_ratings == 3 )
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bx-star' ></i>
                                          <i class='bx bx-star' ></i>
                                        @elseif ( $row->review_ratings == 4 )
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bx-star' ></i>
                                        @elseif ( $row->review_ratings == 5 )
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                          <i class='bx bxs-star' ></i>
                                        @endif
                                    </div>
                                </div>

                                <div class="testimonial_user_content">
                                    <img src="{{ asset( $row->image ) }}" alt="">
                                    <div class="testimonial_user_title">
                                        <h3>{{ $row->name }}</h3>
                                        <p>{{ $row->position }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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

                        @foreach ($teams as $row)
                            <div class="team_details">
                                <img src="{{ asset($row->image) }}" alt="">

                                <div class="team_content">
                                    <h2>{{ $row->name }}</h2>
                                    <h5>{{ $row->position }}</h5>
                                    <p>{{ $row->description	 }}</p>

                                    <ul class="team_social">
                                        <li>
                                            <a href="{{ $row->twitter }}">
                                                <i class="fa-brands fa-x-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $row->facebook }}">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $row->instagram }}">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ $row->linkedin }}">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach

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
                            <img src="{{ asset($about->image) }}" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6 ">
                        <div class="about_detail">
                            <h5>{{ $about->title }}</h5>
                            <h2>{{ $about->main_title }}</h2>

                            <div class="about_description_container">
                                {!! $about->description !!}
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

                        @foreach ($blogs as $row)
                            <div class="blog_details">
                                <div class="blog_img">
                                    <img src="{{ asset($row->image) }}" alt="">

                                    <div class="view_stack">
                                        <div class="view_stack_content">
                                            <i class='bx bx-message-square-detail' ></i>
                                            <span>{{ $row->date_time }}</span>
                                        </div>

                                        <div class="view_stack_content">
                                            <i class="fa-solid fa-eye"></i>
                                            <span>{{ $row->view }}</span>
                                        </div>
                                        {{--  <div class="view_stack_content">
                                            <i class='bx bx-calendar' ></i>
                                            <span>1.9k</span>
                                        </div> --}}
                                    </div>
                                </div>

                                <div class="blog_content">
                                <h2>{{ $row->title }}</h2>
                                <p>{{ $row->description }}</p>
                                {{-- <div class="hr"></div>

                                <div class="blog_user_content">
                                    <img src="{{ asset('public/frontend/assets/images/user-1.png') }}" alt="">

                                    <div class="blog_user_title">
                                            <h2>antixidant</h2>
                                            <p>Health & Food</p>
                                    </div>
                                </div> --}}
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
       </section>
    <!-- Blog section end -->

@endsection


@push('add-js')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.menu_listing');

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                tabs.forEach(tab => tab.classList.remove('active_portfolio'));

                this.classList.add('active_portfolio');
                fetchData($(this).attr('data-id')); // Fetch data when tab is clicked
            });
        });

        // Function to fetch and display data based on the provided ID
        function fetchData(id) {
            $.ajax({
                type: "GET",
                url: "{{ url('admin/portfolioCat-tabData') }}/" + id,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (res) {
                    console.log(res.data);

                    let portfolioContainer = $('.portfolio_container');

                    if (res.data.length > 0) {
                        portfolioContainer.empty(); // Clear existing content

                        res.data.forEach(function(item) {
                            let imageUrl = "{{ asset('') }}/" + item.portfolio_image;

                            // Create HTML structure for each portfolio item
                            let portfolioItem = `
                                <div class="portfolio_showcase">
                                    <div class="portfolio_image">
                                        <img src="${imageUrl}" alt="">
                                        <div class="portfolio_overlay">
                                            <a class="portfolio_link" href="${item.portfolio_url}"><i class='bx bx-link-alt'></i></a>
                                        </div>
                                    </div>
                                    <h3>${item.portfolio_name}</h3>
                                </div>
                            `;
                            portfolioContainer.append(portfolioItem); // Append to the container
                        });
                    } else {
                        portfolioContainer.empty(); // Clear existing content
                        portfolioContainer.append(`
                            <div class="alert alert-info" role="alert">
                                 There is no data here
                            </div>
                        `);
                    }
                },
                error: function (err) {
                    console.log('error');
                }
            });
        }

        // Call fetchData with default ID or the ID of the first tab when the page loads
        let defaultTab = document.querySelector('.menu_listing.active_portfolio');
        let defaultId = defaultTab ? $(defaultTab).attr('data-id') : 'default-id'; // Replace 'default-id' with the actual default ID if needed
        fetchData(defaultId);
    });
</script>

@endpush
