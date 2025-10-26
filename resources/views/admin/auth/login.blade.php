@extends('layouts.app')
@section('title', __('Login'))
@section('content')
<form id="adminLoginForm" class="form_wrapper" method="POST" action="{{ route('admin.loginSubmit') }}">
    @csrf
    <div class="top-content-login">
        <img src="{{asset('assets/images/logo.png')}}" alt="logo" title="logo-img">
        <h3 class="login-title">Admin Login</h3>
    </div>          
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email Address<span class="mailstar" style="color: red;">*</span></label>
        <input type="email" class="form-control" name="email" placeholder="Enter Email Address" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="loginPassword">Password<span class="mailstar" style="color: red;">*</span></label>
        <div class="input-password-wrap">
            <input type="password" name="password" value="" placeholder="Enter Password" class="form-control" id="password" name="loginPassword">
            <i class="fa fa-eye-slash toggle-password" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
        </div>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
    </div>
    <button type="submit" class="nbtn nextstepbtn" id="loginSubmit">Submit</button>
</form>

@endsection
@section('scripts')
<script>
$(document).ready(function () {
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $("#password");
        if (input.attr("type") === "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $('#adminLoginForm').validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
            }
        },
        messages: {
            email: {
                required: "Please enter email address.",
                email: "Please enter a valid email address."
            },
            password: {
                required: "Please enter password.",
            }
        },
        errorClass: 'text-danger',
        errorElement: 'span',
    });

    $("body").on("submit","#adminLoginForm",function(e){
        e.preventDefault();
        $('body').find('.contactError').remove();
        if($(this).valid()){
            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: $(this).serialize(),
                beforeSend:function(){
                    $('body').find('#loginSubmit').prop('disabled', true);
                },
                success: function(response) {
                    if (response.success) {
                        $("#adminLoginForm")[0].reset();
                        setTimeout(function() {
                            window.location.href = '{{ route("admin.home") }}';;
                        }, 1000);
                    }
                },
                error: function(response) {
                    var result = response.responseJSON.errors; 
                    $.each(result, function(key, value) {                        
                        var $field = $('[name="' + key + '"]');
                        $field.addClass('is-invalid');
                        $field.after('<span class="text-danger contactError"> ' + value  + '</span>');
                    });
                },
                complete: function() {
                    $('body').find('#loginSubmit').prop('disabled', false);
                }
            });
        }
    });
});
</script>
@endsection
