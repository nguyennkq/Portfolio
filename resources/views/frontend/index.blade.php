<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio NK</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.4/swiper-bundle.css" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
</head>
<body>
    <i class="fa-solid fa-bars d-xl-none mobile-nav-toggle"></i>
    @include('frontend.body.header')
    <!--! End header-->

    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
          <h1>Khánh Nguyên</h1>
          <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer"></span></p>
        </div>
      </section>
      <!--! End section-->

      <main>
        @include('frontend.about')
        <!--! End about -->

        @include('frontend.fact')
        <!--! End facts -->

        @include('frontend.skill')
        <!--! End Skill-->

        @include('frontend.resume')
        <!--! End Resume-->

        @include('frontend.portfolio')
        <!--! End Portfolio -->

        @include('frontend.service')
        <!--! End Services -->

        @include('frontend.testimonial')
        <!--! End Testimonials -->

        @include('frontend.contact')
        <!--! End Contact -->
      </main>
      @include('frontend.body.footer')
      <!--! End  Footer -->

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up"></i></a>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
      <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
      <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.4/swiper-bundle.min.js"></script>

      <script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>
</html>
