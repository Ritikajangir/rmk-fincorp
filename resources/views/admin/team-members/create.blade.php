@extends('layouts.admin')
@section('title', 'Add Team Member')
@section('content')
<div class="dash-right-area">
    <div class="main-title add_brand_wrapper">
        <div class="dash-title">
            <h2>Add Team Member</h2>
        </div>
    </div>
    <div class="data-fieldtable">
        <div class="data-fieldtable">
            <form id="teamMemberForm" class="customer-detail-form" enctype="multipart/form-data" method="POST" action="{{ route('admin.team-members.store')}}">
                @csrf
                @include('admin/team-members/_form')
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/additional-methods.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#teamMemberForm').validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 255
                },
                designation: {
                    required: true,
                    maxlength: 255
                },
                image: {
                    required: function(element) {
                        return $("#existingImage").length === 0;
                    },
                    extension: "jpg|jpeg|png|gif|ico"
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

        $(document).on('submit', '#teamMemberForm', function(e){
            e.preventDefault();
            $('body').find('.contactError').remove();
            if($(this).valid()){
                var url = '{{ route("admin.team-members.store") }}';
                let formData = new FormData(this);
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('#saveTeamMemberBtn').attr('disabled', true);
                    },
                    success: function(response) {
                        toastr.success(response.message, 'Success!');
                        setTimeout(function() {
                            window.location = '{{route("admin.team-members.index")}}';
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
                        $('#saveTeamMemberBtn').attr('disabled', false);
                    }
                });
            }
        });
    });
</script>
@endsection