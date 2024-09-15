<footer>
    <div class="container">
        <div class="main-footer">
            <div class="row">
                <div class="col-lg-4 ">
                    <div class="widget-1">
                        <a class="navbar_brand" href="{{ route('home') }}">
                            <img src="{{ asset('public/frontend/assets/images/footer-logo.png') }}" alt="">
                            <h3>{{ $settings->first_name }} {{ $settings->last_name }}</h3>
                        </a>
                        <p>{{ $settings->address }}</p>

                        <ul class="contact_info">
                            <li>
                                <i class='bx bxs-phone'></i>
                                <a href="tel: {{ $settings->phone }}">{{ $settings->phone }}</a>
                            </li>
                            <li>
                                <i class='bx bxs-envelope'></i>
                                <a href="mailto: {{ $settings->email }}">{{ $settings->email }}</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 offset-lg-1 col-sm-6 col-md-6">
                    <div class="widget-2">
                        <h4>Quick Links</h4>
                        <ul>
                            <li>
                                <div class="service_list">
                                    <i class='bx bx-right-arrow-alt'></i>
                                    <span>
                                        <a href="{{ route('home') }}">Terms & Condition</a>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="service_list">
                                    <i class='bx bx-right-arrow-alt'></i>
                                    <span>
                                        <a href="{{ route('home') }}">Privacy Policy</a>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="service_list">
                                    <i class='bx bx-right-arrow-alt'></i>
                                    <span>
                                        <a href="{{ route('faq') }}">Faq</a>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- <div class="col-lg-2 col-sm-6 col-md-6">
                    <div class="widget-2">
                        <h4>Services</h4>
                        <ul>
                            <li>
                                <a href="">
                                    <div class="service_list">
                                        <i class='bx bx-right-arrow-alt'></i>
                                        <span>Machine Learning</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="service_list">
                                        <i class='bx bx-right-arrow-alt'></i>
                                        <span>Data Analytics</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="service_list">
                                        <i class='bx bx-right-arrow-alt'></i>
                                        <span>Computer Vision</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}

                <div class="col-lg-4">
                    <div class="widget-2">
                        <h4>Social Links </h4>
                        <p>Connect Us :</p>

                        {{-- <div class="subscription_field">
                            <form action="">
                                <input type="text" name="" class="subscription_form" placeholder="Enter Your Mail">
                                <button class="subscribe_btn" type="submit">Subscribe</button>
                            </form>
                        </div> --}}

                        <ul class="social_links">
                            <li>
                                <a href="{{ $settings->facebook }}">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $settings->twitter }}">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $settings->instagram }}">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $settings->linkedin }}">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="footer_copyright">
                        <p>{{ $settings->footer_text }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
