@extends('admin.layout')


@section('page-title')

@endsection

@section('other-page-css')

<!-- Plugins css -->
<link href="{{ asset('admin/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">BlueBus</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Extras</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <h4 class="page-title">Profile</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-4 col-xl-4">
            <div class="card-box text-center">

                @if (($admin_details->avatar) == "")
                <img src="{{  asset('admin/images/admin.png')  }}" class="rounded-circle avatar-lg img-thumbnail"alt="profile-image">
                @else
                <img src="{{  asset($admin_details->avatar)  }}" class="rounded-circle avatar-lg img-thumbnail"alt="profile-image">
                @endif

                <h4 class="mb-0">{{ $admin_details->username }}</h4>
                <p class="text-muted">bluebus</p>

                <div class="text-left mt-3">
                    <h4 class="font-13 text-uppercase">About Me :</h4>
                    <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2">{{ Auth::guard('admin')->user()->username }}</span></p>

                    <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ml-2">{{ $admin_details->mobile_no }}</span></p>

                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 ">{{ $admin_details->email }}</span></p>

                </div>


            </div> <!-- end card-box -->



        </div> <!-- end col-->

        <div class="col-lg-8 col-xl-8">
            <div class="card-box">
                <ul class="nav nav-pills navtab-bg nav-justified">
                    <li class="nav-item">
                        <a href="#settings" data-toggle="tab" aria-expanded="true" class="nav-link active navi">
                            Settings
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#password" data-toggle="tab" aria-expanded="false" class="nav-link navi">
                            Password
                        </a>
                    </li>
                </ul>
            <ul class="nav  nav-justified ml-1 mr-1 mb-1 mt-1 status">
                    @if (Session::has('status'))
                        <div class="alert alert-danger" style="text-align:center;height:40px;width:100%;padding-top:10px;" >{{Session::get('status')}}!</div>
                        {{-- <div class="alert alert-danger " style="text-align:center;height:40px;width:100%;padding-top:10px;" >Old Password Mismatch!</div> --}}
                    @endif
                </ul>
                <div class="tab-content">

                    <div class="tab-pane" id="settings">
                        <form action="{{ route('profile.update') }}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="username">User Name</label>
                                        <input type="text" class="form-control" required id="username" name="username" value="{{ $admin_details->username }}" placeholder="Enter first name">
                                        <span class="text-danger">@error('username') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="adminemail">Email Address</label>
                                        <input type="email" class="form-control" required id="adminemail" name="email" value="{{ $admin_details->email }}" placeholder="Enter email">
                                        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobileno">Mobile No</label>
                                        <input type="tel" class="form-control" required id="mobileno" name="mobile_no" value="{{ $admin_details->mobile_no }}" placeholder="Enter password">
                                        <span class="text-danger">@error('mobile_no') {{ $message }} @enderror</span>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="mb-2 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Profile Image Update </h5>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mt-3">
                                                <input type="hidden" name="old_profile" value="{{ $admin_details->avatar }}">
                                                <input type="file" class="dropify" name="profile_image" data-default-file="profile_image"  />
                                                <p class="text-muted text-center mt-2 mb-0">Admin Image</p>
                                                <span class="text-danger">@error('profile_image') {{ $message }} @enderror</span>
                                            </div>
                                        </div>
                                    </div> <!-- end row -->
                                </div><!-- end col -->
                            </div>
                            <!-- end row -->


                            <div class="text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                            </div>
                        </form>
                    </div>
                    <!-- end settings content-->

                    <div class="tab-pane" id="password">
                        <form method="POST" action="{{ route('profile.passwor.update') }}" >
                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Password Changes</h5>
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="oldpassword">Password</label>
                                        <input type="password" class="form-control" required id="oldpassword" name="old_password" placeholder="Enter Old assword">
                                        <span class="text-danger">@error('old_password') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="newpassword">New Password</label>
                                        <input type="password" class="form-control" required id="newpassword" name="new_password" placeholder="Enter New password">
                                        <span class="text-danger">@error('new_password') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="confirmpassword">Re-enter Password</label>
                                        <input type="password" class="form-control" required id="confirmpassword" name="confirm_password" placeholder="Enter Confirm password">
                                        <span class="text-danger">@error('confirm_password') {{ $message }} @enderror</span>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->


                            <div class="text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                            </div>
                        </form>
                    </div>
                    <!-- end password content-->
                </div> <!-- end tab-content -->
            </div> <!-- end card-box-->

        </div> <!-- end col -->
    </div>
    <!-- end row-->

</div> <!-- container -->


@endsection


@section('other-page-js')

<!-- Plugins js -->
<script src="{{ asset('admin/libs/dropzone/dropzone.min.js') }}"></script>
<script src="{{ asset('admin/libs/dropify/dropify.min.js') }}"></script>

<!-- Init js-->
<script src="{{ asset('admin/js/pages/form-fileuploads.init.js') }}"></script>
<script>
    $(document).ready(function(){
        $(".navi").click(function(){
            $(".status").hide();
        });
    });
</script>
@endsection
