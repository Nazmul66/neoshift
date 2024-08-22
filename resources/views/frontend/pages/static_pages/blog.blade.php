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
                            <h1>Blogs</h1>
                            <ul class="breadcrumb_list">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a type="button">/</a>
                                </li>
                                <li>
                                    <a href="javascript::void()">Blogs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
       </section>
    <!-- Breadcrumb section end -->


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


    <!-- Call-to-action section start -->
        <section class="cta_section exception_mesurement">
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
    <!-- Call-to-action section end -->


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
