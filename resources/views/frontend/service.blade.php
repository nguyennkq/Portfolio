<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>Services</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            @foreach ($service as $item)
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    <div class="icon"><i class="fa-solid {{$item->service_icon}}"></i></div>
                    <h4 class="title"><a href="">{{$item->service_title}}</a></h4>
                    <p class="description">{{$item->service_description}}</p>
                </div>
            @endforeach
        </div>
</section>
