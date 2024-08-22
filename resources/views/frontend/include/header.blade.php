<header>
    <div class="main_container">
        <nav>
            <div class="header_img">
                <img src="{{ asset('public/frontend/assets/images/header-logo.png') }}" alt="">
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
                       <a href="{{ route('service') }}">Service</a>
                   </li>
                   <li>
                       <a href="{{ route('portfolio') }}">Portfolio</a>
                   </li>
                   <li>
                       <a href="{{ route('blog') }}">Blog</a>
                   </li>
                   <li>
                       <a href="{{ route('faq') }}">Faq</a>
                   </li>
                   <li>
                       <a class="contact_btn" href="{{ route('contact') }}">Contact Us</a>
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
