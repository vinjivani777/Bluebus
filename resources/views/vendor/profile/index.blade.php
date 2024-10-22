@extends('vendor.layout')


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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Blue Bus</a></li>
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

                @if (($vendor_details->avatar) == "")
                <img src="{{  asset('vendor/images/vendor.png')  }}" class="rounded-circle avatar-lg img-thumbnail"alt="profile-image">
                @else
                <img src="{{  asset($vendor_details->avatar)  }}" class="rounded-circle avatar-lg img-thumbnail"alt="profile-image">
                @endif

                <h4 class="mb-0">{{ $vendor_details->username }}</h4>
                <p class="text-muted">bluebus</p>

                <div class="text-left mt-3">
                    <h4 class="font-13 text-uppercase"><u>About Me :</u></h4>
                    <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2">{{ Auth::guard('vendor')->user()->username }}</span></p>

                    <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ml-2">{{ $vendor_details->mobile_no }}</span></p>

                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 ">{{ $vendor_details->email }}</span></p>

                </div>


            </div> <!-- end card-box -->



        </div> <!-- end col-->

        <div class="col-lg-8 col-xl-8">
            <div class="card-box">
                <ul class="nav nav-pills navtab-bg nav-justified">
                    <li class="nav-item">
                        <a href="#settings" data-toggle="tab" aria-expanded="true" class="nav-link active  show">
                            Settings
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#password" data-toggle="tab" aria-expanded="false" class="nav-link">
                            Password
                        </a>
                    </li>
                </ul>
                <div class="tab-content">

                    <div class="tab-pane" id="settings">
                        <form action="{{ route('vendor.profile.update') }}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="username">User Name</label>
                                        <input type="text" class="form-control" id="username" name="username" value="{{ $vendor_details->username }}" placeholder="Enter first name">
                                        <span class="text-danger">@error('username') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="adminemail">Email Address</label>
                                        <input type="email" class="form-control" id="adminemail" name="email" value="{{ $vendor_details->email }}" placeholder="Enter email">
                                        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobileno">Mobile No</label>
                                        <input type="tel" class="form-control" id="mobileno" name="mobile_no" value="{{ $vendor_details->mobile_no }}" placeholder="Enter password">
                                        <span class="text-danger">@error('mobile_no') {{ $message }} @enderror</span>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="mb-2 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Profile Image Update </h5>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xl-12">
                                            <div class="mt-3">
                                                <input type="hidden" name="old_profile" value="{{ $vendor_details->avatar }}">
                                                <input type="file" class="dropify" name="profile_image" data-default-file="vendor_image"  />
                                                <p class="text-muted text-center mt-2 mb-0">Vendor Image</p>
                                                <span class="text-danger">@error('profile_image') {{ $message }} @enderror</span>
                                            </div>
                                        </div>
                                    </div> <!-- end row -->
                                </div><!-- end col -->

                                <div class="col-6">
                                    <h5 class="mb-2 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> LOGO Update </h5>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xl-12">
                                            <div class="mt-3">
                                                <input type="hidden" name="old_logo" value="{{ $vendor_details->logo }}">
                                                <input type="file" class="dropify" name="logo" data-default-file="logo"  />
                                                <p class="text-muted text-center mt-2 mb-0">Vendor LOGO</p>
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
                        <form method="POST" action="{{ route('vendor.profile.passwor.update') }}" >
                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Password Changes</h5>
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="oldpassword">Password</label>
                                        <input type="password" class="form-control" id="oldpassword" name="old_password" placeholder="Enter Old assword">
                                        <span class="text-danger">@error('old_password') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="newpassword">New Password</label>
                                        <input type="password" class="form-control" id="newpassword" name="new_password" placeholder="Enter New password">
                                        <span class="text-danger">@error('new_password') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="confirmpassword">Re-enter Password</label>
                                        <input type="password" class="form-control" id="confirmpassword" name="confirm_password" placeholder="Enter Confirm password">
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

@endsection
