@extends('layouts.header')
@section('title', 'Contact Us')
@section('content')
<!-- Inner page common banner -->
	<section class="common-banner" style="background-image: url('{{ asset('assets/images/banner-1.jpg') }}');">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-8">
					<div class="common-banner-content">
						<h2>Contact Us</h2>
						<ul class="breadcrump">
							<li class="breadcrump-inner"><a href="{{route('home')}}">Home</a></li>
							<li class="breadcrump-inner">Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Inner page common banner -->

	<!-- Contact Us -->
	<section class="contact-us pb-0 ">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-4 col-lg-4">
					<div class="contact-us-grid">
						<div class="inner-box-light">
							<div class="contact-media-icon">
								<svg width="28" height="28" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12.1492 4.44035C12.9909 4.60425 13.7644 5.01511 14.3708 5.62033C14.9772 6.22556 15.3888 6.99761 15.5531 7.83769M12.1492 1C13.8979 1.19389 15.5286 1.97549 16.7735 3.21645C18.0184 4.45741 18.8035 6.08398 19 7.82909M18.1383 14.6926V17.2728C18.1392 17.5124 18.0901 17.7495 17.9939 17.969C17.8978 18.1884 17.7568 18.3854 17.5799 18.5474C17.4031 18.7093 17.1943 18.8326 16.967 18.9093C16.7396 18.9861 16.4987 19.0146 16.2597 18.993C13.608 18.7054 11.0608 17.8011 8.82292 16.3526C6.74082 15.032 4.97557 13.2701 3.65252 11.192C2.19617 8.94824 1.28985 6.3936 1.00699 3.73508C0.98546 3.49723 1.01378 3.25752 1.09015 3.0312C1.16652 2.80488 1.28927 2.59691 1.45059 2.42054C1.6119 2.24416 1.80824 2.10324 2.02711 2.00675C2.24598 1.91026 2.48258 1.86031 2.72185 1.86009H5.30705C5.72525 1.85598 6.13069 2.00379 6.44778 2.27597C6.76487 2.54815 6.97198 2.92612 7.03051 3.33944C7.13963 4.16518 7.34199 4.97595 7.63373 5.75628C7.74967 6.06413 7.77476 6.39869 7.70603 6.72034C7.63731 7.04198 7.47764 7.33722 7.24595 7.57106L6.15155 8.66337C7.37827 10.8166 9.16456 12.5995 11.322 13.8239L12.4164 12.7316C12.6506 12.5003 12.9465 12.341 13.2687 12.2724C13.591 12.2038 13.9262 12.2288 14.2346 12.3445C15.0164 12.6357 15.8288 12.8377 16.6561 12.9466C17.0747 13.0055 17.457 13.216 17.7303 13.5379C18.0035 13.8598 18.1488 14.2708 18.1383 14.6926Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class="contact-subtitle text-gradient-primary">Contact Number</div>
							<a href="#">+ 91 9887XXXXX</a>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 col-lg-4">
					<div class="contact-us-grid">
						<div class="inner-box-light">
							<div class="contact-media-icon">
								<svg width="32" height="25" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M3 1H19C20.1 1 21 1.9 21 3V15C21 16.1 20.1 17 19 17H3C1.9 17 1 16.1 1 15V3C1 1.9 1.9 1 3 1Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M21 3L11 10L1 3" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class="contact-subtitle text-gradient-primary">Contact Email</div>
							<a href="#">rmkfincorp@gmail.com</a>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 col-lg-4">
					<div class="contact-us-grid">
						<div class="inner-box-light">
							<div class="contact-media-icon">
								<svg width="23" height="28" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15.7273 8.36364C15.7273 14.0909 8.36364 19 8.36364 19C8.36364 19 1 14.0909 1 8.36364C1 6.41068 1.77581 4.53771 3.15676 3.15676C4.53771 1.77581 6.41068 1 8.36364 1C10.3166 1 12.1896 1.77581 13.5705 3.15676C14.9515 4.53771 15.7273 6.41068 15.7273 8.36364Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M8.36373 10.8183C9.71933 10.8183 10.8183 9.71933 10.8183 8.36373C10.8183 7.00812 9.71933 5.90918 8.36373 5.90918C7.00812 5.90918 5.90918 7.00812 5.90918 8.36373C5.90918 9.71933 7.00812 10.8183 8.36373 10.8183Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class="contact-subtitle text-gradient-primary">Our Location</div>
							<address>RMK Fincorp, Near SBI Bank, Station Road, Chirawa, Rajasthan 333026</address>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 col-lg-4">
					<div class="contact-us-grid">
						<div class="inner-box-light">
							<div class="contact-media-icon">
								<svg width="23" height="28" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15.7273 8.36364C15.7273 14.0909 8.36364 19 8.36364 19C8.36364 19 1 14.0909 1 8.36364C1 6.41068 1.77581 4.53771 3.15676 3.15676C4.53771 1.77581 6.41068 1 8.36364 1C10.3166 1 12.1896 1.77581 13.5705 3.15676C14.9515 4.53771 15.7273 6.41068 15.7273 8.36364Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M8.36373 10.8183C9.71933 10.8183 10.8183 9.71933 10.8183 8.36373C10.8183 7.00812 9.71933 5.90918 8.36373 5.90918C7.00812 5.90918 5.90918 7.00812 5.90918 8.36373C5.90918 9.71933 7.00812 10.8183 8.36373 10.8183Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class="contact-subtitle text-gradient-primary">Our Location	</div>
							<address>Gil bhawan , Road no.- 3, Jhunjhunu, Raj - 333001</address>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 col-lg-4">
					<div class="contact-us-grid">
						<div class="inner-box-light">
							<div class="contact-media-icon">
								<svg width="23" height="28" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15.7273 8.36364C15.7273 14.0909 8.36364 19 8.36364 19C8.36364 19 1 14.0909 1 8.36364C1 6.41068 1.77581 4.53771 3.15676 3.15676C4.53771 1.77581 6.41068 1 8.36364 1C10.3166 1 12.1896 1.77581 13.5705 3.15676C14.9515 4.53771 15.7273 6.41068 15.7273 8.36364Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M8.36373 10.8183C9.71933 10.8183 10.8183 9.71933 10.8183 8.36373C10.8183 7.00812 9.71933 5.90918 8.36373 5.90918C7.00812 5.90918 5.90918 7.00812 5.90918 8.36373C5.90918 9.71933 7.00812 10.8183 8.36373 10.8183Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class="contact-subtitle text-gradient-primary">Our Location	</div>
							<address>Hotel Nawalgarh plaza near bus depo, Raj - 333042</address>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 col-lg-4">
					<div class="contact-us-grid">
						<div class="inner-box-light">
							<div class="contact-media-icon">
								<svg width="23" height="28" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15.7273 8.36364C15.7273 14.0909 8.36364 19 8.36364 19C8.36364 19 1 14.0909 1 8.36364C1 6.41068 1.77581 4.53771 3.15676 3.15676C4.53771 1.77581 6.41068 1 8.36364 1C10.3166 1 12.1896 1.77581 13.5705 3.15676C14.9515 4.53771 15.7273 6.41068 15.7273 8.36364Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M8.36373 10.8183C9.71933 10.8183 10.8183 9.71933 10.8183 8.36373C10.8183 7.00812 9.71933 5.90918 8.36373 5.90918C7.00812 5.90918 5.90918 7.00812 5.90918 8.36373C5.90918 9.71933 7.00812 10.8183 8.36373 10.8183Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class="contact-subtitle text-gradient-primary">Our Location	</div>
							<address>Singhana, Jhunjhun, Raj - 333516</address>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-4 col-lg-4">
					<div class="contact-us-grid">
						<div class="inner-box-light">
							<div class="contact-media-icon">
								<svg width="23" height="28" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15.7273 8.36364C15.7273 14.0909 8.36364 19 8.36364 19C8.36364 19 1 14.0909 1 8.36364C1 6.41068 1.77581 4.53771 3.15676 3.15676C4.53771 1.77581 6.41068 1 8.36364 1C10.3166 1 12.1896 1.77581 13.5705 3.15676C14.9515 4.53771 15.7273 6.41068 15.7273 8.36364Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M8.36373 10.8183C9.71933 10.8183 10.8183 9.71933 10.8183 8.36373C10.8183 7.00812 9.71933 5.90918 8.36373 5.90918C7.00812 5.90918 5.90918 7.00812 5.90918 8.36373C5.90918 9.71933 7.00812 10.8183 8.36373 10.8183Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class="contact-subtitle text-gradient-primary">Our Location	</div>
							<address>Near P.N. palace gopeshawar basti, Bikaner, Raj - 334001</address>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 col-lg-4">
					<div class="contact-us-grid">
						<div class="inner-box-light">
							<div class="contact-media-icon">
								<svg width="23" height="28" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15.7273 8.36364C15.7273 14.0909 8.36364 19 8.36364 19C8.36364 19 1 14.0909 1 8.36364C1 6.41068 1.77581 4.53771 3.15676 3.15676C4.53771 1.77581 6.41068 1 8.36364 1C10.3166 1 12.1896 1.77581 13.5705 3.15676C14.9515 4.53771 15.7273 6.41068 15.7273 8.36364Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M8.36373 10.8183C9.71933 10.8183 10.8183 9.71933 10.8183 8.36373C10.8183 7.00812 9.71933 5.90918 8.36373 5.90918C7.00812 5.90918 5.90918 7.00812 5.90918 8.36373C5.90918 9.71933 7.00812 10.8183 8.36373 10.8183Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class="contact-subtitle text-gradient-primary">Our Location	</div>
							<address>SK enterprisees Rajgarh road Near bus stand, Jhunjhun, Raj - 333025</address>
						</div>
					</div>
				</div>
				
				
				<div class="col-12 col-md-4 col-lg-4">
					<div class="contact-us-grid">
						<div class="inner-box-light">
							<div class="contact-media-icon">
								<svg width="23" height="28" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15.7273 8.36364C15.7273 14.0909 8.36364 19 8.36364 19C8.36364 19 1 14.0909 1 8.36364C1 6.41068 1.77581 4.53771 3.15676 3.15676C4.53771 1.77581 6.41068 1 8.36364 1C10.3166 1 12.1896 1.77581 13.5705 3.15676C14.9515 4.53771 15.7273 6.41068 15.7273 8.36364Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M8.36373 10.8183C9.71933 10.8183 10.8183 9.71933 10.8183 8.36373C10.8183 7.00812 9.71933 5.90918 8.36373 5.90918C7.00812 5.90918 5.90918 7.00812 5.90918 8.36373C5.90918 9.71933 7.00812 10.8183 8.36373 10.8183Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class="contact-subtitle text-gradient-primary">Our Location	</div>
							<address>Build of chndra jangid, Near SBI bank, Surajgarh, Jhunjhun, Raj - 333029</address>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 col-lg-4">
					<div class="contact-us-grid">
						<div class="inner-box-light">
							<div class="contact-media-icon">
								<svg width="23" height="28" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15.7273 8.36364C15.7273 14.0909 8.36364 19 8.36364 19C8.36364 19 1 14.0909 1 8.36364C1 6.41068 1.77581 4.53771 3.15676 3.15676C4.53771 1.77581 6.41068 1 8.36364 1C10.3166 1 12.1896 1.77581 13.5705 3.15676C14.9515 4.53771 15.7273 6.41068 15.7273 8.36364Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M8.36373 10.8183C9.71933 10.8183 10.8183 9.71933 10.8183 8.36373C10.8183 7.00812 9.71933 5.90918 8.36373 5.90918C7.00812 5.90918 5.90918 7.00812 5.90918 8.36373C5.90918 9.71933 7.00812 10.8183 8.36373 10.8183Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class="contact-subtitle text-gradient-primary">Our Location	</div>
							<address>Ground floor ram ji tower jasinghpura road, Bhakrota, Jaipur, Raj - 302026</address>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 col-lg-4">
					<div class="contact-us-grid">
						<div class="inner-box-light">
							<div class="contact-media-icon">
								<svg width="23" height="28" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15.7273 8.36364C15.7273 14.0909 8.36364 19 8.36364 19C8.36364 19 1 14.0909 1 8.36364C1 6.41068 1.77581 4.53771 3.15676 3.15676C4.53771 1.77581 6.41068 1 8.36364 1C10.3166 1 12.1896 1.77581 13.5705 3.15676C14.9515 4.53771 15.7273 6.41068 15.7273 8.36364Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M8.36373 10.8183C9.71933 10.8183 10.8183 9.71933 10.8183 8.36373C10.8183 7.00812 9.71933 5.90918 8.36373 5.90918C7.00812 5.90918 5.90918 7.00812 5.90918 8.36373C5.90918 9.71933 7.00812 10.8183 8.36373 10.8183Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class="contact-subtitle text-gradient-primary">Our Location	</div>
							<address>1-st floor, Near electric power house, Bus stand, Sadulpur, Jhunjhun, Raj - 331023</address>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 col-lg-4">
					<div class="contact-us-grid">
						<div class="inner-box-light">
							<div class="contact-media-icon">
								<svg width="23" height="28" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M15.7273 8.36364C15.7273 14.0909 8.36364 19 8.36364 19C8.36364 19 1 14.0909 1 8.36364C1 6.41068 1.77581 4.53771 3.15676 3.15676C4.53771 1.77581 6.41068 1 8.36364 1C10.3166 1 12.1896 1.77581 13.5705 3.15676C14.9515 4.53771 15.7273 6.41068 15.7273 8.36364Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M8.36373 10.8183C9.71933 10.8183 10.8183 9.71933 10.8183 8.36373C10.8183 7.00812 9.71933 5.90918 8.36373 5.90918C7.00812 5.90918 5.90918 7.00812 5.90918 8.36373C5.90918 9.71933 7.00812 10.8183 8.36373 10.8183Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class="contact-subtitle text-gradient-primary">Our Location	</div>
							<address>Shop no - 36, Gudha Big Bazar 1-st floor near Bus Stand, Gudha Gorji, Jhunjhun, Raj - 333012</address>
						</div>
					</div>
				</div>
				
			</div>
			<div class="get-in-touch mt-60">
				<div class="global-heading">
					<span class="heading-sub-title text-gradient-primary">Newsletter</span>
					<h3>Get in Touch!</h3>
				</div>
				<form>
					<div class="row">
						<div class="col-12 col-lg-3">
							<div class="form-group">
								<input type="text" name="" class="form-control" placeholder="Enter your Name">
								<span class="icon-fix"><img src="{{asset('assets/images/user-dark.svg')}}" alt="" /></span>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="form-group">
								<input type="text" name="" class="form-control" placeholder="Enter your email">
								<span class="icon-fix"><img src="{{asset('assets/images/envelope-dark.svg')}}" alt="" /></span>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="form-group">
								<input type="text" name="" class="form-control" placeholder="Enter your Phone">
								<span class="icon-fix"><img src="{{asset('assets/images/call-us-dark.svg')}}" alt="" /></span>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="form-group">
								<select class="form-control">
									<option>Subject</option>
									<option>Subject</option>
									<option>Subject</option>
									<option>Subject</option>
									<option>Subject</option>
								</select>
								<span class="icon-fix"><img src="{{asset('assets/images/arrow-dark-down.svg')}}" alt="" /></span>
							</div>
						</div>
						<div class="col-12 col-lg-12">
							<div class="form-group">
								<textarea class="form-control" placeholder="Type Massage"></textarea>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="submit-btn">
								<a class="btn btn-primary" href="#">Submit
						          	<svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1 8H18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M11 1L18 8L11 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- Contact Us End-->

	<!-- Contact map Start -->
	<section class="p-0 contact-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2476.2254753432344!2d0.18640387702700137!3d51.63739570119786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8bc9d56015ac3%3A0x410518a540ecad2e!2sGranite%20Supply%20UK%20Ltd!5e0!3m2!1sen!2sin!4v1684497120581!5m2!1sen!2sin" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>
	<!-- Contact map End -->
@endsection