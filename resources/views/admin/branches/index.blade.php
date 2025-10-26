@extends('layouts.admin')
@section('title', 'Branch List')
@section('content')

<div class="dash-right-area">
    <div class="main-title add_brand_wrapper">
        <div class="dash-title">
            <h2>Branch List</h2>
        </div>
        <div class="header_profile">
            <div class="d-flex add_brand_wrapper">
                <div class="add_brand">
                    <a href="javascript:void(0)" class="nbtn gap-2" id="addBranchBtn"><i class="fi fi-rr-plus"></i> Add Branch</a>
                </div>
            </div>
            <div class="dropdown user-dropdown desktop-mode">
                <button class="dropdown-toggle ms-auto p-0" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false" tabIndex="0">
                    <div class="img-user">
                        AU
                    </div>
                    <div class="name-dta d-flex align-items-end">
                        <div class="welcome-user">
                            <span class="welcome">Welcome</span>
                            <span class="user-name-title">Admin User</span>
                        </div>
                        <span class="arrow-icon ms-2">
                            <svg tabindex="-1" width="10" height="5" viewBox="0 0 14 8" fill="none"
                                xmlns="http://www.w3.org/2000/svg" tabindex="-1">
                                <path tabindex="-1" d="M13.002 7L7.00195 0.999999L1.00195 7" stroke="#102846" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" tabindex="-1"></path>
                            </svg>
                        </span>
                    </div>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <div class="dropdown-item" tabindex="-1"><span>Username:</span> Admin User</div>
                        </li>
                        <li>
                            <div class="dropdown-item" tabindex="-1"><span>Email:</span> admin.his@example.com</div>
                        </li>
                        <li>
                            <div class="dropdown-item" tabindex="-1"><span>Role:</span> admin</div>
                        </li>
                        <li>
                            <a class="dropdown-item logout-item-anchor" href="javascript:void(0)" title="Logout" id="logout-btn" tabIndex="0">
                                <span>Logout </span>
                                <div class="menu-img">
                                    <img src="{{asset('assets/images/log-out.svg')}}" alt="Logout">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
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
      <input type="hidden" id="branch_id" name="branch_id" value="">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addBranchModalLabel">Add Branch</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @csrf
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
          <button type="submit" class="btn btn-primary submit-btn" id="saveBranchBtn">Save Branch</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- Branch Details Modal -->
<div class="modal fade" id="branchDetailsModal" tabindex="-1" aria-labelledby="branchDetailsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="branchDetailsLabel">Branch Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Name:</strong> <span id="branchNameShow"></span></p>
        <p><strong>Address:</strong> <span id="branchAddressShow"></span></p>
        <p><strong>Created At:</strong> <span id="branchCreatedAt"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')
{!! $dataTable->scripts() !!}
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready( function(){
    $(document).on('submit', '.deleteBranchForm', function(e){
        e.preventDefault();
        var formData = $(this).serialize();
        var url = $(this).attr('action');
    
        swal.fire({
            title: "Are You Sure?",
            text: "Once deleted, this record cannot be restored",
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
                            toastr.success(response.message, 'Success!');
                            $('#branches-table').DataTable().ajax.reload();
                        } else {
                            toastr.error(response.message, 'Error!');
                        }
                    }
                });

            } else {
                e.dismiss;
            }
        });
    });

    $(document).on('shown.bs.modal', '#addBranchModal', function () {
        $('#branchName').focus();
    });

    $(document).on('click', '#addBranchBtn, .editBranchBtn', function(){
        $('#addBranchForm')[0].reset();
        $('#addBranchForm').validate().resetForm();
        $('#addBranchForm input, #addBranchForm textarea').removeClass('is-invalid');
        $('#addBranchModal').modal('show');
    });

    $('#addBranchBtn').click(function() {
        $('#branch_id').val('');
        $('#addBranchModalLabel').text('Add Branch');
        $('.submit-btn').text('Save Branch');
    });

    $(document).on('click', '.editBranchBtn', function() {
        $('#branch_id').val($(this).attr('data-id'));
        $('#branchName').val($(this).attr('data-name'));
        $('#branchAddress').val($(this).attr('data-address'));
        $('#addBranchModalLabel').text('Edit Branch');
        $('.submit-btn').text('Update Branch');
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
            var url = $('#branch_id').val() ? ('{{ route("admin.branch.update", "__ID__") }}').replace('__ID__', $('#branch_id').val()) : '{{ route("admin.branch.store") }}';
            $.ajax({
                url: url,
                method: $('#branch_id').val() ? 'PUT' : 'POST',
                data: $(this).serialize(),
                beforeSend: function() {
                    $('#saveBranchBtn').attr('disabled', true);
                },
                success: function(response) {
                    toastr.success(response.message, 'Success!');
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

    $(document).on('click', '.show-branch-btn', function () {    console.log($(this).attr('data-name'));
        $('#branchNameShow').text($(this).attr('data-name'));
        $('#branchAddressShow').text($(this).attr('data-address'));
        $('#branchCreatedAt').text($(this).attr('data-created_at'));
        $('#branchDetailsModal').modal('show');
    });
  });
</script>
@endsection