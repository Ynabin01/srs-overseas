@php
    $all_jobs = App\Models\Navigation::all()
        ->where('page_type', 'Job')
        ->take(5);
    
@endphp

@extends('layouts.master')

@section('content')
    <!-- Breadcrumb area Start -->
    <section class="page-title-area bg-image ptb--80" data-bg-image="/website/images/page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">{{$slug1}} </h1>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="/job-list">Job</a></li>
                        @if(isset($slug2))
                        <li class="current"><span>{{$slug2}} </span></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    <main class="main-content-wrapper">
        <!-- About Area Start -->
        <section class="job-area ptb--60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="job-description">
                            <p>
                                @php echo $job->short_content; @endphp
                            </p>
                            <p>
                                @php echo $job->long_content; @endphp
                            </p>
                        </div>
                        <div class="apply-now">
                            <a href="#" id="btnOpenFormbutton" class="apply-button">Apply Now</a>
                        </div>
                        <div class="heading mt--22 mb--22">
                            <h3>Basic Job Information</h3>
                        </div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Position</td>
                                    <td>:</td>
                                    <td>{{ $job->getJob->company_name }}</td>
                                </tr>
                                <tr>
                                    <td>Number of Vacancies</td>
                                    <td>:</td>
                                    <td>{{ $job->getJob->contract_time }}</td>
                                </tr>
                                <tr>
                                    <td>Salary</td>
                                    <td>:</td>
                                    <td>Rs. {{ $job->getJob->salary }}</td>
                                </tr>
                                <tr>
                                    <td>Food & Accommodation</td>
                                    <td>:</td>
                                    <td>{{ $job->getJob->foodaccommondation }}</td>
                                </tr>
                                <tr>
                                    <td>Contract Period</td>
                                    <td>:</td>
                                    <td> {{ $job->getJob->total_demand }}</td>
                                </tr>
                                <tr>
                                    <td>Working day</td>
                                    <td>:</td>
                                    <td> {{ $job->getJob->working_day }}</td>
                                </tr>
                                <tr>
                                    <td>Working Hour</td>
                                    <td>:</td>
                                    <td> {{ $job->getJob->working_hour }}</td>
                                </tr>
                                <tr>
                                    <td>Visa & Ticket</td>
                                    <td>:</td>
                                    <td> {{ $job->getJob->visa_ticket }}</td>
                                </tr>
                                <tr>
                                    <td>Service Charge</td>
                                    <td>:</td>
                                    <td> {{ $job->getJob->service_charge }}</td>
                                </tr>
                                <tr>
                                    <td>LT Number</td>
                                    <td>:</td>
                                    <td> {{ $job->getJob->lt_number }}</td>
                                </tr>
                                <tr>
                                    <td>Interview</td>
                                    <td>:</td>
                                    <td>{{ $job->getJob->interview }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <img src="{{ $job->banner_image }}">
                    </div>

                  
                   
                       
                        <div class="col-sm-4">
                            <h3>Latest Jobs</h3>
                              {{-- @dd($all_jobs) --}}
                            @foreach ($all_jobs as $all_jobsitem)
                             {{-- @dd($all_jobsitem) --}}
                           
                            <div class="side-bar">
                                <div class="heading mt--22 mb--22"> 
                                    <div class="job-box">
                                        <div class="job__inner">
                                            <a href="{{ route('single_job', $all_jobsitem->nav_name) }}" class="job-overlay"></a>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <figure class="job__icon">
                                                        <img src="{{ $all_jobsitem->banner_image }}" alt="Job"
                                                            class="mx-auto">
                                                    </figure>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="job__body">
                                                        <div class="job-header">
                                                            <h3>{{ $all_jobsitem->getJob->country }}</h3>
                                                            <p>({{ $all_jobsitem->getJob->company_name }})</p>
                                                        </div>
                                                        <div class="job-footer">
                                                            <a href="/job_detail_single_page"  class="btn btn-shape-round">View &amp;
                                                                Apply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                

                </div>
            </div>
        </section>
    </main>

    <!-- Popup Form Start-->
    <div class="form-popup-bg">
        <div class="form-container">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <button id="btnCloseForm" class="close-button fa fa-times-circle" ></button>
            <h4>Application Form</h4>
            <p class="job-title">{{ $job->caption }}</p>

            <form method="post" action="{{ route('contactstore') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="first_name">Full Name</label>
                    <input name="first_name" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="message">Applying For</label>
                    <input name="message" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="email">E-Mail Address</label>
                    <input name="email" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="number">Phone Number</label>
                    <input name="number" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="file">Upload your CV</label>
                    <input name="file" type="file" class="form-control file-upload">
                </div>
                <button type="submit"> Submit</button>
            </form>
        </div>
    </div>
    <!-- Popup Form End-->
@endsection
