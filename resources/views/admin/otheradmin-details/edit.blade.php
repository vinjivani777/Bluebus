@extends('admin.layout')


@section('page-title')

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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Agent Mag.</a></li>
                                <li class="breadcrumb-item active">Agent Edit</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Agent Details Edit</h4>
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
                    <form action="{{ route('otheradmin-detail.update',['id'=>$edit->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 ">
                                <h4 class="card-title mt-0 mb-0">Add Agent Details</h4>
                            </div>
                            <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="user">User Name</label>
                                    <input type="text" required class="form-control" value="{{$edit->username}}" name="username" id="user_name" placeholder="User Name">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4" style="display:none">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" required class="form-control" value="{{$edit->password}}" name="password" id="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" required class="form-control" value="{{$edit->email}}" name="email" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-6 col-sm-4">
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="number" required class="form-control" value="{{$edit->mobile_no}}" name="phone_number" id="phone number" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-2 col-md-2 col-lg-2 col-sm-2">
                                <div class="form-group">
                                    <?php $imgadd= "admin/".$edit->profile_picture;  ?>
                                    <input type="hidden" value="{{$imgadd}}"  name="oldimg" >
                                    <img src="{{asset($imgadd)}}" name="oldimg" value="{{$edit->profile_picture}}" style="width:80px;height:80px;margin-bottom:20px" >
                                    <label for="img">Edit Image</label>
                                    </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-2">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="admin_img" id="admin_img" style="margin-top:30px">
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

@endsection



@section('other-page-css')

@endsection

@section('other-page-js')

@endsection