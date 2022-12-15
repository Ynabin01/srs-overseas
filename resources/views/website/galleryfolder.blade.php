@extends('layouts.master')

@section('content')
    <!-- Breadcrumb area Start -->
    <section class="page-title-area bg-image ptb--80" data-bg-image="/website/images/page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Gallery</h1>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="current"><span>Gallery</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    <main class="main-content-wrapper">
        <!-- Gallery Area Start -->
        @if (isset($photos))
            <section class="gallery-folder ptb--60">
                <div class="container">
                    <div class="row">
                        @foreach ($photos as $photo)
                            <div class="col-lg-3 col-md-4">
                                <a href="{{route('GOTOGALLERY',$photo->nav_name)}}">
                                    <div class="folder">
                                        <div class="paper folder-pop"><img src="{{ $photo->banner_image }}"
                                                width="100%">
                                        </div>
                                        <div class="paper folder-pop-middle"><img src="{{ $photo->banner_image }}"
                                                width="100%"></div>
                                        <div class="paper folder-pop-last"><img src="{{ $photo->banner_image }}"
                                                width="100%"></div>
                                    </div>
                                    <h5 class="folder-text">{{ $photo->caption }}</h5>
                                </a>
                            </div>
                        @endforeach
                    </div><!-- /.row -->
                </div><!-- /.container -->
        @endif
        </section><!-- /.inner-details -->
        <!-- Gallery Area End -->
    </main>
    <!-- Main Content Wrapper End -->
@endsection
