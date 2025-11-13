@extends('layouts.header')
@section('title', $slugPage->title)
@section('content')
    <!-- Inner page common banner -->
	<section class="common-banner" style="background-image: url('{{ asset('assets/images/banner-1.jpg') }}');">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-8">
					<div class="common-banner-content">
						<h2>{{$slugPage->title}}</h2>
						<ul class="breadcrump">
							<li class="breadcrump-inner"><a href="{{route('home')}}">Home</a></li>
							<li class="breadcrump-inner">{{$slugPage->title}}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Inner page common banner -->

    <section class="content-pg dynamic-pages-content">
		<div class="container">
			<div class="row">
                {!! $slugPage->content !!}
            </div>
        </div>
    </section>
@endsection