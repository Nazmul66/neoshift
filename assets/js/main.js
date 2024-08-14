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
                items: 3 
            },
            769: {
                items: 4
            },
            1000: {
                items: 6
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
                items: 2 
            },
            769: {
                items: 2
            },
            1000: {
                nav: true,
                items: 4
            }
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
                items: 2 
            },
            769: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

});

