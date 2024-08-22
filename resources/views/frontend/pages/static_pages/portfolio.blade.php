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
                            <h1>Portfolio</h1>
                            <ul class="breadcrumb_list">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a type="button">/</a>
                                </li>
                                <li>
                                    <a href="javascript::void()">Portfolio</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
       </section>
    <!-- Breadcrumb section end -->


    <!-- Portfolio Section Start [Done] -->
    <section class="portfolio_section top_measurement">
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
                            <li class="menu_listing active_portfolio">E-commerce</li>
                            <li class="menu_listing">Real-Estate</li>
                            <li class="menu_listing">Corporate</li>
                            <li class="menu_listing">Travel Agency</li>
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


@endsection


@push('add-js')

@endpush
