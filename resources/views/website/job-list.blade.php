@extends('layouts.master')

@section('content')
    <!-- Breadcrumb area Start -->
    <section class="page-title-area bg-image ptb--80" data-bg-image="website/images/page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Latest Job</h1>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="current"><span>Latest Job</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    <main class="main-content-wrapper">
        <!-- About Area Start -->
        <section class="about-area ptb--60">
            <div class="container">
                @if (isset($jobs))
                    
                    {{-- @dd($job->getJob) --}}
                        <div class="row">
                            @foreach ($jobs as $job)
                            <div class="col-md-6 col-sm-12">
                                <div class="job-box">
                                    <div class="job__inner">
                                        <a href="/jobdetail/{{ $job->nav_name }}" class="job-overlay"></a>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <figure class="job__icon">
                                                    <img src="{{ $job->banner_image }}" alt="Job" class="mx-auto">
                                                </figure>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="job__body">
                                                    <div class="job-header">
                                                        <h3>{{ $job->caption }}</h3>
                                                        <p>{{ $job->getJob->company_name }}</p>
                                                    </div>
                                                    <div class="job-detail">
                                                        <ul>
                                                            <li><i class="fa fa-map-marker"></i>{{ $job->getJob->country }}</li>
                                                            <li><i class="fa fa-users"></i> ({{ $job->getJob->total_demand }})</li>
                                                            <li><i class="fa fa-money"></i> NRs.{{ $job->getJob->salary }}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="job-footer">
                                                        <ul>
                                                            <li>Posted On: {{ $job->getJob->deadline }}</li>
                                                            <li class="deadline">{{ $job->getJob->posted_on }}</li>
                                                        </ul>
                                                        <a href="/job_detail_single_page" class="btn btn-shape-round">View & Apply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                   
                @endif
            </div>
        </section>
        <!-- About Area End -->
    </main>
    <!-- Main Content Wrapper End -->
@endsection
