@if (isset($sliders))
    <section class="homepage-slider">
        <div class="element-carousel" data-slick-options='{
        "slidesToShow": 1,
        "autoplay": true
    }'>
            @foreach ($sliders as $slider)
                <div class="single-slide d-flex align-items-center"
                    style="background-image: url({{ $slider->banner_image }});">
                    <div class="container">
                        <div class="row g-0">
                            <div class="col-lg-6 col-sm-8">
                                <div class="slider-content">
                                    <h1 class="heading__primary mb--3pt6" data-animation="fadeInUp" data-duration=".3s"
                                        data-delay=".3s">{{ $slider->caption }}
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endif

