@extends('layouts.admin')
@section('title', __('Home Page Content'))
@section('content')
<div class="dash-right-area">
    <div class="main-title add_brand_wrapper">
        <div class="dash-title">
            <h2>Home Page Content</h2>
        </div>
    </div>
    <div class="data-fieldtable">
        <form id="homePageContentForm" class="customer-detail-form" enctype="multipart/form-data" method="POST" action="{{ route('admin.home-page-content.update') }}">
            @csrf
            <div class="row">
                <!-- HERO SECTION -->
                <div class="col-12">
                    <h5 class="mb-3 mt-4">Hero Section</h5>
                    <hr>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>First Heading</label>
                        <input type="text" class="form-control" name="first_heading" value="{{ $homePageContent->first_heading ?? '' }}" placeholder="Enter first heading">
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Main Heading</label>
                        <input type="text" class="form-control" name="main_heading" value="{{ $homePageContent->main_heading ?? '' }}" placeholder="Enter main heading">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label>Sub Heading</label>
                        <textarea class="form-control" name="sub_heading" rows="3" placeholder="Enter sub heading">{{ $homePageContent->sub_heading ?? '' }}</textarea>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="hero_image">
                        @if(!empty($homePageContent->hero_image))
                            <img src="{{ asset('storage/' . $homePageContent->hero_image) }}" id="existingHeroImage" class="mt-2" alt="Hero Image" width="120">
                        @endif
                    </div>
                </div>

                <!-- ABOUT US SECTION -->
                <div class="col-12">
                    <h5 class="mb-3 mt-4">About Us Section</h5>
                    <hr>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Heading</label>
                        <input type="text" class="form-control" name="about_us_heading" value="{{ $homePageContent->about_us_heading ?? '' }}" placeholder="Enter about us heading">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" name="about_us_content" rows="4" placeholdercontent">{{ $homePageContent->about_us_content ?? '' }}</textarea>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="about_us_image">
                        @if(!empty($homePageContent->about_us_image))
                            <img src="{{ asset('storage/' . $homePageContent->about_us_image) }}" id="existingAboutUsImage" class="mt-2" alt="About Us Image" width="120">
                        @endif
                    </div>
                </div>

                <!-- OUR MISSION SECTION -->
                <div class="col-12">
                    <h5 class="mb-3 mt-4">Our Mission Section</h5>
                    <hr>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Main Heading</label>
                        <input type="text" class="form-control" name="our_mission_main_heading" value="{{ $homePageContent->our_mission_main_heading ?? '' }}" placeholder="Enter mission main heading">
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Sub Heading</label>
                        <input type="text" class="form-control" name="our_mission_sub_heading" value="{{ $homePageContent->our_mission_sub_heading ?? '' }}" placeholder="Enter mission sub heading">
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Mission Image</label>
                        <input type="file" class="form-control" name="our_mission_image">
                        @if(!empty($homePageContent->our_mission_image))
                            <img src="{{ asset('storage/' . $homePageContent->our_mission_image) }}" id="existingMissionImage" class="mt-2" alt="Mission Image" width="120">
                        @endif
                    </div>
                </div>

                <!-- WHY CHOOSE US SECTION -->
                <div class="col-12">
                    <h5 class="mb-3 mt-4">Why Choose Us Section</h5>
                    <hr>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Main Heading</label>
                        <input type="text" class="form-control" name="choose_us_main_heading" value="{{ $homePageContent->choose_us_main_heading ?? '' }}" placeholder="Enter choose us main heading">
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Sub Heading</label>
                        <input type="text" class="form-control" name="choose_us_sub_heading" value="{{ $homePageContent->choose_us_sub_heading ?? '' }}" placeholder="Enter choose us sub heading">
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="choose_us_image">
                        @if(!empty($homePageContent->choose_us_image))
                            <img src="{{ asset('storage/' . $homePageContent->choose_us_image) }}" id="existingChooseUsImage" class="mt-2" alt="Choose Us Image" width="120">
                        @endif
                    </div>
                </div>

                <!-- OUR TEAM SECTION -->
                <div class="col-12">
                    <h5 class="mb-3 mt-4">Our Team Section</h5>
                    <hr>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Main Heading</label>
                        <input type="text" class="form-control" name="our_team_main_heading" value="{{ $homePageContent->our_team_main_heading ?? '' }}" placeholder="Enter team main heading">
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Sub Heading</label>
                        <input type="text" class="form-control" name="our_team_sub_heading" value="{{ $homePageContent->our_team_sub_heading ?? '' }}" placeholder="Enter team sub heading">
                    </div>
                </div>

                <!-- TESTIMONIAL SECTION -->
                <div class="col-12">
                    <h5 class="mb-3 mt-4">Testimonial Section</h5>
                    <hr>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Main Heading</label>
                        <input type="text" class="form-control" name="testimonial_main_heading" value="{{ $homePageContent->testimonial_main_heading ?? '' }}" placeholder="Enter testimonial main heading">
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Sub Heading</label>
                        <input type="text" class="form-control" name="testimonial_sub_heading" value="{{ $homePageContent->testimonial_sub_heading ?? '' }}" placeholder="Enter testimonial sub heading">
                    </div>
                </div>
            </div>

            <div class="configuration_btns">
                <div class="save_btn">
                    <button type="submit" class="nbtn" id="saveHomePageContentBtn">Update</button>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection
