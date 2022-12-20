@extends('layouts.master')

@section('content')
    <!-- Breadcrumb area Start -->
    <section class="page-title-area bg-image ptb--80" data-bg-image="/website/images/page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">About Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="current"><span>About Us</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->


    @if ($normal->banner_image)
        <main class="main-content-wrapper">
            <!-- About Area Start -->
            <section class="about-area ptb--60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading mb--22">
                                <h2>@php echo $normal->short_content; @endphp</h2>
                                <hr class="delimeter">
                            </div>
                            <p> @php echo $normal->long_content; @endphp </p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ $normal->banner_image }}" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Area End -->
        </main>
    @else
        <main class="main-content-wrapper">
            <!-- About Area Start -->
            <section class="about-area ptb--60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading mb--22">
                                <h2>@php echo $normal->short_content; @endphp</h2>
                                <hr class="delimeter">
                            </div>
                            <p> @php echo $normal->long_content; @endphp </p>
                        </div>
                    </div>

                </div>

            </section>
            <!-- About Area End -->
        </main>
    @endif





    <!-- Main Content Wrapper End -->
@endsection
