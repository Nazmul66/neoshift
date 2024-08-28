<header>
    <div class="contact_bio">
        <div class="contact_bio_container">
            <ul>
                <li>
                    <a href="tel:+8801930260802" class="contact_list">
                        <i class='bx bxs-phone-call' ></i>
                        <span>+8801930260802</span>
                    </a>
                </li>
                <li>
                    <a href="mailto:hnazmul748@gmail.com" class="contact_list">
                        <i class='bx bxs-envelope' ></i>
                        <span>hnazmul748@gmail.com</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main_container">
        <nav>
            <div class="header_img">
                <img src="{{ asset('public/frontend/assets/images/header-logo.png') }}" alt="">
                <h3>Shariar <span>Ridth</span></h3>
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
