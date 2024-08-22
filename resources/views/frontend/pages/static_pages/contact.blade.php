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
                            <h1>Contact-Us</h1>
                            <ul class="breadcrumb_list">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a type="button">/</a>
                                </li>
                                <li>
                                    <a href="javascript::void()">Contact-Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
       </section>
    <!-- Breadcrumb section end -->


    <!-- Contact section start -->
        <section class="contact_section">
            <div class="container">
                <div class="contact_detail_container">
                    <div class="google_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d912.5807025482335!2d90.36939439048!3d23.80711741013939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDQ4JzI0LjUiTiA5MMKwMjInMDguOCJF!5e0!3m2!1sen!2sbd!4v1723920384329!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="contact_form">
                        <h2>Contact With Us</h2>

                        <form action="">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form_data">
                                        <input type="text" name="name" class="form_control" id="name" placeholder="Your Name....">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form_data">
                                        <input type="text" name="phone" class="form_control" id="phone" placeholder="Your Phone....">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form_data">
                                        <input type="email" name="email" class="form_control" id="email" placeholder="Email Address....">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form_data">
                                        <select class="form_control" name="service" id="service">
                                           <option selected>Open This Select Service</option>
                                           <option value="1">One</option>
                                           <option value="2">Two</option>
                                           <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form_data">
                                        <textarea class="form_textarea" id="notes" name="notes" placeholder="Special Notes"></textarea>
                                    </div>
                                </div>

                                <button type="submit" class="contact_buttons">Contact Us</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <!-- Contact section end -->

@endsection


@push('add-js')

    <script>
        $('#blogSlider').owlCarousel({
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
                    items: 1
                },
                769: {
                    items: 2
                },
                993: {
                    items: 3
                }
            }
        });
    </script>

@endpush
