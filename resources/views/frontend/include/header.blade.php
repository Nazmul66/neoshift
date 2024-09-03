<header>
    <div class="contact_bio">
        <div class="contact_bio_container">
            <ul>
                <li>
                    <a href="tel:{{ $settings->phone }}" class="contact_list">
                        <i class='bx bxs-phone-call' ></i>
                        <span>{{ $settings->phone }}</span>
                    </a>
                </li>
                <li>
                    <a href="mailto:{{ $settings->email }}" class="contact_list">
                        <i class='bx bxs-envelope' ></i>
                        <span>{{ $settings->email }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main_container">
        <nav>
            <div class="header_img">
                <img src="{{ asset('public/frontend/assets/images/header-logo.png') }}" alt="">
                <h3>{{ $settings->first_name }} <span>{{ $settings->last_name }}</span></h3>
            </div>

            <div class="nav_menu">
                <div class="responsive_header_img">
                    <img src="{{ asset('public/frontend/assets/images/header-logo.png') }}" alt="">
                </div>

               <ul class="nav_list">
                   <li>
                       <a href="{{ route('home') }}">Home</a>
                   </li>
                   <li>
                       <a href="{{ route('service') }}">What We Offer</a>
                   </li>
                   <li>
                       <a href="{{ route('portfolio') }}">Portfolio</a>
                   </li>
                   {{-- <li>
                       <a href="{{ route('blog') }}">Blog</a>
                   </li>
                   <li>
                       <a href="{{ route('faq') }}">Faq</a>
                   </li> --}}
                   <li>
                       <a class="contact_btn" href="{{ route('schedule-meeting') }}">Schedule Meeting</a>
                   </li>
               </ul>

               <div class="close_nav">
                   <i class='bx bx-x'></i>
               </div>
            </div>

            <div class="hamburger_menu">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </div>
  </header>
