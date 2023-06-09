@extends('frontend.index')
@section('main')


<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Khánh Nguyên</h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer"></span></p>
    </div>
    </section>
  <!--! End section-->

    <div>
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
    </div>


@endsection
