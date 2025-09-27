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
							<a class="btn btn-primary" href="contact-us.html">Get In Touch
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
							<a class="btn btn-primary" href="contact-us.html">
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

	<!-- Our Services -->
	<section class="our-services"> 
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-12 col-lg-12 col-xl-7">
					<div class="global-heading center">
						<span class="heading-sub-title text-gradient-primary">Our Services</span>
						<h3>We Provide Various Directions</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
					</div>
				</div>
			</div>
			<div class="service-block mt-60">
				<div class="owl-carousel owl-theme" id="ourservices">
				    <div class="item">
				    	<div class="service-card">
				    		<div class="service-box">
				    			<div class="icon-box">
				    				<img src="{{asset('assets/images/loan.png')}}" class="img-fluid" alt="" />
				    			</div>
				    			<h4 class="title">MSME Loan</h4>
				    			<p>
									MSME Loans also known as Micro Small and Medium Enterprise Loans are types of loans which you can avail if you...
								</p>
				    			<div class="read-more">
				    				<a class="btn btn-secondary" href="services-details.html">Read More
							          	<svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
											<path d="M1 8H18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11 1L18 8L11 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</a>
				    			</div>
				    		</div>
				    	</div>
				    </div>
				    <div class="item">
				    	<div class="service-card">
				    		<div class="service-box">
				    			<div class="icon-box">
				    				<img src="{{asset('assets/images/tractor.png')}}" class="img-fluid" alt="" />
				    			</div>
				    			<h4 class="title">Tractor Loan</h4>
				    			<p>RMK Fincorp offers agricultural term loans to those who wish to purchase new tractors and related accessories Individuals groups of individuals...</p>
				    			<div class="read-more">
				    				<a class="btn btn-secondary" href="services-details.html">Read More
							          	<svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
											<path d="M1 8H18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11 1L18 8L11 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</a>
				    			</div>
				    		</div>
				    	</div>
				    </div>
				    <div class="item">
				    	<div class="service-card">
				    		<div class="service-box">
				    			<div class="icon-box">
				    				<img src="{{asset('assets/images/properties-loan.png')}}" class="img-fluid" alt="" />
				    			</div>
				    			<h4 class="title">Loan Aganist Properties</h4>
				    			<p>Loan against property LAP is a type of loan facility availed by individuals and businesses against the mortgage of a commercial...</p>
				    			<div class="read-more">
				    				<a class="btn btn-secondary" href="services-details.html">Read More
							          	<svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
											<path d="M1 8H18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11 1L18 8L11 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</a>
				    			</div>
				    		</div>
				    	</div>
				    </div>
				    <div class="item">
				    	<div class="service-card">
				    		<div class="service-box">
				    			<div class="icon-box">
				    				<img src="{{asset('assets/images/car-loan.png')}}" class="img-fluid" alt="" />
				    			</div>
				    			<h4 class="title">Car Loan</h4>
				    			<p>RMK Fincorp Vehicle Loan is a loan that allows you to purchase two and four wheelers for personal use Typically the...</p>
				    			<div class="read-more">
				    				<a class="btn btn-secondary" href="services-details.html">Read More
							          	<svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
											<path d="M1 8H18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11 1L18 8L11 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</a>
				    			</div>
				    		</div>
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	</section>
	<!-- Our Services End -->

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
							<a class="contact-box-item d-inline-flex align-items-center" href="tel:9504558888">
								<div class="icon-grid"><img src="{{asset('assets/images/contact.svg')}}" class="img-fluid" alt="" /></div>
								<div class="contact-detail">
									<span class="subheading">Contact Number</span>
									<span class="data">+ 91 9504558888</span>
								</div>
							</a>
							<a class="contact-box-item d-inline-flex align-items-center" href="mailto:info@rmkfincorp.com">
								<div class="icon-grid"><img src="{{asset('assets/images/email.svg')}}" class="img-fluid" alt="" /></div>
								<div class="contact-detail">
									<span class="subheading">Quick You Email</span>
									<span class="data">info@rmkfincorp.com</span>
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
				    <div class="item">
				    	<div class="experts">
				    		<div class="experts-data">
				    			<div class="expert-img"><img src="{{asset('assets/images/expert-2.jpg')}}" class="img-fluid" alt="" /></div>
				    			<div class="expert-details">
				    				<h4><a href="doctor-details.html">Mahendra kulhar</a></h4>
				    				<span class="occupation text-gradient-primary">Financial Consultant</span>
				    				<ul class="d-flex align-items-center justify-content-center social-icons list-unstyled mb-0">
				    					<li>
				    						<a href="#">
					    						<svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M6.66667 11.5H9.04762L10 7.5H6.66667V5.5C6.66667 4.47062 6.66667 3.5 8.57143 3.5H10V0.1401C9.68981 0.09685 8.51714 0 7.27895 0C4.69371 0 2.85714 1.65686 2.85714 4.69971V7.5H0V11.5H2.85714V20H6.66667V11.5Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    					<li>
				    						<a href="#">
					    						<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M20 1.89471C19.251 2.22088 18.4567 2.43511 17.6434 2.5303C18.5002 2.02536 19.1414 1.23103 19.4474 0.295272C18.6423 0.76618 17.761 1.09762 16.842 1.27518C16.0662 0.460441 14.9819 -0.00126267 13.8475 2.59368e-06C11.5819 2.59368e-06 9.7443 1.80833 9.7443 4.03965C9.7443 4.3562 9.7812 4.66319 9.85017 4.95939C6.43861 4.79031 3.41629 3.18315 1.39191 0.738943C1.02742 1.3554 0.835866 2.05614 0.836837 2.7694C0.836837 4.17077 1.56147 5.40768 2.66221 6.13184C2.01061 6.11155 1.37337 5.93832 0.803615 5.62644C0.802987 5.64341 0.802987 5.66038 0.802987 5.67642C0.802987 7.63412 2.21745 9.26717 4.09517 9.63796C3.74275 9.73184 3.37925 9.77926 3.01417 9.77897C2.74902 9.77897 2.4917 9.75492 2.24159 9.70769C2.76407 11.3122 4.27851 12.4803 6.07473 12.5123C4.62119 13.6353 2.82625 14.2446 0.978504 14.242C0.651479 14.2422 0.324729 14.2232 0 14.1852C1.87587 15.3723 4.05938 16.0023 6.28942 16C13.8375 16 17.9646 9.84504 17.9646 4.50739C17.9646 4.33275 17.9603 4.15751 17.9525 3.98473C18.7557 3.41341 19.4491 2.70566 20 1.89471Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    					<li>
				    						<a href="#">
					    						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M11.0271 0C12.1525 0.00186 12.7228 0.00781001 13.2156 0.02248L13.4097 0.0288301C13.6339 0.0368 13.8551 0.0468002 14.1218 0.0593002C15.1859 0.10846 15.9118 0.2768 16.5493 0.5243C17.2084 0.77846 17.7651 1.1218 18.3209 1.67763C18.8759 2.23346 19.2193 2.7918 19.4743 3.4493C19.7209 4.08596 19.8893 4.81263 19.9393 5.8768C19.9512 6.14346 19.9608 6.36466 19.9687 6.58891L19.975 6.78299C19.9896 7.27574 19.9963 7.84612 19.9984 8.97152L19.9992 9.71722C19.9993 9.80832 19.9993 9.90232 19.9993 9.99932L19.9992 10.2814L19.9986 11.0271C19.9967 12.1525 19.9908 12.7228 19.9761 13.2156L19.9697 13.4097C19.9618 13.6339 19.9518 13.8551 19.9393 14.1218C19.8901 15.1859 19.7209 15.9118 19.4743 16.5493C19.2201 17.2084 18.8759 17.7651 18.3209 18.3209C17.7651 18.8759 17.2059 19.2193 16.5493 19.4743C15.9118 19.7209 15.1859 19.8893 14.1218 19.9393C13.8551 19.9512 13.6339 19.9608 13.4097 19.9687L13.2156 19.975C12.7228 19.9896 12.1525 19.9963 11.0271 19.9984L10.2814 19.9992C10.1903 19.9993 10.0963 19.9993 9.99932 19.9993L9.71722 19.9992L8.97152 19.9986C7.84612 19.9967 7.27574 19.9908 6.78299 19.9761L6.58891 19.9697C6.36466 19.9618 6.14346 19.9518 5.8768 19.9393C4.81263 19.8901 4.08763 19.7209 3.4493 19.4743C2.79096 19.2201 2.23346 18.8759 1.67763 18.3209C1.1218 17.7651 0.7793 17.2059 0.5243 16.5493C0.2768 15.9118 0.1093 15.1859 0.0593002 14.1218C0.0474202 13.8551 0.03773 13.6339 0.02988 13.4097L0.0235901 13.2156C0.00896009 12.7228 0.00229018 12.1525 0.000130177 11.0271L0 8.97152C0.00186 7.84612 0.00781001 7.27574 0.02248 6.78299L0.0288301 6.58891C0.0368 6.36466 0.0468002 6.14346 0.0593002 5.8768C0.10846 4.8118 0.2768 4.0868 0.5243 3.4493C0.77846 2.79096 1.1218 2.23346 1.67763 1.67763C2.23346 1.1218 2.7918 0.7793 3.4493 0.5243C4.0868 0.2768 4.8118 0.1093 5.8768 0.0593002C6.14346 0.0474202 6.36466 0.03773 6.58891 0.02988L6.78299 0.0235901C7.27574 0.00896009 7.84612 0.00229018 8.97152 0.000130177L11.0271 0ZM9.99932 4.9993C7.2364 4.9993 4.9993 7.23883 4.9993 9.99932C4.9993 12.7622 7.23883 14.9993 9.99932 14.9993C12.7622 14.9993 14.9993 12.7597 14.9993 9.99932C14.9993 7.2364 12.7597 4.9993 9.99932 4.9993ZM9.99932 6.9993C11.6562 6.9993 12.9993 8.34192 12.9993 9.99932C12.9993 11.6562 11.6566 12.9993 9.99932 12.9993C8.34242 12.9993 6.9993 11.6566 6.9993 9.99932C6.9993 8.34242 8.34192 6.9993 9.99932 6.9993ZM15.2493 3.4993C14.56 3.4993 13.9993 4.0592 13.9993 4.74845C13.9993 5.43769 14.5592 5.99846 15.2493 5.99846C15.9385 5.99846 16.4993 5.43856 16.4993 4.74845C16.4993 4.0592 15.9376 3.49843 15.2493 3.4993Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    				</ul>
				    			</div>
				    		</div>
				    	</div>
				    </div>
				    <div class="item">
				    	<div class="experts">
				    		<div class="experts-data">
				    			<div class="expert-img"><img src="{{asset('assets/images/expert-3.jpg')}}" class="img-fluid" alt="" /></div>
				    			<div class="expert-details">
				    				<h4><a href="doctor-details.html">Dharamveer Katewa</a></h4>
				    				<span class="occupation text-gradient-primary">Regional Head</span>
				    				<ul class="d-flex align-items-center justify-content-center social-icons list-unstyled mb-0">
				    					<li>
				    						<a href="#">
					    						<svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M6.66667 11.5H9.04762L10 7.5H6.66667V5.5C6.66667 4.47062 6.66667 3.5 8.57143 3.5H10V0.1401C9.68981 0.09685 8.51714 0 7.27895 0C4.69371 0 2.85714 1.65686 2.85714 4.69971V7.5H0V11.5H2.85714V20H6.66667V11.5Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    					<li>
				    						<a href="#">
					    						<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M20 1.89471C19.251 2.22088 18.4567 2.43511 17.6434 2.5303C18.5002 2.02536 19.1414 1.23103 19.4474 0.295272C18.6423 0.76618 17.761 1.09762 16.842 1.27518C16.0662 0.460441 14.9819 -0.00126267 13.8475 2.59368e-06C11.5819 2.59368e-06 9.7443 1.80833 9.7443 4.03965C9.7443 4.3562 9.7812 4.66319 9.85017 4.95939C6.43861 4.79031 3.41629 3.18315 1.39191 0.738943C1.02742 1.3554 0.835866 2.05614 0.836837 2.7694C0.836837 4.17077 1.56147 5.40768 2.66221 6.13184C2.01061 6.11155 1.37337 5.93832 0.803615 5.62644C0.802987 5.64341 0.802987 5.66038 0.802987 5.67642C0.802987 7.63412 2.21745 9.26717 4.09517 9.63796C3.74275 9.73184 3.37925 9.77926 3.01417 9.77897C2.74902 9.77897 2.4917 9.75492 2.24159 9.70769C2.76407 11.3122 4.27851 12.4803 6.07473 12.5123C4.62119 13.6353 2.82625 14.2446 0.978504 14.242C0.651479 14.2422 0.324729 14.2232 0 14.1852C1.87587 15.3723 4.05938 16.0023 6.28942 16C13.8375 16 17.9646 9.84504 17.9646 4.50739C17.9646 4.33275 17.9603 4.15751 17.9525 3.98473C18.7557 3.41341 19.4491 2.70566 20 1.89471Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    					<li>
				    						<a href="#">
					    						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M11.0271 0C12.1525 0.00186 12.7228 0.00781001 13.2156 0.02248L13.4097 0.0288301C13.6339 0.0368 13.8551 0.0468002 14.1218 0.0593002C15.1859 0.10846 15.9118 0.2768 16.5493 0.5243C17.2084 0.77846 17.7651 1.1218 18.3209 1.67763C18.8759 2.23346 19.2193 2.7918 19.4743 3.4493C19.7209 4.08596 19.8893 4.81263 19.9393 5.8768C19.9512 6.14346 19.9608 6.36466 19.9687 6.58891L19.975 6.78299C19.9896 7.27574 19.9963 7.84612 19.9984 8.97152L19.9992 9.71722C19.9993 9.80832 19.9993 9.90232 19.9993 9.99932L19.9992 10.2814L19.9986 11.0271C19.9967 12.1525 19.9908 12.7228 19.9761 13.2156L19.9697 13.4097C19.9618 13.6339 19.9518 13.8551 19.9393 14.1218C19.8901 15.1859 19.7209 15.9118 19.4743 16.5493C19.2201 17.2084 18.8759 17.7651 18.3209 18.3209C17.7651 18.8759 17.2059 19.2193 16.5493 19.4743C15.9118 19.7209 15.1859 19.8893 14.1218 19.9393C13.8551 19.9512 13.6339 19.9608 13.4097 19.9687L13.2156 19.975C12.7228 19.9896 12.1525 19.9963 11.0271 19.9984L10.2814 19.9992C10.1903 19.9993 10.0963 19.9993 9.99932 19.9993L9.71722 19.9992L8.97152 19.9986C7.84612 19.9967 7.27574 19.9908 6.78299 19.9761L6.58891 19.9697C6.36466 19.9618 6.14346 19.9518 5.8768 19.9393C4.81263 19.8901 4.08763 19.7209 3.4493 19.4743C2.79096 19.2201 2.23346 18.8759 1.67763 18.3209C1.1218 17.7651 0.7793 17.2059 0.5243 16.5493C0.2768 15.9118 0.1093 15.1859 0.0593002 14.1218C0.0474202 13.8551 0.03773 13.6339 0.02988 13.4097L0.0235901 13.2156C0.00896009 12.7228 0.00229018 12.1525 0.000130177 11.0271L0 8.97152C0.00186 7.84612 0.00781001 7.27574 0.02248 6.78299L0.0288301 6.58891C0.0368 6.36466 0.0468002 6.14346 0.0593002 5.8768C0.10846 4.8118 0.2768 4.0868 0.5243 3.4493C0.77846 2.79096 1.1218 2.23346 1.67763 1.67763C2.23346 1.1218 2.7918 0.7793 3.4493 0.5243C4.0868 0.2768 4.8118 0.1093 5.8768 0.0593002C6.14346 0.0474202 6.36466 0.03773 6.58891 0.02988L6.78299 0.0235901C7.27574 0.00896009 7.84612 0.00229018 8.97152 0.000130177L11.0271 0ZM9.99932 4.9993C7.2364 4.9993 4.9993 7.23883 4.9993 9.99932C4.9993 12.7622 7.23883 14.9993 9.99932 14.9993C12.7622 14.9993 14.9993 12.7597 14.9993 9.99932C14.9993 7.2364 12.7597 4.9993 9.99932 4.9993ZM9.99932 6.9993C11.6562 6.9993 12.9993 8.34192 12.9993 9.99932C12.9993 11.6562 11.6566 12.9993 9.99932 12.9993C8.34242 12.9993 6.9993 11.6566 6.9993 9.99932C6.9993 8.34242 8.34192 6.9993 9.99932 6.9993ZM15.2493 3.4993C14.56 3.4993 13.9993 4.0592 13.9993 4.74845C13.9993 5.43769 14.5592 5.99846 15.2493 5.99846C15.9385 5.99846 16.4993 5.43856 16.4993 4.74845C16.4993 4.0592 15.9376 3.49843 15.2493 3.4993Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    				</ul>
				    			</div>
				    		</div>
				    	</div>
				    </div>
				    <div class="item">
				    	<div class="experts">
				    		<div class="experts-data">
				    			<div class="expert-img"><img src="{{asset('assets/images/expert-4.jpg')}}" class="img-fluid" alt="" /></div>
				    			<div class="expert-details">
				    				<h4><a href="doctor-details.html">Abhishek Lamoria</a></h4>
				    				<span class="occupation text-gradient-primary">Accounting Manager</span>
				    				<ul class="d-flex align-items-center justify-content-center social-icons list-unstyled mb-0">
				    					<li>
				    						<a href="#">
					    						<svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M6.66667 11.5H9.04762L10 7.5H6.66667V5.5C6.66667 4.47062 6.66667 3.5 8.57143 3.5H10V0.1401C9.68981 0.09685 8.51714 0 7.27895 0C4.69371 0 2.85714 1.65686 2.85714 4.69971V7.5H0V11.5H2.85714V20H6.66667V11.5Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    					<li>
				    						<a href="#">
					    						<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M20 1.89471C19.251 2.22088 18.4567 2.43511 17.6434 2.5303C18.5002 2.02536 19.1414 1.23103 19.4474 0.295272C18.6423 0.76618 17.761 1.09762 16.842 1.27518C16.0662 0.460441 14.9819 -0.00126267 13.8475 2.59368e-06C11.5819 2.59368e-06 9.7443 1.80833 9.7443 4.03965C9.7443 4.3562 9.7812 4.66319 9.85017 4.95939C6.43861 4.79031 3.41629 3.18315 1.39191 0.738943C1.02742 1.3554 0.835866 2.05614 0.836837 2.7694C0.836837 4.17077 1.56147 5.40768 2.66221 6.13184C2.01061 6.11155 1.37337 5.93832 0.803615 5.62644C0.802987 5.64341 0.802987 5.66038 0.802987 5.67642C0.802987 7.63412 2.21745 9.26717 4.09517 9.63796C3.74275 9.73184 3.37925 9.77926 3.01417 9.77897C2.74902 9.77897 2.4917 9.75492 2.24159 9.70769C2.76407 11.3122 4.27851 12.4803 6.07473 12.5123C4.62119 13.6353 2.82625 14.2446 0.978504 14.242C0.651479 14.2422 0.324729 14.2232 0 14.1852C1.87587 15.3723 4.05938 16.0023 6.28942 16C13.8375 16 17.9646 9.84504 17.9646 4.50739C17.9646 4.33275 17.9603 4.15751 17.9525 3.98473C18.7557 3.41341 19.4491 2.70566 20 1.89471Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    					<li>
				    						<a href="#">
					    						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M11.0271 0C12.1525 0.00186 12.7228 0.00781001 13.2156 0.02248L13.4097 0.0288301C13.6339 0.0368 13.8551 0.0468002 14.1218 0.0593002C15.1859 0.10846 15.9118 0.2768 16.5493 0.5243C17.2084 0.77846 17.7651 1.1218 18.3209 1.67763C18.8759 2.23346 19.2193 2.7918 19.4743 3.4493C19.7209 4.08596 19.8893 4.81263 19.9393 5.8768C19.9512 6.14346 19.9608 6.36466 19.9687 6.58891L19.975 6.78299C19.9896 7.27574 19.9963 7.84612 19.9984 8.97152L19.9992 9.71722C19.9993 9.80832 19.9993 9.90232 19.9993 9.99932L19.9992 10.2814L19.9986 11.0271C19.9967 12.1525 19.9908 12.7228 19.9761 13.2156L19.9697 13.4097C19.9618 13.6339 19.9518 13.8551 19.9393 14.1218C19.8901 15.1859 19.7209 15.9118 19.4743 16.5493C19.2201 17.2084 18.8759 17.7651 18.3209 18.3209C17.7651 18.8759 17.2059 19.2193 16.5493 19.4743C15.9118 19.7209 15.1859 19.8893 14.1218 19.9393C13.8551 19.9512 13.6339 19.9608 13.4097 19.9687L13.2156 19.975C12.7228 19.9896 12.1525 19.9963 11.0271 19.9984L10.2814 19.9992C10.1903 19.9993 10.0963 19.9993 9.99932 19.9993L9.71722 19.9992L8.97152 19.9986C7.84612 19.9967 7.27574 19.9908 6.78299 19.9761L6.58891 19.9697C6.36466 19.9618 6.14346 19.9518 5.8768 19.9393C4.81263 19.8901 4.08763 19.7209 3.4493 19.4743C2.79096 19.2201 2.23346 18.8759 1.67763 18.3209C1.1218 17.7651 0.7793 17.2059 0.5243 16.5493C0.2768 15.9118 0.1093 15.1859 0.0593002 14.1218C0.0474202 13.8551 0.03773 13.6339 0.02988 13.4097L0.0235901 13.2156C0.00896009 12.7228 0.00229018 12.1525 0.000130177 11.0271L0 8.97152C0.00186 7.84612 0.00781001 7.27574 0.02248 6.78299L0.0288301 6.58891C0.0368 6.36466 0.0468002 6.14346 0.0593002 5.8768C0.10846 4.8118 0.2768 4.0868 0.5243 3.4493C0.77846 2.79096 1.1218 2.23346 1.67763 1.67763C2.23346 1.1218 2.7918 0.7793 3.4493 0.5243C4.0868 0.2768 4.8118 0.1093 5.8768 0.0593002C6.14346 0.0474202 6.36466 0.03773 6.58891 0.02988L6.78299 0.0235901C7.27574 0.00896009 7.84612 0.00229018 8.97152 0.000130177L11.0271 0ZM9.99932 4.9993C7.2364 4.9993 4.9993 7.23883 4.9993 9.99932C4.9993 12.7622 7.23883 14.9993 9.99932 14.9993C12.7622 14.9993 14.9993 12.7597 14.9993 9.99932C14.9993 7.2364 12.7597 4.9993 9.99932 4.9993ZM9.99932 6.9993C11.6562 6.9993 12.9993 8.34192 12.9993 9.99932C12.9993 11.6562 11.6566 12.9993 9.99932 12.9993C8.34242 12.9993 6.9993 11.6566 6.9993 9.99932C6.9993 8.34242 8.34192 6.9993 9.99932 6.9993ZM15.2493 3.4993C14.56 3.4993 13.9993 4.0592 13.9993 4.74845C13.9993 5.43769 14.5592 5.99846 15.2493 5.99846C15.9385 5.99846 16.4993 5.43856 16.4993 4.74845C16.4993 4.0592 15.9376 3.49843 15.2493 3.4993Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    				</ul>
				    			</div>
				    		</div>
				    	</div>
				    </div>
				    <div class="item">
				    	<div class="experts">
				    		<div class="experts-data">
				    			<div class="expert-img"><img src="{{asset('assets/images/expert-1.jpg')}}" class="img-fluid" alt="" /></div>
				    			<div class="expert-details">
				    				<h4><a href="doctor-details.html">Abhishek Bhalothia</a></h4>
				    				<span class="occupation text-gradient-primary">Manager</span>
				    				<ul class="d-flex align-items-center justify-content-center social-icons list-unstyled mb-0">
				    					<li>
				    						<a href="#">
					    						<svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M6.66667 11.5H9.04762L10 7.5H6.66667V5.5C6.66667 4.47062 6.66667 3.5 8.57143 3.5H10V0.1401C9.68981 0.09685 8.51714 0 7.27895 0C4.69371 0 2.85714 1.65686 2.85714 4.69971V7.5H0V11.5H2.85714V20H6.66667V11.5Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    					<li>
				    						<a href="#">
					    						<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M20 1.89471C19.251 2.22088 18.4567 2.43511 17.6434 2.5303C18.5002 2.02536 19.1414 1.23103 19.4474 0.295272C18.6423 0.76618 17.761 1.09762 16.842 1.27518C16.0662 0.460441 14.9819 -0.00126267 13.8475 2.59368e-06C11.5819 2.59368e-06 9.7443 1.80833 9.7443 4.03965C9.7443 4.3562 9.7812 4.66319 9.85017 4.95939C6.43861 4.79031 3.41629 3.18315 1.39191 0.738943C1.02742 1.3554 0.835866 2.05614 0.836837 2.7694C0.836837 4.17077 1.56147 5.40768 2.66221 6.13184C2.01061 6.11155 1.37337 5.93832 0.803615 5.62644C0.802987 5.64341 0.802987 5.66038 0.802987 5.67642C0.802987 7.63412 2.21745 9.26717 4.09517 9.63796C3.74275 9.73184 3.37925 9.77926 3.01417 9.77897C2.74902 9.77897 2.4917 9.75492 2.24159 9.70769C2.76407 11.3122 4.27851 12.4803 6.07473 12.5123C4.62119 13.6353 2.82625 14.2446 0.978504 14.242C0.651479 14.2422 0.324729 14.2232 0 14.1852C1.87587 15.3723 4.05938 16.0023 6.28942 16C13.8375 16 17.9646 9.84504 17.9646 4.50739C17.9646 4.33275 17.9603 4.15751 17.9525 3.98473C18.7557 3.41341 19.4491 2.70566 20 1.89471Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    					<li>
				    						<a href="#">
					    						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M11.0271 0C12.1525 0.00186 12.7228 0.00781001 13.2156 0.02248L13.4097 0.0288301C13.6339 0.0368 13.8551 0.0468002 14.1218 0.0593002C15.1859 0.10846 15.9118 0.2768 16.5493 0.5243C17.2084 0.77846 17.7651 1.1218 18.3209 1.67763C18.8759 2.23346 19.2193 2.7918 19.4743 3.4493C19.7209 4.08596 19.8893 4.81263 19.9393 5.8768C19.9512 6.14346 19.9608 6.36466 19.9687 6.58891L19.975 6.78299C19.9896 7.27574 19.9963 7.84612 19.9984 8.97152L19.9992 9.71722C19.9993 9.80832 19.9993 9.90232 19.9993 9.99932L19.9992 10.2814L19.9986 11.0271C19.9967 12.1525 19.9908 12.7228 19.9761 13.2156L19.9697 13.4097C19.9618 13.6339 19.9518 13.8551 19.9393 14.1218C19.8901 15.1859 19.7209 15.9118 19.4743 16.5493C19.2201 17.2084 18.8759 17.7651 18.3209 18.3209C17.7651 18.8759 17.2059 19.2193 16.5493 19.4743C15.9118 19.7209 15.1859 19.8893 14.1218 19.9393C13.8551 19.9512 13.6339 19.9608 13.4097 19.9687L13.2156 19.975C12.7228 19.9896 12.1525 19.9963 11.0271 19.9984L10.2814 19.9992C10.1903 19.9993 10.0963 19.9993 9.99932 19.9993L9.71722 19.9992L8.97152 19.9986C7.84612 19.9967 7.27574 19.9908 6.78299 19.9761L6.58891 19.9697C6.36466 19.9618 6.14346 19.9518 5.8768 19.9393C4.81263 19.8901 4.08763 19.7209 3.4493 19.4743C2.79096 19.2201 2.23346 18.8759 1.67763 18.3209C1.1218 17.7651 0.7793 17.2059 0.5243 16.5493C0.2768 15.9118 0.1093 15.1859 0.0593002 14.1218C0.0474202 13.8551 0.03773 13.6339 0.02988 13.4097L0.0235901 13.2156C0.00896009 12.7228 0.00229018 12.1525 0.000130177 11.0271L0 8.97152C0.00186 7.84612 0.00781001 7.27574 0.02248 6.78299L0.0288301 6.58891C0.0368 6.36466 0.0468002 6.14346 0.0593002 5.8768C0.10846 4.8118 0.2768 4.0868 0.5243 3.4493C0.77846 2.79096 1.1218 2.23346 1.67763 1.67763C2.23346 1.1218 2.7918 0.7793 3.4493 0.5243C4.0868 0.2768 4.8118 0.1093 5.8768 0.0593002C6.14346 0.0474202 6.36466 0.03773 6.58891 0.02988L6.78299 0.0235901C7.27574 0.00896009 7.84612 0.00229018 8.97152 0.000130177L11.0271 0ZM9.99932 4.9993C7.2364 4.9993 4.9993 7.23883 4.9993 9.99932C4.9993 12.7622 7.23883 14.9993 9.99932 14.9993C12.7622 14.9993 14.9993 12.7597 14.9993 9.99932C14.9993 7.2364 12.7597 4.9993 9.99932 4.9993ZM9.99932 6.9993C11.6562 6.9993 12.9993 8.34192 12.9993 9.99932C12.9993 11.6562 11.6566 12.9993 9.99932 12.9993C8.34242 12.9993 6.9993 11.6566 6.9993 9.99932C6.9993 8.34242 8.34192 6.9993 9.99932 6.9993ZM15.2493 3.4993C14.56 3.4993 13.9993 4.0592 13.9993 4.74845C13.9993 5.43769 14.5592 5.99846 15.2493 5.99846C15.9385 5.99846 16.4993 5.43856 16.4993 4.74845C16.4993 4.0592 15.9376 3.49843 15.2493 3.4993Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    				</ul>
				    			</div>
				    		</div>
				    	</div>
				    </div>
					<div class="item">
				    	<div class="experts">
				    		<div class="experts-data">
				    			<div class="expert-img"><img src="{{asset('assets/images/expert-2.jpg')}}" class="img-fluid" alt="" /></div>
				    			<div class="expert-details">
				    				<h4><a href="doctor-details.html">Mahendra kulhar</a></h4>
				    				<span class="occupation text-gradient-primary">Financial Consultant</span>
				    				<ul class="d-flex align-items-center justify-content-center social-icons list-unstyled mb-0">
				    					<li>
				    						<a href="#">
					    						<svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M6.66667 11.5H9.04762L10 7.5H6.66667V5.5C6.66667 4.47062 6.66667 3.5 8.57143 3.5H10V0.1401C9.68981 0.09685 8.51714 0 7.27895 0C4.69371 0 2.85714 1.65686 2.85714 4.69971V7.5H0V11.5H2.85714V20H6.66667V11.5Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    					<li>
				    						<a href="#">
					    						<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M20 1.89471C19.251 2.22088 18.4567 2.43511 17.6434 2.5303C18.5002 2.02536 19.1414 1.23103 19.4474 0.295272C18.6423 0.76618 17.761 1.09762 16.842 1.27518C16.0662 0.460441 14.9819 -0.00126267 13.8475 2.59368e-06C11.5819 2.59368e-06 9.7443 1.80833 9.7443 4.03965C9.7443 4.3562 9.7812 4.66319 9.85017 4.95939C6.43861 4.79031 3.41629 3.18315 1.39191 0.738943C1.02742 1.3554 0.835866 2.05614 0.836837 2.7694C0.836837 4.17077 1.56147 5.40768 2.66221 6.13184C2.01061 6.11155 1.37337 5.93832 0.803615 5.62644C0.802987 5.64341 0.802987 5.66038 0.802987 5.67642C0.802987 7.63412 2.21745 9.26717 4.09517 9.63796C3.74275 9.73184 3.37925 9.77926 3.01417 9.77897C2.74902 9.77897 2.4917 9.75492 2.24159 9.70769C2.76407 11.3122 4.27851 12.4803 6.07473 12.5123C4.62119 13.6353 2.82625 14.2446 0.978504 14.242C0.651479 14.2422 0.324729 14.2232 0 14.1852C1.87587 15.3723 4.05938 16.0023 6.28942 16C13.8375 16 17.9646 9.84504 17.9646 4.50739C17.9646 4.33275 17.9603 4.15751 17.9525 3.98473C18.7557 3.41341 19.4491 2.70566 20 1.89471Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    					<li>
				    						<a href="#">
					    						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M11.0271 0C12.1525 0.00186 12.7228 0.00781001 13.2156 0.02248L13.4097 0.0288301C13.6339 0.0368 13.8551 0.0468002 14.1218 0.0593002C15.1859 0.10846 15.9118 0.2768 16.5493 0.5243C17.2084 0.77846 17.7651 1.1218 18.3209 1.67763C18.8759 2.23346 19.2193 2.7918 19.4743 3.4493C19.7209 4.08596 19.8893 4.81263 19.9393 5.8768C19.9512 6.14346 19.9608 6.36466 19.9687 6.58891L19.975 6.78299C19.9896 7.27574 19.9963 7.84612 19.9984 8.97152L19.9992 9.71722C19.9993 9.80832 19.9993 9.90232 19.9993 9.99932L19.9992 10.2814L19.9986 11.0271C19.9967 12.1525 19.9908 12.7228 19.9761 13.2156L19.9697 13.4097C19.9618 13.6339 19.9518 13.8551 19.9393 14.1218C19.8901 15.1859 19.7209 15.9118 19.4743 16.5493C19.2201 17.2084 18.8759 17.7651 18.3209 18.3209C17.7651 18.8759 17.2059 19.2193 16.5493 19.4743C15.9118 19.7209 15.1859 19.8893 14.1218 19.9393C13.8551 19.9512 13.6339 19.9608 13.4097 19.9687L13.2156 19.975C12.7228 19.9896 12.1525 19.9963 11.0271 19.9984L10.2814 19.9992C10.1903 19.9993 10.0963 19.9993 9.99932 19.9993L9.71722 19.9992L8.97152 19.9986C7.84612 19.9967 7.27574 19.9908 6.78299 19.9761L6.58891 19.9697C6.36466 19.9618 6.14346 19.9518 5.8768 19.9393C4.81263 19.8901 4.08763 19.7209 3.4493 19.4743C2.79096 19.2201 2.23346 18.8759 1.67763 18.3209C1.1218 17.7651 0.7793 17.2059 0.5243 16.5493C0.2768 15.9118 0.1093 15.1859 0.0593002 14.1218C0.0474202 13.8551 0.03773 13.6339 0.02988 13.4097L0.0235901 13.2156C0.00896009 12.7228 0.00229018 12.1525 0.000130177 11.0271L0 8.97152C0.00186 7.84612 0.00781001 7.27574 0.02248 6.78299L0.0288301 6.58891C0.0368 6.36466 0.0468002 6.14346 0.0593002 5.8768C0.10846 4.8118 0.2768 4.0868 0.5243 3.4493C0.77846 2.79096 1.1218 2.23346 1.67763 1.67763C2.23346 1.1218 2.7918 0.7793 3.4493 0.5243C4.0868 0.2768 4.8118 0.1093 5.8768 0.0593002C6.14346 0.0474202 6.36466 0.03773 6.58891 0.02988L6.78299 0.0235901C7.27574 0.00896009 7.84612 0.00229018 8.97152 0.000130177L11.0271 0ZM9.99932 4.9993C7.2364 4.9993 4.9993 7.23883 4.9993 9.99932C4.9993 12.7622 7.23883 14.9993 9.99932 14.9993C12.7622 14.9993 14.9993 12.7597 14.9993 9.99932C14.9993 7.2364 12.7597 4.9993 9.99932 4.9993ZM9.99932 6.9993C11.6562 6.9993 12.9993 8.34192 12.9993 9.99932C12.9993 11.6562 11.6566 12.9993 9.99932 12.9993C8.34242 12.9993 6.9993 11.6566 6.9993 9.99932C6.9993 8.34242 8.34192 6.9993 9.99932 6.9993ZM15.2493 3.4993C14.56 3.4993 13.9993 4.0592 13.9993 4.74845C13.9993 5.43769 14.5592 5.99846 15.2493 5.99846C15.9385 5.99846 16.4993 5.43856 16.4993 4.74845C16.4993 4.0592 15.9376 3.49843 15.2493 3.4993Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    				</ul>
				    			</div>
				    		</div>
				    	</div>
				    </div>
				    <div class="item">
				    	<div class="experts">
				    		<div class="experts-data">
				    			<div class="expert-img"><img src="{{asset('assets/images/expert-3.jpg')}}" class="img-fluid" alt="" /></div>
				    			<div class="expert-details">
				    				<h4><a href="doctor-details.html">Dharamveer Katewa</a></h4>
				    				<span class="occupation text-gradient-primary">Regional Head</span>
				    				<ul class="d-flex align-items-center justify-content-center social-icons list-unstyled mb-0">
				    					<li>
				    						<a href="#">
					    						<svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M6.66667 11.5H9.04762L10 7.5H6.66667V5.5C6.66667 4.47062 6.66667 3.5 8.57143 3.5H10V0.1401C9.68981 0.09685 8.51714 0 7.27895 0C4.69371 0 2.85714 1.65686 2.85714 4.69971V7.5H0V11.5H2.85714V20H6.66667V11.5Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    					<li>
				    						<a href="#">
					    						<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M20 1.89471C19.251 2.22088 18.4567 2.43511 17.6434 2.5303C18.5002 2.02536 19.1414 1.23103 19.4474 0.295272C18.6423 0.76618 17.761 1.09762 16.842 1.27518C16.0662 0.460441 14.9819 -0.00126267 13.8475 2.59368e-06C11.5819 2.59368e-06 9.7443 1.80833 9.7443 4.03965C9.7443 4.3562 9.7812 4.66319 9.85017 4.95939C6.43861 4.79031 3.41629 3.18315 1.39191 0.738943C1.02742 1.3554 0.835866 2.05614 0.836837 2.7694C0.836837 4.17077 1.56147 5.40768 2.66221 6.13184C2.01061 6.11155 1.37337 5.93832 0.803615 5.62644C0.802987 5.64341 0.802987 5.66038 0.802987 5.67642C0.802987 7.63412 2.21745 9.26717 4.09517 9.63796C3.74275 9.73184 3.37925 9.77926 3.01417 9.77897C2.74902 9.77897 2.4917 9.75492 2.24159 9.70769C2.76407 11.3122 4.27851 12.4803 6.07473 12.5123C4.62119 13.6353 2.82625 14.2446 0.978504 14.242C0.651479 14.2422 0.324729 14.2232 0 14.1852C1.87587 15.3723 4.05938 16.0023 6.28942 16C13.8375 16 17.9646 9.84504 17.9646 4.50739C17.9646 4.33275 17.9603 4.15751 17.9525 3.98473C18.7557 3.41341 19.4491 2.70566 20 1.89471Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    					<li>
				    						<a href="#">
					    						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M11.0271 0C12.1525 0.00186 12.7228 0.00781001 13.2156 0.02248L13.4097 0.0288301C13.6339 0.0368 13.8551 0.0468002 14.1218 0.0593002C15.1859 0.10846 15.9118 0.2768 16.5493 0.5243C17.2084 0.77846 17.7651 1.1218 18.3209 1.67763C18.8759 2.23346 19.2193 2.7918 19.4743 3.4493C19.7209 4.08596 19.8893 4.81263 19.9393 5.8768C19.9512 6.14346 19.9608 6.36466 19.9687 6.58891L19.975 6.78299C19.9896 7.27574 19.9963 7.84612 19.9984 8.97152L19.9992 9.71722C19.9993 9.80832 19.9993 9.90232 19.9993 9.99932L19.9992 10.2814L19.9986 11.0271C19.9967 12.1525 19.9908 12.7228 19.9761 13.2156L19.9697 13.4097C19.9618 13.6339 19.9518 13.8551 19.9393 14.1218C19.8901 15.1859 19.7209 15.9118 19.4743 16.5493C19.2201 17.2084 18.8759 17.7651 18.3209 18.3209C17.7651 18.8759 17.2059 19.2193 16.5493 19.4743C15.9118 19.7209 15.1859 19.8893 14.1218 19.9393C13.8551 19.9512 13.6339 19.9608 13.4097 19.9687L13.2156 19.975C12.7228 19.9896 12.1525 19.9963 11.0271 19.9984L10.2814 19.9992C10.1903 19.9993 10.0963 19.9993 9.99932 19.9993L9.71722 19.9992L8.97152 19.9986C7.84612 19.9967 7.27574 19.9908 6.78299 19.9761L6.58891 19.9697C6.36466 19.9618 6.14346 19.9518 5.8768 19.9393C4.81263 19.8901 4.08763 19.7209 3.4493 19.4743C2.79096 19.2201 2.23346 18.8759 1.67763 18.3209C1.1218 17.7651 0.7793 17.2059 0.5243 16.5493C0.2768 15.9118 0.1093 15.1859 0.0593002 14.1218C0.0474202 13.8551 0.03773 13.6339 0.02988 13.4097L0.0235901 13.2156C0.00896009 12.7228 0.00229018 12.1525 0.000130177 11.0271L0 8.97152C0.00186 7.84612 0.00781001 7.27574 0.02248 6.78299L0.0288301 6.58891C0.0368 6.36466 0.0468002 6.14346 0.0593002 5.8768C0.10846 4.8118 0.2768 4.0868 0.5243 3.4493C0.77846 2.79096 1.1218 2.23346 1.67763 1.67763C2.23346 1.1218 2.7918 0.7793 3.4493 0.5243C4.0868 0.2768 4.8118 0.1093 5.8768 0.0593002C6.14346 0.0474202 6.36466 0.03773 6.58891 0.02988L6.78299 0.0235901C7.27574 0.00896009 7.84612 0.00229018 8.97152 0.000130177L11.0271 0ZM9.99932 4.9993C7.2364 4.9993 4.9993 7.23883 4.9993 9.99932C4.9993 12.7622 7.23883 14.9993 9.99932 14.9993C12.7622 14.9993 14.9993 12.7597 14.9993 9.99932C14.9993 7.2364 12.7597 4.9993 9.99932 4.9993ZM9.99932 6.9993C11.6562 6.9993 12.9993 8.34192 12.9993 9.99932C12.9993 11.6562 11.6566 12.9993 9.99932 12.9993C8.34242 12.9993 6.9993 11.6566 6.9993 9.99932C6.9993 8.34242 8.34192 6.9993 9.99932 6.9993ZM15.2493 3.4993C14.56 3.4993 13.9993 4.0592 13.9993 4.74845C13.9993 5.43769 14.5592 5.99846 15.2493 5.99846C15.9385 5.99846 16.4993 5.43856 16.4993 4.74845C16.4993 4.0592 15.9376 3.49843 15.2493 3.4993Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    				</ul>
				    			</div>
				    		</div>
				    	</div>
				    </div>
				    <div class="item">
				    	<div class="experts">
				    		<div class="experts-data">
				    			<div class="expert-img"><img src="{{asset('assets/images/expert-4.jpg')}}" class="img-fluid" alt="" /></div>
				    			<div class="expert-details">
				    				<h4><a href="doctor-details.html">Abhishek Lamoria</a></h4>
				    				<span class="occupation text-gradient-primary">Accounting Manager</span>
				    				<ul class="d-flex align-items-center justify-content-center social-icons list-unstyled mb-0">
				    					<li>
				    						<a href="#">
					    						<svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M6.66667 11.5H9.04762L10 7.5H6.66667V5.5C6.66667 4.47062 6.66667 3.5 8.57143 3.5H10V0.1401C9.68981 0.09685 8.51714 0 7.27895 0C4.69371 0 2.85714 1.65686 2.85714 4.69971V7.5H0V11.5H2.85714V20H6.66667V11.5Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    					<li>
				    						<a href="#">
					    						<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M20 1.89471C19.251 2.22088 18.4567 2.43511 17.6434 2.5303C18.5002 2.02536 19.1414 1.23103 19.4474 0.295272C18.6423 0.76618 17.761 1.09762 16.842 1.27518C16.0662 0.460441 14.9819 -0.00126267 13.8475 2.59368e-06C11.5819 2.59368e-06 9.7443 1.80833 9.7443 4.03965C9.7443 4.3562 9.7812 4.66319 9.85017 4.95939C6.43861 4.79031 3.41629 3.18315 1.39191 0.738943C1.02742 1.3554 0.835866 2.05614 0.836837 2.7694C0.836837 4.17077 1.56147 5.40768 2.66221 6.13184C2.01061 6.11155 1.37337 5.93832 0.803615 5.62644C0.802987 5.64341 0.802987 5.66038 0.802987 5.67642C0.802987 7.63412 2.21745 9.26717 4.09517 9.63796C3.74275 9.73184 3.37925 9.77926 3.01417 9.77897C2.74902 9.77897 2.4917 9.75492 2.24159 9.70769C2.76407 11.3122 4.27851 12.4803 6.07473 12.5123C4.62119 13.6353 2.82625 14.2446 0.978504 14.242C0.651479 14.2422 0.324729 14.2232 0 14.1852C1.87587 15.3723 4.05938 16.0023 6.28942 16C13.8375 16 17.9646 9.84504 17.9646 4.50739C17.9646 4.33275 17.9603 4.15751 17.9525 3.98473C18.7557 3.41341 19.4491 2.70566 20 1.89471Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    					<li>
				    						<a href="#">
					    						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M11.0271 0C12.1525 0.00186 12.7228 0.00781001 13.2156 0.02248L13.4097 0.0288301C13.6339 0.0368 13.8551 0.0468002 14.1218 0.0593002C15.1859 0.10846 15.9118 0.2768 16.5493 0.5243C17.2084 0.77846 17.7651 1.1218 18.3209 1.67763C18.8759 2.23346 19.2193 2.7918 19.4743 3.4493C19.7209 4.08596 19.8893 4.81263 19.9393 5.8768C19.9512 6.14346 19.9608 6.36466 19.9687 6.58891L19.975 6.78299C19.9896 7.27574 19.9963 7.84612 19.9984 8.97152L19.9992 9.71722C19.9993 9.80832 19.9993 9.90232 19.9993 9.99932L19.9992 10.2814L19.9986 11.0271C19.9967 12.1525 19.9908 12.7228 19.9761 13.2156L19.9697 13.4097C19.9618 13.6339 19.9518 13.8551 19.9393 14.1218C19.8901 15.1859 19.7209 15.9118 19.4743 16.5493C19.2201 17.2084 18.8759 17.7651 18.3209 18.3209C17.7651 18.8759 17.2059 19.2193 16.5493 19.4743C15.9118 19.7209 15.1859 19.8893 14.1218 19.9393C13.8551 19.9512 13.6339 19.9608 13.4097 19.9687L13.2156 19.975C12.7228 19.9896 12.1525 19.9963 11.0271 19.9984L10.2814 19.9992C10.1903 19.9993 10.0963 19.9993 9.99932 19.9993L9.71722 19.9992L8.97152 19.9986C7.84612 19.9967 7.27574 19.9908 6.78299 19.9761L6.58891 19.9697C6.36466 19.9618 6.14346 19.9518 5.8768 19.9393C4.81263 19.8901 4.08763 19.7209 3.4493 19.4743C2.79096 19.2201 2.23346 18.8759 1.67763 18.3209C1.1218 17.7651 0.7793 17.2059 0.5243 16.5493C0.2768 15.9118 0.1093 15.1859 0.0593002 14.1218C0.0474202 13.8551 0.03773 13.6339 0.02988 13.4097L0.0235901 13.2156C0.00896009 12.7228 0.00229018 12.1525 0.000130177 11.0271L0 8.97152C0.00186 7.84612 0.00781001 7.27574 0.02248 6.78299L0.0288301 6.58891C0.0368 6.36466 0.0468002 6.14346 0.0593002 5.8768C0.10846 4.8118 0.2768 4.0868 0.5243 3.4493C0.77846 2.79096 1.1218 2.23346 1.67763 1.67763C2.23346 1.1218 2.7918 0.7793 3.4493 0.5243C4.0868 0.2768 4.8118 0.1093 5.8768 0.0593002C6.14346 0.0474202 6.36466 0.03773 6.58891 0.02988L6.78299 0.0235901C7.27574 0.00896009 7.84612 0.00229018 8.97152 0.000130177L11.0271 0ZM9.99932 4.9993C7.2364 4.9993 4.9993 7.23883 4.9993 9.99932C4.9993 12.7622 7.23883 14.9993 9.99932 14.9993C12.7622 14.9993 14.9993 12.7597 14.9993 9.99932C14.9993 7.2364 12.7597 4.9993 9.99932 4.9993ZM9.99932 6.9993C11.6562 6.9993 12.9993 8.34192 12.9993 9.99932C12.9993 11.6562 11.6566 12.9993 9.99932 12.9993C8.34242 12.9993 6.9993 11.6566 6.9993 9.99932C6.9993 8.34242 8.34192 6.9993 9.99932 6.9993ZM15.2493 3.4993C14.56 3.4993 13.9993 4.0592 13.9993 4.74845C13.9993 5.43769 14.5592 5.99846 15.2493 5.99846C15.9385 5.99846 16.4993 5.43856 16.4993 4.74845C16.4993 4.0592 15.9376 3.49843 15.2493 3.4993Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    				</ul>
				    			</div>
				    		</div>
				    	</div>
				    </div>
				    <div class="item">
				    	<div class="experts">
				    		<div class="experts-data">
				    			<div class="expert-img"><img src="{{asset('assets/images/expert-1.jpg')}}" class="img-fluid" alt="" /></div>
				    			<div class="expert-details">
				    				<h4><a href="doctor-details.html">Abhishek Bhalothia</a></h4>
				    				<span class="occupation text-gradient-primary">Manager</span>
				    				<ul class="d-flex align-items-center justify-content-center social-icons list-unstyled mb-0">
				    					<li>
				    						<a href="#">
					    						<svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M6.66667 11.5H9.04762L10 7.5H6.66667V5.5C6.66667 4.47062 6.66667 3.5 8.57143 3.5H10V0.1401C9.68981 0.09685 8.51714 0 7.27895 0C4.69371 0 2.85714 1.65686 2.85714 4.69971V7.5H0V11.5H2.85714V20H6.66667V11.5Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    					<li>
				    						<a href="#">
					    						<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M20 1.89471C19.251 2.22088 18.4567 2.43511 17.6434 2.5303C18.5002 2.02536 19.1414 1.23103 19.4474 0.295272C18.6423 0.76618 17.761 1.09762 16.842 1.27518C16.0662 0.460441 14.9819 -0.00126267 13.8475 2.59368e-06C11.5819 2.59368e-06 9.7443 1.80833 9.7443 4.03965C9.7443 4.3562 9.7812 4.66319 9.85017 4.95939C6.43861 4.79031 3.41629 3.18315 1.39191 0.738943C1.02742 1.3554 0.835866 2.05614 0.836837 2.7694C0.836837 4.17077 1.56147 5.40768 2.66221 6.13184C2.01061 6.11155 1.37337 5.93832 0.803615 5.62644C0.802987 5.64341 0.802987 5.66038 0.802987 5.67642C0.802987 7.63412 2.21745 9.26717 4.09517 9.63796C3.74275 9.73184 3.37925 9.77926 3.01417 9.77897C2.74902 9.77897 2.4917 9.75492 2.24159 9.70769C2.76407 11.3122 4.27851 12.4803 6.07473 12.5123C4.62119 13.6353 2.82625 14.2446 0.978504 14.242C0.651479 14.2422 0.324729 14.2232 0 14.1852C1.87587 15.3723 4.05938 16.0023 6.28942 16C13.8375 16 17.9646 9.84504 17.9646 4.50739C17.9646 4.33275 17.9603 4.15751 17.9525 3.98473C18.7557 3.41341 19.4491 2.70566 20 1.89471Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    					<li>
				    						<a href="#">
					    						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
													<path d="M11.0271 0C12.1525 0.00186 12.7228 0.00781001 13.2156 0.02248L13.4097 0.0288301C13.6339 0.0368 13.8551 0.0468002 14.1218 0.0593002C15.1859 0.10846 15.9118 0.2768 16.5493 0.5243C17.2084 0.77846 17.7651 1.1218 18.3209 1.67763C18.8759 2.23346 19.2193 2.7918 19.4743 3.4493C19.7209 4.08596 19.8893 4.81263 19.9393 5.8768C19.9512 6.14346 19.9608 6.36466 19.9687 6.58891L19.975 6.78299C19.9896 7.27574 19.9963 7.84612 19.9984 8.97152L19.9992 9.71722C19.9993 9.80832 19.9993 9.90232 19.9993 9.99932L19.9992 10.2814L19.9986 11.0271C19.9967 12.1525 19.9908 12.7228 19.9761 13.2156L19.9697 13.4097C19.9618 13.6339 19.9518 13.8551 19.9393 14.1218C19.8901 15.1859 19.7209 15.9118 19.4743 16.5493C19.2201 17.2084 18.8759 17.7651 18.3209 18.3209C17.7651 18.8759 17.2059 19.2193 16.5493 19.4743C15.9118 19.7209 15.1859 19.8893 14.1218 19.9393C13.8551 19.9512 13.6339 19.9608 13.4097 19.9687L13.2156 19.975C12.7228 19.9896 12.1525 19.9963 11.0271 19.9984L10.2814 19.9992C10.1903 19.9993 10.0963 19.9993 9.99932 19.9993L9.71722 19.9992L8.97152 19.9986C7.84612 19.9967 7.27574 19.9908 6.78299 19.9761L6.58891 19.9697C6.36466 19.9618 6.14346 19.9518 5.8768 19.9393C4.81263 19.8901 4.08763 19.7209 3.4493 19.4743C2.79096 19.2201 2.23346 18.8759 1.67763 18.3209C1.1218 17.7651 0.7793 17.2059 0.5243 16.5493C0.2768 15.9118 0.1093 15.1859 0.0593002 14.1218C0.0474202 13.8551 0.03773 13.6339 0.02988 13.4097L0.0235901 13.2156C0.00896009 12.7228 0.00229018 12.1525 0.000130177 11.0271L0 8.97152C0.00186 7.84612 0.00781001 7.27574 0.02248 6.78299L0.0288301 6.58891C0.0368 6.36466 0.0468002 6.14346 0.0593002 5.8768C0.10846 4.8118 0.2768 4.0868 0.5243 3.4493C0.77846 2.79096 1.1218 2.23346 1.67763 1.67763C2.23346 1.1218 2.7918 0.7793 3.4493 0.5243C4.0868 0.2768 4.8118 0.1093 5.8768 0.0593002C6.14346 0.0474202 6.36466 0.03773 6.58891 0.02988L6.78299 0.0235901C7.27574 0.00896009 7.84612 0.00229018 8.97152 0.000130177L11.0271 0ZM9.99932 4.9993C7.2364 4.9993 4.9993 7.23883 4.9993 9.99932C4.9993 12.7622 7.23883 14.9993 9.99932 14.9993C12.7622 14.9993 14.9993 12.7597 14.9993 9.99932C14.9993 7.2364 12.7597 4.9993 9.99932 4.9993ZM9.99932 6.9993C11.6562 6.9993 12.9993 8.34192 12.9993 9.99932C12.9993 11.6562 11.6566 12.9993 9.99932 12.9993C8.34242 12.9993 6.9993 11.6566 6.9993 9.99932C6.9993 8.34242 8.34192 6.9993 9.99932 6.9993ZM15.2493 3.4993C14.56 3.4993 13.9993 4.0592 13.9993 4.74845C13.9993 5.43769 14.5592 5.99846 15.2493 5.99846C15.9385 5.99846 16.4993 5.43856 16.4993 4.74845C16.4993 4.0592 15.9376 3.49843 15.2493 3.4993Z" fill="#DBDBDB"/>
												</svg>
											</a>
					    				</li>
				    				</ul>
				    			</div>
				    		</div>
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	</section>
	<!-- Our Doctors End-->

	<!-- Testimonials -->
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
				    <div class="item">
				    	<div class="testimonial-inner">
				    		<div class="testimonial-img"><img src="{{asset('assets/images/testmonial-img-1.jpg')}}" class="img-fluid" alt="" /></div>
				    		<div class="testimonial-content-block">
				    			<ul class="list-inline ratings">
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    			</ul>
				    			<div class="testimonial-desc">
				    				“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,”
				    			</div>
				    			<h4 class="author-name">Jone Walker</h4>
				    			<span class="author-title">Neurosurgery</span>
				    		</div>
				    	</div>
				  	</div>
				  	<div class="item">
				    	<div class="testimonial-inner">
				    		<div class="testimonial-img"><img src="{{asset('assets/images/testmonial-img-2.jpg')}}" class="img-fluid" alt="" /></div>
				    		<div class="testimonial-content-block">
				    			<ul class="list-inline ratings">
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    			</ul>
				    			<div class="testimonial-desc">
				    				“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,”
				    			</div>
				    			<h4 class="author-name">Jone Walker</h4>
				    			<span class="author-title">Neurosurgery</span>
				    		</div>
				    	</div>
				  	</div>
				  	<div class="item">
				    	<div class="testimonial-inner">
				    		<div class="testimonial-img"><img src="{{asset('assets/images/testmonial-img-1.jpg')}}" class="img-fluid" alt="" /></div>
				    		<div class="testimonial-content-block">
				    			<ul class="list-inline ratings">
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    			</ul>
				    			<div class="testimonial-desc">
				    				“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,”
				    			</div>
				    			<h4 class="author-name">Jone Walker</h4>
				    			<span class="author-title">Neurosurgery</span>
				    		</div>
				    	</div>
				  	</div>
				  	<div class="item">
				    	<div class="testimonial-inner">
				    		<div class="testimonial-img"><img src="{{asset('assets/images/testmonial-img-2.jpg')}}" class="img-fluid" alt="" /></div>
				    		<div class="testimonial-content-block">
				    			<ul class="list-inline ratings">
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    			</ul>
				    			<div class="testimonial-desc">
				    				“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,”
				    			</div>
				    			<h4 class="author-name">Jone Walker</h4>
				    			<span class="author-title">Neurosurgery</span>
				    		</div>
				    	</div>
				  	</div>
				  	<div class="item">
				    	<div class="testimonial-inner">
				    		<div class="testimonial-img"><img src="{{asset('assets/images/testmonial-img-1.jpg')}}" class="img-fluid" alt="" /></div>
				    		<div class="testimonial-content-block">
				    			<ul class="list-inline ratings">
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    			</ul>
				    			<div class="testimonial-desc">
				    				“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,”
				    			</div>
				    			<h4 class="author-name">Jone Walker</h4>
				    			<span class="author-title">Neurosurgery</span>
				    		</div>
				    	</div>
				  	</div>
				  	<div class="item">
				    	<div class="testimonial-inner">
				    		<div class="testimonial-img"><img src="{{asset('assets/images/testmonial-img-2.jpg')}}" class="img-fluid" alt="" /></div>
				    		<div class="testimonial-content-block">
				    			<ul class="list-inline ratings">
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    			</ul>
				    			<div class="testimonial-desc">
				    				“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,”
				    			</div>
				    			<h4 class="author-name">Jone Walker</h4>
				    			<span class="author-title">Neurosurgery</span>
				    		</div>
				    	</div>
				  	</div>
				  	<div class="item">
				    	<div class="testimonial-inner">
				    		<div class="testimonial-img"><img src="{{asset('assets/images/testmonial-img-1.jpg')}}" class="img-fluid" alt="" /></div>
				    		<div class="testimonial-content-block">
				    			<ul class="list-inline ratings">
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    			</ul>
				    			<div class="testimonial-desc">
				    				“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,”
				    			</div>
				    			<h4 class="author-name">Jone Walker</h4>
				    			<span class="author-title">Neurosurgery</span>
				    		</div>
				    	</div>
				  	</div>
				  	<div class="item">
				    	<div class="testimonial-inner">
				    		<div class="testimonial-img"><img src="{{asset('assets/images/testmonial-img-2.jpg')}}" class="img-fluid" alt="" /></div>
				    		<div class="testimonial-content-block">
				    			<ul class="list-inline ratings">
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    				<li class="list-inline-item"><a href=""><img src="{{asset('assets/images/star.svg')}}" class="img-fluid" alt="" /></a></li>
				    			</ul>
				    			<div class="testimonial-desc">
				    				“Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,”
				    			</div>
				    			<h4 class="author-name">Jone Walker</h4>
				    			<span class="author-title">Neurosurgery</span>
				    		</div>
				    	</div>
				  	</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonials End -->

	<!-- Our Blog -->
	<section class="our-blog">
		<div class="container">
			<div class="row align-items-end">
				<div class="col-12 col-md-8 col-lg-8">
					<div class="global-heading">
						<span class="heading-sub-title text-gradient-primary">Read Our Blog</span>
						<h3>Latest Articles</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
				<div class="col-12 col-md-4 col-lg-4">
					<div class="btn-block text-lg-end text-md-end">
						<a class="btn btn-primary" href="blog-list.html">View More
				          	<svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
								<path d="M1 8H18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M11 1L18 8L11 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						</a>
					</div>
				</div>
			</div>
			<div class="blog-item-block mt-60">
				<div class="row">
					<div class="col-12 col-lg-4">
						<a href="blog-detail.html" class="blog-card">
							<div class="blog-img"><img src="{{asset('assets/images/blog-1.jpg')}}" class="img-fluid" alt="" /></div>
							<div class="blog-content">
								<div class="date-separator">
									<span class="blog-subtitle">Rmk Fincorp</span>
									<span class="date">Apr 12, 2025</span>
								</div>
								<div class="blog-title">How Flexible Lending Empowers Small Businesses</div>
							</div>
						</a>
					</div>
					<div class="col-12 col-lg-4">
						<a href="blog-detail.html" class="blog-card">
							<div class="blog-img"><img src="{{asset('assets/images/blog-2.jpg')}}" class="img-fluid" alt="" /></div>
							<div class="blog-content">
								<div class="date-separator">
									<span class="blog-subtitle">Rmk Fincorp</span>
									<span class="date">Apr 12, 2025</span>
								</div>
								<div class="blog-title">The Importance of Financial Inclusion in Rural India</div>
							</div>
						</a>
					</div>
					<div class="col-12 col-lg-4">
						<a href="blog-detail.html" class="blog-card">
							<div class="blog-img"><img src="{{asset('assets/images/blog-3.jpg')}}" class="img-fluid" alt="" /></div>
							<div class="blog-content">
								<div class="date-separator">
									<span class="blog-subtitle">Rmk Fincorp</span>
									<span class="date">Apr 12, 2025</span>
								</div>
								<div class="blog-title">Vehicle Loans Made Simple: A Complete Guide for First-Time Buyers</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Our Blog End -->
@endsection