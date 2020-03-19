@extends('admin.layout')


@section('page-title')

@endsection

@section('other-page-css')

{{-- sweetalert --}}
<link href="{{asset('admin/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{ asset('admin/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bluebus</a></li>
                                <li class="breadcrumb-item active">Menus Details</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Menus List</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-danger" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                        </div>
                        <div class="card-body">
                            <a href="{{ route('menus.add') }}" class="btn btn-primary mb-2" ><i class="fas fa-plus mr-1"></i> Add New Menu</a>
                            <table id="basic-datatable" class="table dt table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Menu</th>
                                        <th>Sub Menu</th>
                                        <th>Stort Order</th>
                                        <th>Link</th>
                                        <th>Page</th>
                                        <th>Status</th>
                                        <th style="width: 70px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $r=1; ?>
                                    @foreach ($menus as $menu)
                                        <tr>
                                            <td>{{ $r++ }}</td>
                                            <td>{{ $menu->name }}</td>
                                            @if ($menu->parent == 0)

                                                <td>{{ $menu->name }}</td>
                                            @else
                                                <td> </td>
                                            @endif
                                            <td>{{ $menu->sort_order }}</td>
                                            <td>{{ $menu->link }}</td>
                                            <td>{{ $menu->page_id }}</td>
                                            <td>
                                                <button class="btn status-change {{$menu->status == 1?"btn-outline-primary":"btn-outline-danger"}} btn-rounded waves-effect waves-light btn-sm" value="{{$menu->status==1?"Active":"Disable"}}" id="{{$menu->id}}">{{$menu->status==1?"Active":"Disable"}}</button>
                                            </td>
                                            <td>
                                                <a href="{{ route('menus.edit',['id'=>$menu->id ]) }}" class="mr-1 text-primary"><i class=" far fa-edit"></i></a>
                                                <a name="{{$menu->id}}" class="mr-1 text-danger remove" id="{{$menu->id}}"  ><i  class=" fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div>
    <!-- End Content-->

    {{-- view model --}}
    <!--  Modal content for the above example -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">PromoCode view</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-primary" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-12 ">
                                            <h4 class="card-title mt-0 mb-0">PromoCode Details</h4>
                                        </div>
                                        <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                            <h5>Code Name</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                            <h5>Amount</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                            <h5>Status</h5>
                                            <span>bus name</span>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 ">
                                            <h5>Expire Date</h5>
                                            <span>bus name</span>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-box-->
                        </div> <!-- end col -->
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection

@section('other-page-js')
<script src="{{asset('admin/libs/sweetalert2/sweetalert2.min.js')}}"></script>

<script src="{{ asset('admin/libs/datatables/jquery.dataTable')}}s.js"></script>
<script src="{{ asset('admin/libs/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{ asset('admin/libs/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('admin/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('admin/libs/datatables/dataTables.keyTable.min.js')}}"></script>
<script src="{{ asset('admin/libs/datatables/dataTables.select.min.js')}}"></script>

<!-- Datatables init -->
<script src="{{ asset('admin/js/pages/datatables.init.js')}}"></script>

<script>
    $('.remove').click(function(){
        var c_id= $(this).attr('id');
        swal({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonClass: "btn btn-confirm mt-2",
            cancelButtonClass: "btn btn-cancel ml-2 mt-2",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.value) {
                    $.ajax({
                        url:'{{route('menus.destroy')}}',
                        data:{
                            id : c_id
                        },
                        type:'get',
                        success:function(response)
                        {
                            if (response=="success") {
                            swal({
                                title: "Deleted !",
                                text: "Successfull deleted bus",
                                type: "success",
                                timer: 500,
                                showConfirmButton: false
                            })
                            $("#"+c_id).closest("tr").fadeOut(1000);
                            } else {
                                new PNotify({
                                    title: 'Warning Notification',
                                    text: 'Contact Support Team',
                                    icon: 'icofont icofont-info-circle',
                                    type: 'Warning'
                                });
                            }
                        }
                    });
                } else {
                    swal("Ohhhhh........No!");
                }
            });
    });

    // Status Change the bus board point //
    $('.status-change').click(function(){
        var status= $(this).val()=="Active"?0:1;
        var id=$(this).prop('id');
        swal({
                title: "Are you sure?",
                text: "Update the status on Menu.",
                type: "warning",
                showCancelButton: !0,
                confirmButtonClass: "btn btn-confirm mt-2",
                cancelButtonClass: "btn btn-cancel ml-2 mt-2",
                confirmButtonText: "Yes, Update it!"
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                    type:'POST',
                    url:'{{route('status.change')}}',
                    data:{'status':status,'id':id,'model':'Menu',"_token": "{{ csrf_token() }}"},
                    success:function(response){
                        if (response=="success" && status==true) {
                            $('#'+id).addClass("btn-outline-primary ");
                            $('#'+id).removeClass("btn-outline-danger  ");
                            $('#'+id).val('Active');
                            $('#'+id).text('Active');
                        } else {
                            $('#'+id).removeClass("btn-outline-primary ");
                            $('#'+id).addClass("btn-outline-danger  ");
                            $('#'+id).val('Disable');
                            $('#'+id).text('Disable');
                        }
                    }
                });
            }
        });
    });
</script>
@endsection
