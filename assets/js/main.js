const bodyElement = document.querySelector("body");

//! Hero type effect

var typed = new Typed(".typed", {
  strings: document
    .querySelector(".typed")
    .getAttribute("data-typed-items")
    .split(","),
  loop: true,
  typeSpeed: 100,
  backSpeed: 50,
  backDelay: 2000,
});

//! Animation on scroll
window.addEventListener("load", () => {
  AOS.init({
    duration: 1000,
    easing: "ease-in-out",
    once: true,
    mirror: false,
  });
});

//! Initiate Pure Counter
new PureCounter();

//! Skills animation

var waypoint = new Waypoint({
  element: document.querySelector(".skills-content"),
  offset: "80%",
  handler: function (direction) {
    let progress = document.querySelectorAll(".progress .progress-bar");
    progress.forEach((el) => {
      el.style.width = el.getAttribute("aria-valuenow") + "%";
    });
  },
});

//! Porfolio isotope and filter

window.addEventListener("load", () => {
  let portfolioContainer = document.querySelector(".portfolio-container");
  if (portfolioContainer) {
    let portfolioIsotope = new Isotope(portfolioContainer, {
      itemSelector: ".portfolio-item",
    });

    let portfolioFilters = document.querySelectorAll("#portfolio-filters li");

    portfolioFilters.forEach(function (filter) {
      filter.addEventListener(
        "click",
        function (e) {
          e.preventDefault();
          portfolioFilters.forEach(function (el) {
            el.classList.remove("filter-active");
          });
          this.classList.add("filter-active");

          portfolioIsotope.arrange({
            filter: this.getAttribute("data-filter"),
          });
          portfolioIsotope.on("arrangeComplete", function () {
            AOS.refresh();
          });
        },
        true
      );
    });
  }
});

//! Initiate portfolio lightbox
const portfolioLightbox = GLightbox({
  selector: ".portfolio-lightbox",
});

//! Testimonials slider

new Swiper(".testimonials-slider", {
  speed: 600,
  // tốc độ chuyển đổi giữa các slide
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  slidesPerView: "auto",
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
    clickable: true,
  },
  breakpoints: {
    // mobile
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    // tablet
    1200: {
      slidesPerView: 3,
      // số slide mỗi lượt chuyển tiếp
      spaceBetween: 20,
    },
  },
});

//! Navbar links active state on scroll

const onscroll = (el, listener) => {
  el.addEventListener("scroll", listener);
};


let navbarlinks = document.querySelectorAll("#navbar .scrollto");
console.log(navbarlinks)
const navbarlinksActive = () => {
  let position = window.scrollY + 200;
  navbarlinks.forEach((navbarlink) => {
    if (!navbarlink.hash) return;
    let section = document.querySelector(navbarlink.hash);
    if (!section) return;
    if (
      position >= section.offsetTop &&
      position <= section.offsetTop + section.offsetHeight
    ) {
      navbarlink.classList.add("active");
    } else {
      navbarlink.classList.remove("active");
    }
  });
};

window.addEventListener("load", navbarlinksActive);
onscroll(document, navbarlinksActive);

//! Back to top button

let backtotop = document.querySelector(".back-to-top");
if (backtotop) {
  const toggleBacktotop = () => {
    if (window.scrollY > 100) {
      backtotop.classList.add("active");
    } else {
      backtotop.classList.remove("active");
    }
  };
  window.addEventListener("load", toggleBacktotop);
  onscroll(document, toggleBacktotop);
}

//! Mobile nav toggle

const scrollto = (el) => {
  let elementPos = document.querySelector(el).offsetTop;
  window.scrollTo({
    top: elementPos,
    behavior: "smooth",
  });
};

const mobileNav = document.querySelector(".mobile-nav-toggle");

mobileNav.addEventListener("click", function (e) {
  bodyElement.classList.toggle("mobile-nav-active");
  this.classList.toggle("fa-bars");
  this.classList.toggle("fa-x");
});

const scrollToElements = document.querySelectorAll(".scrollto");
scrollToElements.forEach((element) => {
  element.addEventListener("click", function(e) {
    e.preventDefault();
    if (document.body.classList.contains("mobile-nav-active")) {
      bodyElement.classList.remove("mobile-nav-active");
      document.querySelector(".mobile-nav-toggle").classList.toggle("fa-bars");
      document.querySelector(".mobile-nav-toggle").classList.toggle("fa-x");
    }
    scrollto(this.hash);
  });
});

window.addEventListener('load', () => {
  if (window.location.hash) {
    if ((window.location.hash).trim()) {
      scrollto(window.location.hash)
    }
  }
});
