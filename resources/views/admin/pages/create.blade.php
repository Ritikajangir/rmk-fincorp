@extends('layouts.admin')
@section('title', 'Add Page')
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.9.1/summernote-bs5.min.css"/>
@endsection
@section('content')
<div class="dash-right-area">
    <div class="main-title add_brand_wrapper">
        <div class="dash-title">
            <h2>Add Page</h2>
        </div>
    </div>
    <div class="data-fieldtable">
        <div class="data-fieldtable">
            <form id="pageForm" class="customer-detail-form" enctype="multipart/form-data" method="POST" action="{{ route('admin.pages.store')}}">
                @csrf
                @include('admin/pages/_form')
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.9.1/summernote-bs5.min.js"></script>
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#summernote').summernote({
            tooltip: false,
            height: 400,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '20', '24', '28', '32', '36', '48', '64', '82', '150']
        });


        $('#pageForm').validate({
            rules: {
                title: {
                    required: true,
                    maxlength: 255
                },
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

        $(document).on('submit', '#pageForm', function(e){
            e.preventDefault();
            $('body').find('.contactError').remove();
            if($(this).valid()){
                var url = '{{ route("admin.pages.store") }}';
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: $(this).serialize(),
                    beforeSend: function() {
                        $('#savePageBtn').attr('disabled', true);
                    },
                    success: function(response) {
                        toastr.success(response.message, 'Success!');
                        setTimeout(function() {
                            window.location = '{{route("admin.pages.index")}}';
                        }, 1000);
                    },
                    error: function(xhr) {
                        var result = xhr.responseJSON.errors; 
                        $.each(result, function(key, value) {                        
                            var $field = $('[name="' + (key == 'content' ? 'summernote' : key) + '"]');
                            $field.addClass('is-invalid');
                            if ($field.hasClass('summernote') || $field.is('textarea')) {
                                var $summernoteEditor = $field.next('.note-editor');
                                if ($summernoteEditor.length) {
                                    $summernoteEditor.after('<span class="text-danger contactError">' + value + '</span>');
                                } else {
                                    $field.after('<span class="text-danger contactError">' + value + '</span>');
                                }
                            } else {
                                $field.after('<span class="text-danger contactError">' + value + '</span>');
                            }
                        });
                    },
                    complete: function() {
                        $('#savePageBtn').attr('disabled', false);
                    }
                });
            }
        });
    });
</script>
@endsection