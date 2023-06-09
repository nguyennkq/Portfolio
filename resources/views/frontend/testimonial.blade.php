<section id="testimonials" class="testimonials section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Testimonials</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            @foreach ($testimonial as $item)
            <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item" data-aos="fade-up">
                            <p>
                                <i class="fa-solid fa-quote-left"></i>
                                    {{$item->testimonial_description}}
                                <i class="fa-solid fa-quote-right"></i>
                            </p>
                            <img src="{{asset($item->testimonial_avatar)}}" class="testimonial-img" alt="">
                            <h3>{{$item->testimonial_username}}</h3>
                            <h4>{{$item->testimonial_job}}</h4>
                        </div>
                    </div><!--? End testimonial item -->

                </div>
                @endforeach
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>
