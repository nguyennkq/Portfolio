
//! Hero type effect

  var typed = new Typed('.typed', {
    strings: document.querySelector('.typed').getAttribute('data-typed-items').split(','),
    loop: true,
    typeSpeed: 100,
    backSpeed: 50,
    backDelay: 2000
  });

//! Animation on scroll
window.addEventListener('load', () => {
 AOS.init({
   duration: 1000,
   easing: 'ease-in-out',
   once: true,
   mirror: false
 })
});

//! Initiate Pure Counter 
new PureCounter();

//! Skills animation

var waypoint = new Waypoint({
  element: document.querySelector('.skills-content'),
  offset : '80%',
  handler: function(direction) {
    let progress= document.querySelectorAll('.progress .progress-bar')
    progress.forEach((el)=> {
      el.style.width = el.getAttribute('aria-valuenow') + '%'
    })
  },
})

//! Porfolio isotope and filter

window.addEventListener('load', () => {
  let portfolioContainer = document.querySelector('.portfolio-container');
  if (portfolioContainer) {
    let portfolioIsotope = new Isotope(portfolioContainer, {
      itemSelector: '.portfolio-item'
    });

    let portfolioFilters = document.querySelectorAll('#portfolio-filters li');

    portfolioFilters.forEach(function(filter) {
      filter.addEventListener('click', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    });
  }
});

//! Initiate portfolio lightbox 
const portfolioLightbox = GLightbox({
 selector: '.portfolio-lightbox'
});

//! Testimonials slider
  
  new Swiper('.testimonials-slider', {
    speed: 600,
    // tốc độ chuyển đổi giữa các slide
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      // mobile
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // tablet
      1200: {
        slidesPerView: 3,
        // số slide mỗi lượt chuyển tiếp
        spaceBetween: 20
      }
    }
  });
