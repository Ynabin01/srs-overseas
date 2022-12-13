<section class="message-area ptb--60">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <img src="{{ $message->banner_image }}">
            </div>
            <div class="col-md-7 col-sm-6">
                <div class="heading">
                    <h1 class="mb--18">{{ $message->caption }}</h1>
                    <hr class="delimeter mb--22">
                </div>
                <p class="mb--15"> {{ $message->short_content }} <a href="message-from-chairman.html" class="read-more-text">Read More +</a>
                </p>
                <h3> {{ $message->long_content }}</h3>
                
            </div>
        </div>
    </div>
</section>