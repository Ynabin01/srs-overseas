{{-- @extends('layouts.master')
    @section('contents')
       
			<!--
			=====================================================
				Google Map
			=====================================================
			-->
			<!-- Google Map -->
			<div class="google-map-two">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7065.511178424314!2d85.281466!3d27.693948!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe25fdd5d858e0cbe!2sKalanki%20Bus%20Stop!5e0!3m2!1sen!2snp!4v1657622982275!5m2!1sen!2snp" width="100%" height="368px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>


			<!-- 
			=============================================
				Conatct us Section
			============================================== 
			-->
			<div class="contact-us-section section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>GET IN TOUCH</h2>
					</div> <!-- /.theme-title-one -->
					<div class="clearfix main-content no-gutters row">
						<div class="col-lg-5 col-12"><div class="img-box"></div></div>
						<div class="col-lg-7 col-12">
							<div class="form-wrapper">
								<form action="{{route('contactstore')}}" method="POST" class="theme-form-one form-validation" autocomplete="on" enctype='multipart/form-data'>
									 @csrf	
								<div class="row">
										<div class="col-sm-6 col-12"><input type="text" placeholder="Name *" name="name"></div>
										<div class="col-sm-6 col-12"><input type="text" placeholder="Phone *" name="number"></div>
										<div class="col-sm-6 col-12"><input type="email" placeholder="Email *" name="email"></div>
										<div class="col-12"><textarea placeholder="Message" name="message"></textarea></div>
									</div> <!-- /.row -->
									<button type="submit" class="theme-button-one">Submit</button>
								</form>
							</div> <!-- /.form-wrapper -->
						</div> <!-- /.col- -->
					</div> <!-- /.main-content -->
				</div> <!-- /.container -->

				<!--Contact Form Validation Markup -->
				<!-- Contact alert -->
				<div class="alert-wrapper" id="alert-success">
					<div id="success">
						<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
						<div class="wrapper">
			               	<p>Your message was sent successfully.</p>
			             </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			    <div class="alert-wrapper" id="alert-error">
			        <div id="error">
			           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
			           	<div class="wrapper">
			               	<p>Sorry!Something Went Wrong.</p>
			            </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			</div> <!-- /.contact-us-section -->
        @include("website.partner")
@endsection --}}


@extends('layouts.master')
@section('content')

  <!-- Breadcrumb area Start -->
  <section class="page-title-area bg-image ptb--80" data-bg-image="/website/images/page-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Contact Us</h1>
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="current"><span>Contact Us</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->


<main class="main-content-wrapper">
    <div class="inner-page-content">
        <!-- Contact Area Start -->
        <section class="contact-area ptb--60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 mb-md--50">
                        <div class="heading mb--42">
                            <h2>Get In Touch</h2>
                            <hr class="delimeter">
                        </div>
                        <div class="contact-info mb--30">
                            <p><i class="fa fa-map-marker"></i>Lazimpat, Kathmandu
                            </p>
                            <p><i class="fa fa-phone"></i> <a href="tel:014418667">01-4418667</a>, <a href="tel:014430423">4430423</a></p>
                            <p><i class="fa fa-envelope"></i> <a href="mailto:srsoverseasnepal@gmail.com">srsoverseasnepal@gmail.com</a></p>
                            <p><i class="fa fa-envelope"></i> <a href="mailto:srs17overseasnepal@gmail.com">srs17overseasnepal@gmail.com</a></p>
                        </div>
                        <ul class="social social-outline">
                            <li class="social__item">
                                <a href="https://www.facebook.com" class="social__link" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="https://www.plus.google.com" class="social__link" target="_blank">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="https://www.twitter.com" class="social__link" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="social__item">
                                <a href="https://www.linkedin.com" class="social__link" target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-7 offset-lg-1">
                        <div class="heading mb--42">
                            <h2>Contact Us</h2>
                            <hr class="delimeter">
                        </div>
                        <form action="mail.php" class="form" id="contact-form">
                            <input type="email" name="con_email" id="con_email" class="form__input mb--30"
                                placeholder="Email*">
                            <input type="text" name="con_name" id="con_name" class="form__input mb--30"
                                placeholder="Name*">
                            <textarea class="form__input form__input--textarea mb--30" placeholder="Message"
                                id="con_message" name="con_message"></textarea>
                            <button type="submit" class="btn btn-shape-round form__submit">Send Request</button>
                            <div class="form__output"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Area End -->

        <!-- Google Map Area Start -->
   <!-- Google Map -->
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.845659969248!2d85.31929851541567!3d27.722051231451736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1919f7dd0685%3A0xc59baa0caae9c83d!2sLazimpat%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1670754752618!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- Google Map Area End -->
    </div>
    <script src="website/assets/js/vendor.js"></script>

    <!-- Main JS -->
    <script src="website/assets/js/main.js"></script>
</main>
@endsection
