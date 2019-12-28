
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>True Bus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">

                                <div class="text-center w-75 m-auto">
                                    <a href="#">
                                        {{-- <span><img src="assets/images/logo-dark.png" alt="" height="22"></span> --}}
                                        <h3>Blue Bus</h3>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Don't have an account? Create your account, it takes less than a minute</p>
                                </div>

                                <form action="{{ route('vendor.register.new')   }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="fullname">User Name</label>
                                        <input class="form-control" type="text" name="username" id="fullname" placeholder="Enter your name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" name="emailid" id="emailaddress" required placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" name="password" required id="password" placeholder="Enter your password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                                            <label class="custom-control-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-success btn-block" type="submit"> Sign Up </button>
                                    </div>

                                </form>



                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">Already have account?  <a href="{{ route('vendor') }}" class="text-white ml-1"><b>Sign In</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2015 - 2018 &copy;..........by <a href="#" class="text-white-50">Blue Bus</a>
        </footer>

        <!-- Vendor js -->
        <script src="{{ asset('admin/js/vendor.min.js')}}"></script>



        <!-- App js -->
        <script src="{{ asset('admin/js/app.min.js')}}"></script>

    </body>

</html>
