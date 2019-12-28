@extends('admin.layout')


@section('page-title')

@endsection

@section('other-page-css')
    {{-- sweetalert --}}
    <link href="{{asset('admin/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bus Type</a></li>
                                <li class="breadcrumb-item active">Bus Type Details</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Bus Type Details</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
        </div>
    <!-- End Content-->

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-warning" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                </div>
                <div class="card-body">
                    <form action="{{route('bus-type.add')}} " method="post">
                        <div class="row">
                            @csrf
                            <div class="col-12 col-md-12 ">
                                <h4 class="card-title mt-0 mb-0">Add Bus Type</h4>
                            </div>
                            <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <label for="bustype">Bus Type</label>
                                    <input type="text" class="form-control" name="bus_type" id="bus_type" placeholder="Bus Type">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                               <div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                               </div>
                                <input type="submit" class="btn btn-sm btn-primary" value="Submit">
                                <input type="reset" class="btn btn-sm btn-danger " value="Reset">
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-danger" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                </div>
                <div class="card-body">
                    <div class="table-responsive text-center"  >
                        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="10">
                            <thead class="thead-light">
                                <tr>
                                    <th style="width: 20px;">#</th>
                                    <th>Bus Type Name</th>
                                    <th>Status</th>
                                    <th style="width: 125px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item['bus_type']}}</td>
                                    <td> <button class="btn status-change {{$item->status == 1?"btn-outline-primary":"btn-outline-danger"}} btn-rounded waves-effect waves-light btn-sm" value="{{$item->status==1?"Active":"Disable"}}" id="{{$item->id}}">{{$item->status==1?"Active":"Disable"}}</button></td>
                                    <td>
                                        <a href="{{ route('bus-type.edit',['id'=>$item->id]) }}" class="mr-1 text-primary"><i class=" far fa-edit"></i></a>
                                        <a class="mr-1 text-danger remove_bus" id="{{$item->id}}"><i class=" fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->
    </div>

@endsection

@section('other-page-js')
    <script src="{{asset('admin/libs/sweetalert2/sweetalert2.min.js')}}"></script>

    <script>
        ///  Delete Bus Type  ///
        $('.remove_bus').click(function(){
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
                            url:'{{route('bus-type.destory')}}',
                            data:{
                                id : c_id
                            },
                            type:'get',
                            success:function(responce)
                            {
                                if (responce=="success") {
                                swal({
                                    title: "Deleted !",
                                    text: "Successfull deleted bus type",
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


        ///  Status Change ///
        $('.status-change').click(function(){
            var status= $(this).val()=="Active"?0:1;
            var id=$(this).prop('id');
            swal({
                    title: "Are you sure?",
                    text: "Update the status on bus type.",
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
                        data:{'status':status,'id':id,'model':'BusType',"_token": "{{ csrf_token() }}"},
                        success:function(responce){
                            if (responce=="success" && status==true) {
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
