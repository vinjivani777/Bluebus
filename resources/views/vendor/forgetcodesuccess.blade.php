<!DOCTYPE html>
<html lang="en">


<head>
        <meta charset="utf-8" />
        <title>Forget Password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured vendor theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        {{-- <link rel="shortcut icon" href="{{asset('admin/images/favicon.ico')}}"> --}}


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
                                    <a href="{{route('vendor.index')}}">
                                        <span><img src="{{asset('admin/images/favicon.ico')}}" alt="" height="22"></span>
                                    </a>
                                </div>

                                <form action="">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="data">Password Reset Link Has Been Sent to Your Email-ID/Phone Number.
                                                            Check Message For Further Process. </label>
                                    </div>
                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">Back to <a href="pages-login.html" class="text-white ml-1"><b>Log in</b></a></p>
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
            2015 - 2018 &copy; UBold theme by <a href="#" class="text-white-50">Coderthemes</a>
        </footer>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/ubold/layouts/light/pages-recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Jan 2019 11:44:23 GMT -->
</html>
