<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Blue Bus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin/images/favicon.ico')}}">


        <!-- extra css  -->
        @yield('other-page-css')

        <!-- App css -->
        <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />


    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->

                @include('admin.layout.navbar');

            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->

                @include('admin.layout.slidebar');

            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                @yield('content')

                <!-- Footer Start -->

                    @include('admin.layout.footer')

                <!-- end Footer -->


            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- Vendor js -->
        <script src="{{ asset('admin/js/vendor.min.js')}}"></script>

        <!-- extra js -->

        @yield('other-page-js')

        <!-- App js -->
        <script src="{{ asset('admin/js/app.min.js')}}"></script>

    </body>

</html>


