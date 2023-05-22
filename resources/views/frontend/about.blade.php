{{-- @php
    $about_home = App\Models\About::find(1);
@endphp --}}

<section id="about" class="about">
    <div class="container">
      <div class="section-title">
        <h2>About</h2>
        <p>{{$about_home->short_description}}</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{asset($about_home->about_image)}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{$about_home->title}}</h3>
          <p class="">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul class="row">
            {!! $about_home->about_info !!}
          </ul>
          <p>
            {!! $about_home->long_description !!}
          </p>
        </div>
      </div>
    </div>
</section>
