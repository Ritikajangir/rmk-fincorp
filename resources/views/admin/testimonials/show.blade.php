@extends('layouts.admin')
@section('title', 'Show Testimonial')
@section('content')
<div class="dash-right-area">
    <div class="main-title add_brand_wrapper">
        <div class="dash-title">
            <h2>Show Testimonial</h2>
        </div>
        <div class="add_brand">
            <a href="{{route('admin.testimonials.index')}}" class="nbtn gap-2"><i class="fi fi-rr-arrow-left"></i> Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-6">
            <p><b>Name</b></p>
            <p>{{ $testimonial->name }}</p>
        </div>
        @if($testimonial->position)
            <div class="col-12 col-lg-6">
                <p><b>Position</b></p>
                <p>{{ $testimonial->position }}</p>
            </div>
        @endif
        @if($testimonial->photo)
            <div class="col-12 col-lg-6">
                <p><b>Photo</b></p>
                <img src="{{ asset('storage/' . $testimonial->photo) }}" class="img-fluid" alt="" title="Armor" />
            </div>
        @endif
        <div class="col-12 col-lg-6">
            <p><b>Status</b></p>
            <p>{{ $testimonial->status ? 'Active' : 'Inactive' }} </p>
        </div>
        <div class="col-12">
            <p><b>Message</b></p>
            <p>{!! $testimonial->message !!}</p>
        </div>
    </div>
</div>
@endsection