@section('scripts')
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/additional-methods.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#homePageContentForm').validate({
            rules: {
                main_heading: {
                    required: true,
                    maxlength: 255
                },
                hero_image: {
                    required: function(element) {
                        return $("#existingHeroImage").length === 0; // only required if no existing image
                    },
                    extension: "jpg|jpeg|png|gif|webp"
                },
                about_us_heading: {
                    required: true,
                    maxlength: 255
                },
                about_us_image: {
                    required: function(element) {
                        return $("#existingAboutUsImage").length === 0;
                    },
                    extension: "jpg|jpeg|png|gif|webp"
                },
                our_mission_main_heading: {
                    required: true,
                    maxlength: 255
                },
                our_mission_image: {
                    required: function(element) {
                        return $("#existingMissionImage").length === 0;
                    },
                    extension: "jpg|jpeg|png|gif|webp"
                },
                choose_us_main_heading: {
                    required: true,
                    maxlength: 255
                },
                choose_us_image: {
                    required: function(element) {
                        return $("#existingChooseUsImage").length === 0;
                    },
                    extension: "jpg|jpeg|png|gif|webp"
                },
                our_team_main_heading: {
                    required: true,
                    maxlength: 255
                },
                testimonial_main_heading: {
                    required: true,
                    maxlength: 255
                },
            },
            errorClass: 'is-invalid',
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                error.insertAfter(element);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass(errorClass).addClass(validClass);
            }
        });

        $(document).on('submit', '#homePageContentForm', function(e){
            e.preventDefault();
            $('body').find('.contactError').remove();
            let formData = new FormData(this);
            if($(this).valid()){
                var url = $(this).attr('action');
                $.ajax({
                    url: url,
                    method: 'POST',
                    contentType: false,
                    processData: false,
                    data: formData,
                    beforeSend: function() {
                        $('#saveHomePageContentBtn').attr('disabled', true);
                    },
                    success: function(response) {
                        toastr.success(response.message, 'Success!');
                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    },
                    error: function(xhr) {
                        var result = xhr.responseJSON.errors; 
                        $.each(result, function(key, value) {                        
                            var $field = $('[name="' + key + '"]');
                            $field.addClass('is-invalid');
                            $field.after('<span class="text-danger contactError">' + value + '</span>');
                        });
                    },
                    complete: function() {
                        $('#saveHomePageContentBtn').attr('disabled', false);
                    }
                });
            }
        });
    });
</script>
@endsection