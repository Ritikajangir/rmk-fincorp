@extends('layouts.header')
@section('title', 'Home')
@section('content')
    <!-- Home Banner -->
	<section class="home-banner">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6">
					<div class="home-banner-content">
						<div class="sub-title">Trusted Financial Guidance</div>
						<h1>Secure Your Financial Future</h1>
						<p>We provide expert financial planning, investment strategies, and wealth management solutions to help you achieve long-term stability and growth.</p>
						<div class="button-block">
							<a class="btn btn-primary" href="{{route('contact-us')}}">Get In Touch
					          	<svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
									<path d="M1 8H18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M11 1L18 8L11 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="home-banner-img d-none">
						<img src="{{asset('assets/images/doctor.png')}}" class="img-fluid" alt="" />
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Home Banner End -->

	<!-- About Us -->
	<section class="about-us why-choose">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6">
					<div class="global-heading">
						<span class="heading-sub-title text-gradient-primary">About Us</span>
						<h3>What’s Our Specialties</h3>
						<p>
							RMK Fincorp Private Limited was incorporated in 1995 and Business has been keeping since 2017. 
							Company has been classified by RBI under loan Company.Main focus area of the company was to provide finance 
							in the interiorrural segments where getting bank finance was not easy. Company startedfinancing of two wheelers 
							to individuals in the rural areas of JhunJhunu, district. Gradually company has also plan to expand its business in 
							other district of Rajasthan. Apart from USED CAR/CV/MUV/HUV/LCV finance company has diversified its activities to all 
							kind of vehicleloans, MSME, Loan against Property,and EV etc
						</p>

						<div class="mt-4">
							<a class="btn btn-primary" href="{{route('pages', 'about-us')}}">
								Get In Touch
								  <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
									<path d="M1 8H18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M11 1L18 8L11 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="about-block position-relative">
						<img src="{{asset('assets/images/about-us.jpg')}}" class="img-fluid rounded-lg" alt="" />
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Us End -->

	<!-- Our Mission -->
	<section class="emergency-contact">
		<div class="container">
			<div class="emergency-contact-img">
				<img src="{{asset('assets/images/help.jpg')}}" class="img-fluid" alt="" />
			</div>
			<div class="row">
				<div class="col-12 col-lg-6"></div>
				<div class="col-12 col-lg-6">
					<div class="emergency-content">
						<div class="global-heading">
							<span class="heading-sub-title">Our Mission</span>
							<h3>Financing Growth, Empowering Futures</h3>
							<p>RMK Fincorp provides affordable loans for vehicles, MSMEs, and property, with a focus on rural and emerging markets. We promote financial inclusion, support entrepreneurship, and drive sustainable growth.</p>
						</div>
						<ul class="contact-desc list-unstyled">
							<li>24/7 Financial Assistance</li>
							<li>Emergency Loan Support – Call Anytime</li>
						</ul>
						<div class="contact-box">
							<a class="contact-box-item d-inline-flex align-items-center" href="tel:{{$settings->phone}}">
								<div class="icon-grid"><img src="{{asset('assets/images/contact.svg')}}" class="img-fluid" alt="" /></div>
								<div class="contact-detail">
									<span class="subheading">Contact Number</span>
									<span class="data">{{$settings->phone}}</span>
								</div>
							</a>
							<a class="contact-box-item d-inline-flex align-items-center" href="mailto:{{$settings->email}}">
								<div class="icon-grid"><img src="{{asset('assets/images/email.svg')}}" class="img-fluid" alt="" /></div>
								<div class="contact-detail">
									<span class="subheading">Quick You Email</span>
									<span class="data">{{$settings->email}}</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Our Mission End -->

	<!-- Why Choose Us -->
	<section class="why-choose">
		<div class="container">
			<div class="row align-items-end">
				<div class="col-12 col-lg-6">
					<div class="global-heading">
						<span class="heading-sub-title text-gradient-primary">Why Choose Us</span>
						<h3>What’s Our Specialties</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
					</div>
					<div class="our-specialist">
						<div class="our-specialist-item">
							<div class="item-icon"><img src="{{asset('assets/images/professional-staff.png')}}" class="img-fluid" alt=""></div>
							<div class="item-content">
								<h4>More Flexible Lending Criteria</h4>
								<p>We tailor our lending options to suit diverse financial needs.</p>
							</div>
						</div>
						<div class="our-specialist-item">
							<div class="item-icon"><img src="{{asset('assets/images/engineering.png')}}" class="img-fluid" alt=""></div>
							<div class="item-content">
								<h4>Quicker Approval Processes</h4>
								<p>Get faster approvals with our streamlined system.</p>
							</div>
						</div>
						<div class="our-specialist-item">
							<div class="item-icon"><img src="{{asset('assets/images/solution.png')}}" class="img-fluid" alt=""></div>
							<div class="item-content">
								<h4>Personalized Solutions</h4>
								<p>Customized financial plans designed just for you.</p>
							</div>
						</div>
						<div class="our-specialist-item">
							<div class="item-icon"><img src="{{asset('assets/images/savings-ratio.png')}}" class="img-fluid" alt=""></div>
							<div class="item-content">
								<h4>Less Intrest Rate</h4>
								<p>Enjoy competitive rates to reduce your repayment burden.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="video-block position-relative">
						<img src="{{asset('assets/images/choose-us.jpg')}}" class="img-fluid" alt="" />
						<a href="" class="play"><img src="{{asset('assets/images/play.svg')}}" class="img-fluid" alt="" /></a>
					</div>
				</div>
			</div>
			<div class="fun-facts bg-primary mt-60">
				<ul class="list-unstyled mb-0 d-flex flex-wrap">
					<li>
						<div class="fun-facts-frame">
							<div class="frame-icon darkicon"><img src="{{asset('assets/images/branch.png')}}" class="img-fluid" alt="" /></div>
							<div class="frame-content">
								<span class="subtitle">12+</span>
								<span class="frame-title">Our Branch</span>
							</div>
						</div>
					</li>
					<li>
						<div class="fun-facts-frame">
							<div class="frame-icon"><img src="{{asset('assets/images/happy-clients.svg')}}" class="img-fluid" alt="" /></div>
							<div class="frame-content">
								<span class="subtitle">3000+</span>
								<span class="frame-title">Our Customer</span>
							</div>
						</div>
					</li>
					<li>
						<div class="fun-facts-frame">
							<div class="frame-icon darkicon"><img src="{{asset('assets/images/employee.png')}}" class="img-fluid" alt="" /></div>
							<div class="frame-content">
								<span class="subtitle">52+</span>
								<span class="frame-title">Our Employee</span>
							</div>
						</div>
					</li>
					<li>
						<div class="fun-facts-frame">
							<div class="frame-icon"><img src="{{asset('assets/images/medal.svg')}}" class="img-fluid" alt="" /></div>
							<div class="frame-content">
								<span class="subtitle">125+</span>
								<span class="frame-title">Winning Awards</span>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- Why Choose Us End -->

	<!-- Our Doctors -->
	@if(count($teamMembers))
	<section class="our-temes bg-secondary">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-12 col-xl-7">
					<div class="global-heading">
						<span class="heading-sub-title">Our Team</span>
						<h3>Meet Our Expert Team</h3>
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, unde voluptates? Aut non aliquid dignissimos quibusdam molestias sit dolores nihil unde fugit, amet aspernatur sequi ad voluptate! Magni, obcaecati nisi!
						</p>
					</div>
				</div>
			</div>
			<div class="our-temes-figure mt-60">
				<div class="owl-carousel owl-theme" id="ourdoctor">
					@foreach($teamMembers as $teamMember)
						<div class="item">
							<div class="experts">
								<div class="experts-data">
									<div class="expert-img"><img src="{{ asset('storage/' . $teamMember->image) }}" class="img-fluid" alt="" /></div>
									<div class="expert-details">
										<h4>{{$teamMember->name}}</h4>
										<span class="occupation text-gradient-primary">{{$teamMember->designation}}</span>
										<ul class="d-flex align-items-center justify-content-center social-icons list-unstyled mb-0">
											@if($teamMember->facebook)
											<li>
												<a href="{{$teamMember->facebook}}" target="_blank">
													<svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
														<path d="M6.66667 11.5H9.04762L10 7.5H6.66667V5.5C6.66667 4.47062 6.66667 3.5 8.57143 3.5H10V0.1401C9.68981 0.09685 8.51714 0 7.27895 0C4.69371 0 2.85714 1.65686 2.85714 4.69971V7.5H0V11.5H2.85714V20H6.66667V11.5Z" fill="#DBDBDB"/>
													</svg>
												</a>
											</li>
											@endif
											@if($teamMember->twitter)
											<li>
												<a href="{{$teamMember->twitter}}" target="_blank">
													<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
														<path d="M20 1.89471C19.251 2.22088 18.4567 2.43511 17.6434 2.5303C18.5002 2.02536 19.1414 1.23103 19.4474 0.295272C18.6423 0.76618 17.761 1.09762 16.842 1.27518C16.0662 0.460441 14.9819 -0.00126267 13.8475 2.59368e-06C11.5819 2.59368e-06 9.7443 1.80833 9.7443 4.03965C9.7443 4.3562 9.7812 4.66319 9.85017 4.95939C6.43861 4.79031 3.41629 3.18315 1.39191 0.738943C1.02742 1.3554 0.835866 2.05614 0.836837 2.7694C0.836837 4.17077 1.56147 5.40768 2.66221 6.13184C2.01061 6.11155 1.37337 5.93832 0.803615 5.62644C0.802987 5.64341 0.802987 5.66038 0.802987 5.67642C0.802987 7.63412 2.21745 9.26717 4.09517 9.63796C3.74275 9.73184 3.37925 9.77926 3.01417 9.77897C2.74902 9.77897 2.4917 9.75492 2.24159 9.70769C2.76407 11.3122 4.27851 12.4803 6.07473 12.5123C4.62119 13.6353 2.82625 14.2446 0.978504 14.242C0.651479 14.2422 0.324729 14.2232 0 14.1852C1.87587 15.3723 4.05938 16.0023 6.28942 16C13.8375 16 17.9646 9.84504 17.9646 4.50739C17.9646 4.33275 17.9603 4.15751 17.9525 3.98473C18.7557 3.41341 19.4491 2.70566 20 1.89471Z" fill="#DBDBDB"/>
													</svg>
												</a>
											</li>
											@endif
											@if($teamMember->linkedin)
											<li>
												<a href="{{$teamMember->linkedin}}" target="_blank">
													<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M15.8238 14.9292L15.8275 14.9285V9.48364C15.8275 6.81996 15.2537 4.76807 12.1378 4.76807C10.6399 4.76807 9.63464 5.58956 9.22426 6.36838H9.18093V5.01674H6.22656V14.9285H9.30287V10.0206C9.30287 8.72833 9.54798 7.47876 11.1493 7.47876C12.727 7.47876 12.7506 8.9535 12.7506 10.1035V14.9292H15.8238Z" fill="#DDE1ED"/>
														<path d="M1.21729 5.01807H4.2973V14.9299H1.21729V5.01807Z" fill="#DDE1ED"/>
														<path d="M2.75605 0.0830078C1.77126 0.0830078 0.972168 0.881618 0.972168 1.86581C0.972168 2.85 1.77126 3.66531 2.75605 3.66531C3.74084 3.66531 4.53994 2.85 4.53994 1.86581C4.53932 0.881618 3.74022 0.0830078 2.75605 0.0830078Z" fill="#DDE1ED"/>
													</svg>
												</a>
											</li>
											@endif
											@if($teamMember->instagram)
											<li>
												<a href="{{$teamMember->instagram}}" target="_blank">
													<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M15.8616 4.65603C15.8245 3.81456 15.6883 3.23607 15.4933 2.73479C15.292 2.2027 14.9825 1.72631 14.5769 1.33029C14.1807 0.928112 13.7008 0.615599 13.1746 0.41765C12.6701 0.222723 12.0943 0.086648 11.2523 0.0495476C10.404 0.00930528 10.1347 0 7.98331 0C5.83187 0 5.56258 0.00930528 4.71746 0.0464056C3.87548 0.0835059 3.29663 0.219701 2.79517 0.414508C2.26263 0.615599 1.78596 0.92497 1.3897 1.33029C0.987271 1.72631 0.674689 2.20584 0.476499 2.73177C0.281452 3.23607 0.145294 3.81142 0.108172 4.65289C0.0679047 5.50063 0.0585938 5.76976 0.0585938 7.91989C0.0585938 10.07 0.0679047 10.3391 0.105028 11.1837C0.142151 12.0252 0.278429 12.6037 0.473475 13.105C0.674689 13.6371 0.987271 14.1135 1.3897 14.5095C1.78596 14.9117 2.26577 15.2242 2.79202 15.4221C3.29663 15.6171 3.87234 15.7531 4.71444 15.7902C5.55943 15.8275 5.82885 15.8366 7.98028 15.8366C10.1317 15.8366 10.401 15.8275 11.2461 15.7902C12.0881 15.7531 12.667 15.6171 13.1684 15.4221C14.2334 15.0106 15.0754 14.1692 15.4871 13.105C15.682 12.6007 15.8183 12.0252 15.8554 11.1837C15.8925 10.3391 15.9019 10.07 15.9019 7.91989C15.9019 5.76976 15.8987 5.50063 15.8616 4.65603ZM14.4346 11.1219C14.4005 11.8953 14.2705 12.313 14.1622 12.5914C13.8959 13.2813 13.348 13.8289 12.6576 14.095C12.379 14.2033 11.9581 14.3332 11.1872 14.3671C10.3514 14.4043 10.1008 14.4135 7.98645 14.4135C5.87214 14.4135 5.61832 14.4043 4.78554 14.3671C4.01164 14.3332 3.59373 14.2033 3.31513 14.095C2.97159 13.9681 2.65889 13.767 2.40508 13.504C2.14195 13.2472 1.94074 12.9379 1.81377 12.5945C1.70542 12.3161 1.57543 11.8953 1.54145 11.125C1.50421 10.2897 1.49502 10.0391 1.49502 7.92605C1.49502 5.81303 1.50421 5.55937 1.54145 4.72721C1.57543 3.95378 1.70542 3.53613 1.81377 3.2577C1.94074 2.91425 2.14195 2.60186 2.40822 2.34807C2.66506 2.08511 2.97462 1.88402 3.31828 1.75725C3.59688 1.64897 4.01793 1.51906 4.78868 1.48498C5.62449 1.44788 5.87528 1.43857 7.98947 1.43857C10.1069 1.43857 10.3576 1.44788 11.1904 1.48498C11.9643 1.51906 12.3822 1.64897 12.6608 1.75725C13.0043 1.88402 13.317 2.08511 13.5708 2.34807C13.834 2.60488 14.0352 2.91425 14.1622 3.2577C14.2705 3.53613 14.4005 3.9568 14.4346 4.72721C14.4717 5.56251 14.481 5.81303 14.481 7.92605C14.481 10.0391 14.4717 10.2866 14.4346 11.1219Z" fill="#DDE1ED"/>
														<path d="M7.98336 3.85156C5.73604 3.85156 3.91266 5.67371 3.91266 7.91979C3.91266 10.1659 5.73604 11.988 7.98336 11.988C10.2308 11.988 12.0541 10.1659 12.0541 7.91979C12.0541 5.67371 10.2308 3.85156 7.98336 3.85156ZM7.98336 10.5587C6.52541 10.5587 5.3428 9.37697 5.3428 7.91979C5.3428 6.4626 6.52541 5.28083 7.98336 5.28083C9.44143 5.28083 10.6239 6.4626 10.6239 7.91979C10.6239 9.37697 9.44143 10.5587 7.98336 10.5587Z" fill="#DDE1ED"/>
														<path d="M13.1664 3.69047C13.1664 4.21495 12.7407 4.64021 12.2155 4.64021C11.6904 4.64021 11.2647 4.21495 11.2647 3.69047C11.2647 3.16587 11.6904 2.74072 12.2155 2.74072C12.7407 2.74072 13.1664 3.16587 13.1664 3.69047Z" fill="#DDE1ED"/>
													</svg>	
												</a>
											</li>
											@endif
										</ul>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	@endif
	<!-- Our Doctors End-->

	<!-- Testimonials -->
	@if(count($testimonials))
	<section class="testimonial-main">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-12 col-lg-12 col-xl-7">
					<div class="global-heading center">
						<span class="heading-sub-title text-gradient-primary">Testimonial</span>
						<h3>What Our Clients Says</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
				</div>
			</div>
			<div class="testimonial-slider mt-60">
				<div class="owl-carousel owl-theme" id="testimonial">
					@foreach($testimonials as $testimonial)
						<div class="item">
							<div class="testimonial-inner">
								<div class="testimonial-img"><img src="{{ asset('storage/' . $testimonial->photo) }}" class="img-fluid" alt="" /></div>
								<div class="testimonial-content-block">
									<ul class="list-inline ratings">
										<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
										<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
										<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
										<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
										<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
									</ul>
									<div class="testimonial-desc">
										{{$testimonial->message}}
									</div>
									<h4 class="author-name">{{$testimonial->name}}</h4>
									<span class="author-title">{{$testimonial->position}}</span>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	@endif
	<!-- Testimonials End -->
@endsection