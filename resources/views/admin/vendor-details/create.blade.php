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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Vendor Mag.</a></li>
                                <li class="breadcrumb-item active">Vendor Add</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Vendor Details Add</h4>
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
                    <form action="{{route('vendor-detail.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 ">
                                <h4 class="card-title mt-0 mb-0">Add Vendor Details</h4>
                            </div>
                            <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="username">User Name</label>
                                    <input type="text" required class="form-control" name="username" id="username" placeholder="User Name">
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" required class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" required class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" required class="form-control" name="first_name" id="first_name" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4 ">
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" required class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="number" required class="form-control" name="phone_number" id="phone number" placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <p class="text-muted  ">Gender</p>
                                <div class="radio radio-info form-check-inline">
                                    <input type="radio" id="inlineRadio1" value="m"  class="mr-1" name="gender" checked="">
                                    <label for="inlineRadio1"> Male </label>
                                </div>
                                <div class="radio form-check-inline">
                                    <input type="radio" id="inlineRadio2" value="f" name="gender">
                                    <label for="inlineRadio2"> Female </label>
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <p class="text-muted  ">Status</p>
                                <div class="radio radio-info form-check-inline">
                                    <input type="radio" id="inlineRadio2" value="1"  class="mr-1" name="status" checked="">
                                    <label for="inlineRadio1"> Active </label>
                                </div>
                                <div class="radio form-check-inline">
                                    <input type="radio" id="inlineRadio3" value="0" name="status">
                                    <label for="inlineRadio2"> Disable </label>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-4">
                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                    <input type="file" class="dropify" data-max-file-size="8000kb" data-validation-allowing="jpg, jpeg, png" accept="image/x-png,image/jpeg" name="avatar">
                                                    <label for="profile_image" class="col-sm-12" style="text-align: center;"><b>Profile Image </b></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="company_name">Company Name </label>
                                    <input type="text" required class="form-control" name="company_name" id="company_name" placeholder="Company Name">
                                </div>
                            </div> --}}
                            {{-- <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" required class="form-control" name="address" id="address" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" required class="form-control" name="city" id="city" placeholder="City">
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input type="text" required class="form-control" name="state" id="state" placeholder="State">
                                </div>
                            </div> --}}
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
      <!-- Plugins css image -->
      <link href="{{asset('admin/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('admin/libs/dropify/dropify.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('other-page-js')
     <!-- Plugins js image-->
     <script src="{{asset('admin/libs/dropzone/dropzone.min.js')}}"></script>
     <script src="{{asset('admin/libs/dropify/dropify.min.js')}}"></script>

     <!-- Init js image-->
     <script src="{{asset('admin/js/pages/form-fileuploads.init.js')}}"></script>
@endsection
