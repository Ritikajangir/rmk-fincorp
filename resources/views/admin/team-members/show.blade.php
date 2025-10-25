@extends('layouts.admin')
@section('title', 'Show Team Member')
@section('content')
<div class="dash-right-area">
    <div class="main-title add_brand_wrapper">
        <div class="dash-title">
            <h2>Show Team Member</h2>
        </div>
        <div class="add_brand">
            <a href="{{route('admin.team-members.index')}}" class="nbtn gap-2"><i class="fi fi-rr-arrow-left"></i> Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-6">
            <p><b>Name</b></p>
            <p>{{ $teamMember->name }}</p>
        </div>
        <div class="col-12 col-lg-6">
            <p><b>Designation</b></p>
            <p>{{ $teamMember->designation }}</p>
        </div>
        @if($teamMember->email)
            <div class="col-12 col-lg-6">
                <p><b>Email</b></p>
                <p>{{ $teamMember->email }}</p>
            </div>
        @endif
        @if($teamMember->phone)
            <div class="col-12 col-lg-6">
                <p><b>Phone Number</b></p>
                <p>{{ $teamMember->phone }}</p>
            </div>
        @endif
        @if($teamMember->bio)
            <div class="col-12 col-lg-6">
                <p><b>Bio</b></p>
                <p>{{ $teamMember->bio }}</p>
            </div>
        @endif
        @if($teamMember->image)
            <div class="col-12 col-lg-6">
                <p><b>Image</b></p>
                <img src="{{ asset('storage/' . $teamMember->image) }}" class="img-fluid" alt="" title="Armor" />
            </div>
        @endif
        @if($teamMember->facebook)
            <div class="col-12 col-lg-6">
                <p><b>Facebook URL</b></p>
                <a href="{{ $teamMember->facebook }}" target="_blank">
                    <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
                        <path d="M6.66667 11.5H9.04762L10 7.5H6.66667V5.5C6.66667 4.47062 6.66667 3.5 8.57143 3.5H10V0.1401C9.68981 0.09685 8.51714 0 7.27895 0C4.69371 0 2.85714 1.65686 2.85714 4.69971V7.5H0V11.5H2.85714V20H6.66667V11.5Z" fill="#DBDBDB"/>
                    </svg>
                </a>
            </div>
        @endif
        @if($teamMember->twitter)
            <div class="col-12 col-lg-6">
                <p><b>Twitter URL</b></p>
                <a href="{{ $teamMember->twitter }}" target="_blank">
                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg')}}">
                        <path d="M20 1.89471C19.251 2.22088 18.4567 2.43511 17.6434 2.5303C18.5002 2.02536 19.1414 1.23103 19.4474 0.295272C18.6423 0.76618 17.761 1.09762 16.842 1.27518C16.0662 0.460441 14.9819 -0.00126267 13.8475 2.59368e-06C11.5819 2.59368e-06 9.7443 1.80833 9.7443 4.03965C9.7443 4.3562 9.7812 4.66319 9.85017 4.95939C6.43861 4.79031 3.41629 3.18315 1.39191 0.738943C1.02742 1.3554 0.835866 2.05614 0.836837 2.7694C0.836837 4.17077 1.56147 5.40768 2.66221 6.13184C2.01061 6.11155 1.37337 5.93832 0.803615 5.62644C0.802987 5.64341 0.802987 5.66038 0.802987 5.67642C0.802987 7.63412 2.21745 9.26717 4.09517 9.63796C3.74275 9.73184 3.37925 9.77926 3.01417 9.77897C2.74902 9.77897 2.4917 9.75492 2.24159 9.70769C2.76407 11.3122 4.27851 12.4803 6.07473 12.5123C4.62119 13.6353 2.82625 14.2446 0.978504 14.242C0.651479 14.2422 0.324729 14.2232 0 14.1852C1.87587 15.3723 4.05938 16.0023 6.28942 16C13.8375 16 17.9646 9.84504 17.9646 4.50739C17.9646 4.33275 17.9603 4.15751 17.9525 3.98473C18.7557 3.41341 19.4491 2.70566 20 1.89471Z" fill="#DBDBDB"/>
                    </svg>
                </a>
            </div>
        @endif
        @if($teamMember->linkedin)
            <div class="col-12 col-lg-6">
                <p><b>LinkedIn URL</b></p>
                <a href="{{ $teamMember->linkedin }}" target="_blank">
                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.8238 14.9292L15.8275 14.9285V9.48364C15.8275 6.81996 15.2537 4.76807 12.1378 4.76807C10.6399 4.76807 9.63464 5.58956 9.22426 6.36838H9.18093V5.01674H6.22656V14.9285H9.30287V10.0206C9.30287 8.72833 9.54798 7.47876 11.1493 7.47876C12.727 7.47876 12.7506 8.9535 12.7506 10.1035V14.9292H15.8238Z" fill="#DDE1ED"/>
                        <path d="M1.21729 5.01807H4.2973V14.9299H1.21729V5.01807Z" fill="#DDE1ED"/>
                        <path d="M2.75605 0.0830078C1.77126 0.0830078 0.972168 0.881618 0.972168 1.86581C0.972168 2.85 1.77126 3.66531 2.75605 3.66531C3.74084 3.66531 4.53994 2.85 4.53994 1.86581C4.53932 0.881618 3.74022 0.0830078 2.75605 0.0830078Z" fill="#DDE1ED"/>
                    </svg>
                </a>
            </div>
        @endif
        <div class="col-12 col-lg-6">
            <p><b>Status</b></p>
            <p>{{ $teamMember->status ? 'Active' : 'Inactive' }} </p>
        </div>
    </div>
</div>
@endsection