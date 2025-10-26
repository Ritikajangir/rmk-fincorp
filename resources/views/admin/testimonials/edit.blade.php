@extends('layouts.admin')
@section('title', 'Edit Testimonial')
@section('content')
    <div class="main-title add_brand_wrapper">
        <div class="dash-title">
            <h2>Edit Testimonial</h2>
        </div>
        <div class="header_profile">
            @include('layouts.header-dropdown')
        </div>
    </div>
    <div class="data-fieldtable">
        <div class="data-fieldtable">
            <form id="testimonialForm" class="customer-detail-form" enctype="multipart/form-data" method="POST" action="{{ route('admin.testimonials.update', $testimonial->id)}}">
                @csrf
                @method('PATCH')
                @include('admin/testimonials/_form')
            </form>
        </div>
    </div>
@endsection
@section('scripts')
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#testimonialForm').validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 255
                },
                message: {
                    required: true,
                    maxlength: 2000
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

        $(document).on('submit', '#testimonialForm', function(e){
            e.preventDefault();
            $('body').find('.contactError').remove(); 
            if($(this).valid()){
                var url = $(this).attr('action');
                let formData = new FormData(this);
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('#saveTestimonialBtn').attr('disabled', true);
                    },
                    success: function(response) {
                        toastr.success(response.message, 'Success!');
                        setTimeout(function() {
                            window.location = '{{route("admin.testimonials.index")}}';
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
                        $('#saveTestimonialBtn').attr('disabled', false);
                    }
                });
            }
        });
    });
</script>
@endsection