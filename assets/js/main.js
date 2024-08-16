// Portfolio Section  
let menu_listing = document.querySelectorAll('ul .menu_listing');
let portfolio_container = document.querySelectorAll('.portfolio_container');

menu_listing.forEach((element, i) => {
      element.addEventListener('click', (e) => {
          // Fade out the currently active container
          portfolio_container.forEach((container, index) => {
              if (container.classList.contains('active_portfolio')) {
                  container.style.opacity = '0';
                  setTimeout(() => {
                      container.classList.remove('active_portfolio');
                      if (i !== index) {
                          menu_listing[index].classList.remove('active_portfolio');
                      }
                  }, 300); // match the CSS transition duration
              }
          });

          // Delay fade in of the new container
          setTimeout(() => {
              element.classList.add('active_portfolio');
              portfolio_container[i].classList.add('active_portfolio');
              portfolio_container[i].style.opacity = '1';
          }, 300); // match the CSS transition duration
      });
});


    // Video Section Javascript
    let hamburger_menu    = document.querySelector('.hamburger_menu');
    let close_nav         = document.querySelector('.close_nav');
    let nav_menu          = document.querySelector('.nav_menu');


    hamburger_menu.addEventListener('click', () => {
        nav_menu.classList.add('active_nav');
    });

    close_nav.addEventListener('click', () => {
        nav_menu.classList.remove('active_nav');
    });


    // Video Section Javascript
    let video_btn = document.querySelector('.video_btn');
    let popup_video = document.querySelector('.popup_video');
    let video_close = document.querySelector('.video_close');
    let iframe = popup_video.querySelector('iframe');
    let videoSrc = iframe.src;

    video_btn.addEventListener('click', () => {
        iframe.src = videoSrc + "&autoplay=1"; // Adding autoplay parameter
        popup_video.classList.add('show_video');
    });

    video_close.addEventListener('click', () => {
        popup_video.classList.remove('show_video');
        iframe.src = videoSrc; // Resetting the src to stop the video
    });


    // Banner Section Javascript
    let banner_watch_video     = document.querySelector('.banner_watch_video');
    let banner_popup_video     = document.querySelector('.banner_popup_video');
    let banner_video_close     = document.querySelector('.banner_video_close');
    let bannerIframe           = banner_popup_video.querySelector('iframe');
    let bannerVideoSrc         = bannerIframe.src;

    banner_watch_video.addEventListener('click', () => {
        bannerIframe.src = bannerVideoSrc + "&autoplay=1"; // Adding autoplay parameter
        banner_popup_video.classList.add('banner_show');
    });

    banner_video_close.addEventListener('click', () => {
        banner_popup_video.classList.remove('banner_show');
        bannerIframe.src = bannerVideoSrc; // Resetting the src to stop the video
    });



$(document).ready(function(){
    $('#categorySlider').owlCarousel({
        loop: true,
        margin: 50,
        nav: false,  
        dots: false,  
        autoplay: true, 
        autoplayTimeout: 3000, 
        autoplayHoverPause: true, 
        responsive: {
            0: {
                margin: 20,
                items: 2 
            },
            577: {
                margin: 20,
                items: 2
            },
            769: {
                margin: 20,
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });


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


    $('#teamSlider').owlCarousel({
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
                margin: 30,
                items: 1
            },
            577: {
                margin: 10,
                items: 2
            },
            769: {
                items: 2
            },
            993: {
                items: 3
            },
        }
    });


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

});

