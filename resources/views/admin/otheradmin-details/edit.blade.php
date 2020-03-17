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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                                <li class="breadcrumb-item active">User Edit</li>
                            </ol>
                        </div>
                        <h4 class="page-title">User Details Edit</h4>
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
                    <form action="{{route('otheradmin-detail.update',['id'=>$edit->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 ">
                                <h4 class="card-title mt-0 mb-0">Edit User Details</h4>
                            </div>
                            <div class="col-12 col-md-12 font-weight-bold  text-danger ">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <label for="userName">User Name</label>
                                    <input type="text" required class="form-control" value="{{ $edit->username }}" name="userName" id="userName" placeholder="User Name">
                                    <span class="text-danger">@error('userName') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <label for="firstName">First Name</label>
                                    <input type="firstName" required class="form-control" value="{{ $edit->first_name }}" name="firstName" id="firstName" placeholder="First Name">
                                    <span class="text-danger">@error('firstName') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <label for="lastName">Last Name</label>
                                    <input type="lastName" required class="form-control" value="{{ $edit->last_name }}" name="lastName" id="lastName" placeholder="Last Name">
                                    <span class="text-danger">@error('lastName') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" required class="form-control" value="{{ $edit->email }}" name="email" id="email" placeholder="Email" readonly disabled>
                                    <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" required class="form-control bg-light"  name="password" id="password" readonly disabled placeholder="Password Can't Edit">
                                    <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <label for="phoneNumber">Phone Number</label>
                                    <input type="number" required class="form-control" value="{{ $edit->mobile_no }}" name="phoneNumber" id="phoneNumber" placeholder="Phone Number">
                                    <span class="text-danger">@error('phoneNumber') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <p class="text-muted  ">Gender</p>
                                <div class="radio radio-info form-check-inline">
                                    <input type="radio" id="inlineRadio1" value="m"  class="mr-1" name="gender" @if(($edit->gender) == "m") {{ "checked" }} @endif>
                                    <label for="inlineRadio1"> Male </label>
                                </div>
                                <div class="radio form-check-inline ">
                                    <input type="radio" id="inlineRadio2" value="f" name="gender" @if(($edit->gender) == "f") {{ "checked" }} @endif>
                                    <label for="inlineRadio2"> Female </label>
                                </div>
                                <span class="text-danger">@error('gender') {{ $message }} @enderror</span>

                                <p class="text-muted  mt-3">Status</p>
                                <div class="radio radio-info form-check-inline">
                                    <input type="radio" id="inlineRadio2" value="1"  class="mr-1" name="status" @if(($edit->status) == 1) {{ "checked" }} @endif>
                                    <label for="inlineRadio1"> Active </label>
                                </div>
                                <div class="radio form-check-inline">
                                    <input type="radio" id="inlineRadio3" value="0" name="status" @if(($edit->status) == 0) {{ "checked" }} @endif>
                                    <label for="inlineRadio2"> Disable </label>
                                </div>
                                <span class="text-danger">@error('status') {{ $message }} @enderror</span>
                            </div>
                            <div class="col-4 col-md-4 col-lg-4 col-sm-4">
                                <div class=" bootstrap-select">
                                    <label for="">User Role</label>
                                    <select class="selectpicker" readonly disabled  data-style="btn-light">
                                        <option value="">Select User Role</option>
                                        @foreach ($userRole as $item)
                                            <option value="{{ $item->id }}" @if(($edit->role_id) == ($item->id)) {{ "selected" }} @endif > {{  $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="oldusername" value="{{ $edit->username }}">

                                    <input type="hidden" name="userRole" value="{{ $edit->role_id }}">
                                    <span class="text-danger">@error('userRole') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-4">
                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <input type="hidden" name="oldimg" value="{{ $edit->avatar }}">
                                                <input type="file" class="dropify" data-default-file="{{ asset('/'.$edit->avatar) }}" data-max-file-size="8000kb" data-validation-allowing="jpg, jpeg, png" accept="image/x-png,image/jpeg" name="avatar">
                                                <label for="profile_image" class="col-sm-12" style="text-align: center;"><b>Avatar</b></label>
                                                <span class="text-danger">@error('avatar') {{ $message }} @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                                <input type="submit" class="btn btn-sm btn-primary" value="Update">
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

      <link href="{{ asset('admin/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('other-page-js')
     <!-- Plugins js image-->
     <script src="{{asset('admin/libs/dropzone/dropzone.min.js')}}"></script>
     <script src="{{asset('admin/libs/dropify/dropify.min.js')}}"></script>

     <!-- Init js image-->
     <script src="{{asset('admin/js/pages/form-fileuploads.init.js')}}"></script>


     <script src="{{ asset('admin/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>

     <!-- Init js-->
     <script src="{{ asset('admin/js/pages/form-advanced.init.js"></script>


@endsection
