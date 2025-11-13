@extends('layouts.admin')
@section('title', __('General Settings'))
@section('content')
    <div class="main-title add_brand_wrapper">
        <div class="dash-title">
            <h2>General Settings</h2>
        </div>
        <div class="header_profile">
            @include('layouts.header-dropdown')
        </div>
    </div>
    <div class="data-fieldtable">
        <form id="generalSettingForm" class="customer-detail-form" enctype="multipart/form-data" method="POST" action="{{ route('admin.general-settings.update') }}">
            @csrf
            <div class="row">
                <!-- Site Name -->
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Site Name</label>
                        <input type="text" class="form-control" name="site_name" value="{{ $settings->site_name ?? '' }}" placeholder="Enter site name">
                    </div>
                </div>

                <!-- Email -->
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $settings->email ?? '' }}" placeholder="Enter email address">
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" name="phone" value="{{ $settings->phone ?? '' }}" placeholder="Enter phone number" oninput="this.value = this.value.replace(/(?!^)\+/g, '').replace(/[^0-9+]/g, '');">
                    </div>
                </div>

                <!-- Address -->
                <div class="col-12">
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="address" placeholder="Enter address">{{ $settings->address ?? '' }}</textarea>
                    </div>
                </div>

                <!-- About -->
                <div class="col-12">
                    <div class="form-group">
                        <label>About</label>
                        <textarea class="form-control" name="about" rows="3" placeholder="Enter about text">{{ $settings->about ?? '' }}</textarea>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Facebook Link</label>
                        <input type="text" class="form-control" name="facebook_link" value="{{ $settings->facebook_link ?? '' }}" placeholder="Enter Facebook URL">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Twitter Link</label>
                        <input type="text" class="form-control" name="twitter_link" value="{{ $settings->twitter_link ?? '' }}" placeholder="Enter Twitter URL">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>LinkedIn Link</label>
                        <input type="text" class="form-control" name="linkedin_link" value="{{ $settings->linkedin_link ?? '' }}" placeholder="Enter LinkedIn URL">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Instagram Link</label>
                        <input type="text" class="form-control" name="instagram_link" value="{{ $settings->instagram_link ?? '' }}" placeholder="Enter Instagram URL">
                    </div>
                </div>

                <!-- Favicon -->
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Favicon</label>
                        <input type="file" class="form-control" name="favicon" accept="image/*">
                        @if(!empty($settings->favicon))
                            <img src="{{ asset('storage/'.$settings->favicon) }}" id="existingFavicon" alt="Favicon" width="40" class="mt-2">
                        @endif
                    </div>
                </div>

                <!-- Logo -->
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Logo</label>
                        <input type="file" class="form-control" name="logo" accept="image/*">
                        @if(!empty($settings->logo))
                            <img src="{{ asset('storage/'.$settings->logo) }}" id="existingLogo" alt="Logo" width="100" class="mt-2">
                        @endif
                    </div>
                </div>

                @php
                    $days = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];
                @endphp

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Start Day</label>
                        <select name="start_day" class="form-control" required>
                            @foreach($days as $day)
                                <option value="{{ $day }}" {{ isset($settings->start_day) && $settings->start_day == $day ? 'selected' : '' }}>{{ $day }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>End Day</label>
                        <select name="end_day" class="form-control" required>
                            @foreach($days as $day)
                                <option value="{{ $day }}" {{ isset($settings->end_day) && $settings->end_day == $day ? 'selected' : '' }}>{{ $day }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Start Time</label>
                        <input type="time" name="start_time" class="form-control" value="{{ $settings->start_time ?? '' }}" required>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>End Time</label>
                        <input type="time" name="end_time" class="form-control" value="{{ $settings->end_time ?? '' }}" required>
                    </div>
                </div>

            </div>

            <div class="configuration_btns">
                <div></div>
                <div class="save_btn">
                    <button type="submit" class="nbtn" id="saveGeneralSettingBtn">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('assets/js/additional-methods.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#generalSettingForm').validate({
            rules: {
                site_name: {
                    required: true,
                    maxlength: 255
                },
                address: {
					required: true,
					maxlength: 500
				},
                about: {
					required: true,
					maxlength: 2000
				},
				email: {
					required: true,
					email: true
				},
				phone: {
					required: true,
				},
                logo: {
                    required: function(element) {
                        return $("#existingLogo").length === 0;
                    },
                    extension: "jpg|jpeg|png|gif|ico"
                },
                favicon: {
                    required: function(element) {
                        return $("#existingFavicon").length === 0;
                    },
                    extension: "jpg|jpeg|png|gif|ico"
                }
            },
            messages: {
                name: {
                    required: "Please enter name",
                    maxlength: "Name cannot exceed 255 characters"
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

        $(document).on('submit', '#generalSettingForm', function(e){
            e.preventDefault();
            $('body').find('.contactError').remove();
            let formData = new FormData(this);
            if($(this).valid()){
                var url = '{{ route("admin.general-settings.update") }}';
                $.ajax({
                    url: url,
                    method: 'POST',
                    contentType: false,
                    processData: false,
                    data: formData,
                    beforeSend: function() {
                        $('#saveGeneralSettingBtn').attr('disabled', true);
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
                        $('#saveGeneralSettingBtn').attr('disabled', false);
                    }
                });
            }
        });
    });
</script>
@endsection