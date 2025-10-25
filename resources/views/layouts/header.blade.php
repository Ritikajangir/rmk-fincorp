<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ $settings->site_name }} | @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/' . $settings->favicon) }}">

	<!-- Bootstrap.css -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<!-- toastr css -->
    <link rel="stylesheet" href="{{asset('assets/toastr/toastr.min.css')}}">

	<!-- Main.css -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">

	<!-- Owl slider css -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}"/>

	<!-- Responsive.css -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

	<!-- Font family -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>

	<!-- Header -->
	<header class="main-header position-relative">
		<nav class="navbar navbar-expand-lg">
		  	<div class="container">
			    <a class="navbar-brand p-0 me-0 nav-logo" href="{{route('home')}}"><img src="{{ asset('storage/' . $settings->logo) }}" class="img-fluid" alt="" title="Armor" /></a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			      <span class="navbar-toggler-icon"></span>
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav ms-auto align-items-center">
				        <li class="nav-item">
				          	<a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
				        </li>
				        <li class="nav-item">
				          	<a class="nav-link {{ request()->is('about-us') ? 'active' : '' }}" href="{{route('pages', 'about-us')}}">About Us</a>
				        </li>
				        <li class="nav-item">
				          	<a class="nav-link {{ request()->is('terms-conditions') ? 'active' : '' }}" href="{{route('pages', 'terms-conditions')}}">Terms & Conditions</a>
				        </li>
				        <li class="nav-item">
				          	<a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}" href="{{route('contact-us')}}">Contact Us</a>
				        </li>
				        <li class="nav-item">
				          	<a class="nav-link {{ request()->is('charges') ? 'active' : '' }}" href="{{route('pages', 'charges')}}">Charges</a>
				        </li>
				        <li class="nav-item btn-end">
				          	<a class="btn btn-primary" href="{{route('contact-us')}}">Get In Touch
					          	<svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M1 8H18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M11 1L18 8L11 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</a>
				        </li>
				    </ul>
			    </div>
		  	</div>
		</nav>
	</header>
	<!-- Header End -->
    @yield('content')
    @include('layouts.footer')
    <!-- Scripts Start -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<!-- toastr Js -->
    <script src="{{asset('assets/toastr/toastr.min.js')}}"></script>
	<script src="{{asset('assets/js/custom.js')}}"></script>
	<script>
		$(document).ready(function(){
			toastr.options = {
				'closeButton': true,
				'debug': false,
				'newestOnTop': false,
				'progressBar': false,
				'positionClass': 'toast-top-right',
				'preventDuplicates': false,
				'showDuration': '1000',
				'hideDuration': '1000',
				'timeOut': '5000',
				'extendedTimeOut': '1000',
				'showEasing': 'swing',
				'hideEasing': 'linear',
				'showMethod': 'fadeIn',
				'hideMethod': 'fadeOut',
			}

			@if(Session::has('message'))
				var type = "{{ Session::get('alert-type', 'info') }}";
			
				switch (type) {
					case 'info':
						toastr.info("{{ Session::get('message') }}", 'Info!');
						break;

					case 'warning':
						toastr.warning("{{ Session::get('message') }}", 'Warning!');
						break;
					case 'success':
						toastr.success("{{ Session::get('message') }}", 'Success!');
						break;
					case 'error':
						toastr.error("{{ Session::get('message') }}", 'Error');
						break;
				}
			@endif
		});
	</script>
	@yield('scripts')
	<!-- Scripts End -->
    </body>
</html>