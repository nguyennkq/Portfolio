<section id="resume" class="resume">
    <div class="container">

        <div class="section-title">
            <h2>Resume</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            @foreach ($resume_all as $item)

                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">{{$item->resume_title}}</h3>
                    <div class="resume-item pb-0">
                        <h4>{{$item->resume_subtitle}}</h4>
                        @if ($item->start_time)
                            <h5>{{substr($item->start_time, 0, 4)}} - {{substr($item->end_time, 0, 4)}}</h5>
                        @endif
                        <p>{!! $item->resume_description !!}</p>
                    </div>
                </div>

            @endforeach
        </div>

    </div>
</section>
