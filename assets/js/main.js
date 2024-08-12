
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

