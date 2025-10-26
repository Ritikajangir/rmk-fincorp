@extends('layouts.admin')
@section('title', 'Team Member List')
@section('content')

    <div class="main-title add_brand_wrapper">
        <div class="dash-title">
            <h2>Testimonial List</h2>
        </div>
        <div class="header_profile">
            <div class="add_brand">
                <a href="{{route('admin.team-members.create')}}" class="nbtn gap-2"><i class="fi fi-rr-plus"></i> Add Team Member</a>
            </div>
            @include('layouts.header-dropdown')
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

@endsection

@section('scripts')
{!! $dataTable->scripts() !!}
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready( function(){
    $(document).on('submit', '.deleteTeamMemberForm', function(e){
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
                            $('#team-members-table').DataTable().ajax.reload();
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
  });
</script>
@endsection