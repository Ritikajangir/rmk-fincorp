@extends('layouts.admin')
@section('title', 'Branch List')
@section('content')

<div class="dash-right-area">
    <div class="main-title add_brand_wrapper">
        <div class="dash-title">
            <h2>Branch List</h2>
        </div>
        <div class="add_brand">
            <a href="javascript:void(0)" class="nbtn gap-2" id="addBranchBtn"><i class="fi fi-rr-plus"></i> Add Branch</a>
        </div>
    </div>
    <div class="data-fieldtable">
        <div class="data-fieldtable">
            <div class="table-responsive normal_width_table">
                <div class="clearfix"></div>
                {{$dataTable->table(['class' => 'table dt-responsive nowrap', 'style' => 'width:100%;'])}}
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addBranchModal" tabindex="-1" aria-labelledby="addBranchModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="addBranchForm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addBranchModalLabel">Add Branch</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @csrf <!-- Add CSRF token -->
            <div class="mb-3">
                <label for="branchName" class="form-label">Name<span class="mailstar" style="color: red;">*</span></label>
                <input type="text" class="form-control" id="branchName" name="name" required placeholder="Enter Name">
            </div>
            <div class="mb-3">
                <label for="branchAddress" class="form-label">Address<span class="mailstar" style="color: red;">*</span></label>
                <textarea class="form-control" id="branchAddress" name="address" required placeholder="Enter Address"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save Branch</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection

@section('scripts')
@parent
{!! $dataTable->scripts() !!}
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready( function(){
    $(document).on('submit', '.deleteBranchForm', function(e){
        e.preventDefault();
        var formData = $(this).serialize();
        var url = $(this).attr('action');
    
        swal.fire({
            title: "{{ trans('global.areYouSure') }}",
            text: "{{ trans('global.onceClickedRecordDeleted') }}",
            icon: 'question',
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {
            if (e.value === true) {
                $.ajax({
                    type: 'delete',
                    url: url,
                    data: formData,
                    dataType: 'JSON',
                    success: function (response) {
                        if (response.success == true) {
                            fireSuccessSwal('Success',response.message);
                            setTimeout(function(){
                                location.reload();
                            },1000);
                        } else {
                            fireErrorSwal('Error',response.message);
                        }
                    }
                });

            } else {
                e.dismiss;
            }
        });
    });

    $('#addBranchBtn').click(function() {
        $('#addBranchModal').modal('show');
        $('#addBranchForm')[0].reset();
        $('#addBranchForm').validate().resetForm();
        $('#addBranchForm input').removeClass('is-invalid');
    });

    $('#addBranchForm').validate({
        rules: {
            name: {
                required: true,
                maxlength: 255
            },
            address: {
                required: true,
            }
        },
        messages: {
            name: {
                required: "Please enter name",
                maxlength: "Name cannot exceed 255 characters"
            },
            address: {
                required: "Please enter address",
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

    $(document).on('submit', '#addBranchForm', function(e){
        e.preventDefault();
        $('body').find('.contactError').remove();
        if($(this).valid()){
            $.ajax({
                url: '{{ route("admin.branch.store") }}',
                method: 'POST',
                data: $(this).serialize(),
                beforeSend: function() {
                    $('#saveBranchBtn').attr('disabled', true);
                },
                success: function(response) {
                    $('#addBranchModal').modal('hide');
                    $('#branches-table').DataTable().ajax.reload();
                },
                error: function(xhr) {
                    var result = xhr.responseJSON.errors; 
                    $.each(result, function(key, value) {                        
                        var $field = $('[name="' + key + '"]');
                        $field.addClass('is-invalid');
                        $field.after('<span class="text-danger contactError"> ' + value  + '</span>');
                    });
                },
                complete: function() {
                    $('#saveBranchBtn').attr('disabled', false);
                }
            });
        }
    });
  });
</script>
@endsection