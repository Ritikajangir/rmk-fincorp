<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>{{config('app.name')}} | @yield('title')</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link href="{{asset('assets/images/fav-icon.png')}}" rel="icon">

    <link rel="stylesheet" href="{{asset('assets/datatables/jquery.dataTables.min.css')}}">
	<!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<!-- toastr css -->
    <link rel="stylesheet" href="{{asset('assets/toastr/toastr.min.css')}}">
	<!-- Style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" async>
    <!-- sweetalert2 -->
    <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}">
	@yield('style')
</head>
<body class="admin-dashboard">

	<section class="dash-section">
		<div class="dashboard-blog">
			<div class="nav-area">
				<aside class="dash-sidebar">
					<a href="javascript:void(0)" title="logo" class="sidebar-logo"><img src="{{asset('assets/images/logo.png')}}" alt="logo" class="img-fluid"></a>
					<h6>WELCOME</h6>
					<ul class="nav-items">
						<li><a href="{{route('admin.home')}}" title="Dashboard" class="{{ request()->is('admin') ? 'active' : '' }}"><div class="menu-img"><img src="{{asset('assets/images/dashaboard.svg')}}" alt="Dashboard"></div>Dashboard</a></li>
						<li><a href="{{route('admin.branch.index')}}" title="Branches" class="{{ request()->is('admin/branch') || request()->is('admin/branch/*') ? 'active' : '' }}"><div class="menu-img"><img src="{{asset('assets/images/brand.svg')}}" alt="Branches"></div>Branches</a></li>
						<li><a href="{{route('admin.pages.index')}}" title="Pages" class="{{ request()->is('admin/pages') || request()->is('admin/pages/*') ? 'active' : '' }}"><div class="menu-img"><img src="{{asset('assets/images/brand.svg')}}" alt="Pages"></div>Pages</a></li>
						<li><a href="{{route('admin.general-settings')}}" title="General Settings" class="{{ request()->is('admin/general-settings') ? 'active' : '' }}"><div class="menu-img"><img src="{{asset('assets/images/brand.svg')}}" alt="Profile"></div>General Settings</a></li>
						<li><a href="{{route('admin.home-page-content')}}" title="Home Page Content" class="{{ request()->is('admin/home-page-content') ? 'active' : '' }}"><div class="menu-img"><img src="{{asset('assets/images/brand.svg')}}" alt="Profile"></div>Home Page Content</a></li>
						<li><a href="{{route('admin.testimonials.index')}}" title="Testimonials" class="{{ request()->is('admin/testimonials') || request()->is('admin/testimonials/*') ? 'active' : '' }}"><div class="menu-img"><img src="{{asset('assets/images/brand.svg')}}" alt="Profile"></div>Testimonials</a></li>
						<li><a href="{{route('admin.team-members.index')}}" title="Team Members" class="{{ request()->is('admin/team-members') || request()->is('admin/team-members/*') ? 'active' : '' }}"><div class="menu-img"><img src="{{asset('assets/images/brand.svg')}}" alt="Profile"></div>Team Members</a></li>
						<li><a href="javascript:void(0)" title="Logout" data-url="{{route('admin.logout')}}" id="logout-btn"><div class="menu-img"><img src="{{asset('assets/images/log-out.svg')}}" alt="Logout"></div>Logout</a></li>
					</ul>
				</aside>
			</div>
			@yield('content')
		</div>
	</section>

    <!-- Jquery Library -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <!-- Bootstrap Js -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
	<!-- toastr Js -->
    <script src="{{asset('assets/toastr/toastr.min.js')}}"></script>
    <!-- Data table  -->
    <script src="{{asset('assets/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- sweetalert2 Js -->
    <script src="{{ asset('assets/sweetalert2/sweetalert2.all.min.js') }}"></script>
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
			$(document).on("click", "#logout-btn", function (e) {
				e.preventDefault();
				var url = $(this).data("url");
				swal
				.fire({
					title: "Logout?",
					text: "Are you sure you want to logout",
					icon: "question",
					showCancelButton: !0,
					confirmButtonText: "Yes, Logout",
					cancelButtonText: "No, Cancel",
					reverseButtons: !0,
				})
				.then(function (e) {
					if (e.value === true) {
					$.ajax({
						type: "get",
						url: url,
						success: function (response) {
						swal.fire({
							icon: "success",
							title: "Success!",
							text: response.message,
							confirmButtonText: "OK",
						}).then((result) => {
							if (
							result.isConfirmed ||
							result.dismiss === Swal.DismissReason.backdrop
							) {
							window.location.replace(response.url);
							}
						});
						},
						error: function (response) {
						swal
							.fire({
							icon: "error",
							title: "Error!",
							text: response.responseJSON.message,
							confirmButtonText: "OK",
							})
							.then((result) => {
							if (
								(result.isConfirmed ||
								result.dismiss === Swal.DismissReason.backdrop) &&
								response.responseJSON.url
							) {
								window.location.replace(response.responseJSON.url);
							}
							});
						},
					});
					}
				});
			});
		});
	</script>
	@yield('scripts')

</body>
</html>