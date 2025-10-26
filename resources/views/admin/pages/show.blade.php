@extends('layouts.admin')
@section('title', 'Show Page')
@section('content')
    <div class="main-title add_brand_wrapper">
        <div class="dash-title">
            <h2>{{$page->title}}</h2>
        </div>
        <div class="header_profile">
            <div class="add_brand">
                <a href="{{route('admin.pages.index')}}" class="nbtn gap-2"><i class="fi fi-rr-arrow-left"></i> Back</a>
            </div>
            @include('layouts.header-dropdown')
        </div>
    </div>
    <div class="data-fieldtable">
        <div class="data-fieldtable">
            {!! $page->content !!}
        </div>
    </div>
@endsection