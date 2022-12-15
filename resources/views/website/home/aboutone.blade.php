<section class="about-area ptb--60">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <div class="heading">
                    <h1 class="mb--18">{{ $about->caption ?? '' }}</h1>
                    <hr class="delimeter mx-auto mb--22">
                </div>
                <p class="mb--25 text-center">{{ $about->short_content }}
                    <br>
                    {{ $about->long_content }}
                </p>

                <a href="/about-one" class="btn">Read More</a>
            </div>
        </div>
    </div>
</section>
