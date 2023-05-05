
//!Hero type effect

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