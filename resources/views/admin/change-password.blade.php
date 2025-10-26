@extends('layouts.admin')
@section('title', __('Change Password'))
@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
    <div class="main-title add_brand_wrapper">
        <div class="dash-title">
            <h2>Change Password</h2>
        </div>
        <div class="header_profile">
            @include('layouts.header-dropdown')
        </div>
    </div>
    <div class="data-fieldtable">
        <form id="changePasswordForm" class="customer-detail-form" method="POST" action="{{ route('admin.change-password.update') }}">
            @csrf
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>Old Password</label>
                        <div class="input-password-wrap">
                            <input type="password" class="form-control" name="old_password" placeholder="Enter Old Password">
                            <i class="fa fa-eye-slash toggle-password" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>New Password</label>
                        <div class="input-password-wrap">
                            <input type="password" class="form-control" name="new_password" placeholder="Enter New Password">
                            <i class="fa fa-eye-slash toggle-password" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label>New Confirm Password</label>
                        <div class="input-password-wrap">
                            <input type="password" class="form-control" name="new_confirm_password" placeholder="Enter New Confirm Password">
                            <i class="fa fa-eye-slash toggle-password" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                        </div>
                    </div>
                </div>

            </div>

            <div class="configuration_btns">
                <div></div>
                <div class="save_btn">
                    <button type="submit" class="nbtn" id="changePasswordBtn">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script>
$(document).ready(function () {
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");

        let input = $(this).siblings("input");

        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $('#changePasswordForm').validate({
        rules: {
            old_password: {
                required: true,
            },
            new_password: {
                required: true,
                minlength: 6
            },
            new_confirm_password: {
                required: true,
                equalTo: '[name="new_password"]'
            }
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

    $(document).on('submit', '#changePasswordForm', function(e){
        e.preventDefault();
        $('body').find('.contactError').remove();
        if($(this).valid()){
            var url = $(this).attr('action');
            $.ajax({
                url: url,
                method: 'POST',
                data: $(this).serialize(),
                beforeSend: function() {
                    $('#changePasswordBtn').attr('disabled', true);
                },
                success: function(response) {
                    toastr.success(response.message, 'Success!');
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                },
                error: function(xhr) { 
                    var result = xhr.responseJSON.errors; 
                    if(result){
                        $.each(result, function(key, value) {                        
                            var $field = $('[name="' + key + '"]');
                            $field.addClass('is-invalid');
                            $field.after('<span class="text-danger contactError">' + value + '</span>');
                        });
                    }else{
                        toastr.error(xhr.responseJSON.message, 'Error!');
                    }
                },
                complete: function() {
                    $('#changePasswordBtn').attr('disabled', false);
                }
            });
        }
    });
});
</script>
@endsection