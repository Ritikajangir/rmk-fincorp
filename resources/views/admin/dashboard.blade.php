@extends('layouts.admin')
@section('title', __('Dashboard'))
@section('content')
    <div class="main-title add_brand_wrapper">
        <div class="dash-title">
            <h2>Dashboard</h2>
        </div>
        <div class="header_profile">
            @include('layouts.header-dropdown')
        </div>
    </div>
@endsection