<section id="portfolio" class="portfolio section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Portfolio</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-filters">
                <li data-filter="*" class="filter-active">All</li>
                @foreach ($portfolio_category as $item)
                    <li data-filter=".filter-{{$item->category_name}}">{{$item->category_name}}</li>
                @endforeach
            </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

            @foreach ($portfolio as $item)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{$item['category']['category_name']}}">
                    <div class="portfolio-wrap">
                        <img src="{{$item->portfolio_image}}" class="img-fluid" alt="">
                        <div class="portfolio-links">
                        <a href="{{asset($item->portfolio_image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$item->portfolio_title}}"><i class="fa-solid fa-plus"></i></a>
                        <a href="{{route('detail.portfolio', $item->id)}}" title="More Details"><i class="fa-solid fa-link"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>
