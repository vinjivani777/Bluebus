<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                {{-- Dashboard --}}
                <li>
                    <a href="{{ route('index') }}">
                        <i class="ti-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                {{-- bus management --}}
                <li>
                    <a href="javascript: void(0);">
                        <i class="fa fa-bus"></i>
                        <span> Bus Management </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('bus-detail') }}">View All Bus</a>
                        </li>
                        <li>
                            <a href="{{ route('bus-type') }}">Bus Type</a>
                        </li>
                        <li>
                            <a href="{{ route('route-detail') }}">Routes </a>
                        </li>
                        <li>
                            <a href="{{ route('board-point') }}">Board Point</a>
                        </li>
                        <li>
                            <a href="{{ route('drop-point') }}">Drop Point</a>
                        </li>
                        <li>
                            <a href="{{ route('seat-layout') }}">Seat Layout</a>
                        </li>

                    </ul>
                </li>

                {{-- amenities details --}}
                <li>
                    <a href="{{ route('amenities') }}">
                        <i class="fas fa-level-up-alt"></i>
                        <span> Amenities  </span>
                    </a>
                    {{-- <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('amenities') }}">View All</a>
                        </li>
                    </ul> --}}
                </li>

                {{-- route details --}}
                {{-- <li>
                    <a href="javascript: void(0);" aria-expanded="false">
                        <i class="fa fa-road"></i>
                        <span> Route Details </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('route-detail') }}">View All Route</a>
                        </li>
                    </ul>
                </li> --}}

                {{-- board point details --}}
                {{-- <li>
                    <a href="javascript: void(0);">
                        <i class="fas fa-level-up-alt"></i>
                        <span> Board Point Details </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('board-point') }}">View All</a>
                        </li>
                    </ul>
                </li> --}}


                {{-- drop point details --}}
                {{-- <li>
                    <a href="javascript: void(0);">
                        <i class=" icon-drop"></i>
                        <span> Drop Point Details </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('drop-point') }}">View All</a>
                        </li>
                    </ul>
                </li> --}}

                {{-- promo management --}}
                <li>
                    <a href="{{ route('promo-detail') }}">
                        <i class="icon-tag"></i>
                        <span> Promo Management </span>
                        {{-- <span class="menu-arrow"></span> --}}
                    </a>
                </li>

                {{-- promo management --}}
                <li>
                    <a href="{{ route('img_gallery') }}">
                        <i class="far fa-images"></i>
                        <span> Bus Image Gallery </span>
                    </a>
                    {{--  <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="index.html">View All</a>
                        </li>
                    </ul>  --}}
                </li>

                {{-- Agent management --}}
                <li>
                    <a href="{{ route('otheradmin-detail') }}">
                        <i class=" fas fa-users-cog"></i>
                        <span>All User</span>
                    </a>
                    {{-- <ul class="nav-second-level" aria-expanded="false"> --}}
                        {{-- <li>
                            <a href="{{ route('otheradmin-detail') }}">All User</a>
                        </li> --}}
                        {{-- <li>
                            <a href="{{ route('otheradmin-detail') }}">Admin List</a>
                        </li> --}}
                    {{-- </ul> --}}
                </li>


                {{-- admin management --}}
                <li>
                    <a href="{{ route('admin-detail') }}">
                        <i class=" fas fa-user-cog"></i>
                        <span>Admin</span>
                    </a>
                    {{-- <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('vendor-detail') }}">View All</a>
                        </li>
                        <li>
                            <a href="index.html">Add Bus Gallery </a>
                        </li>
                    </ul> --}}
                </li>

                 {{-- vendor management --}}
                 <li>
                    <a href="{{ route('vendor-detail') }}">
                        <i class=" fas fa-user-cog"></i>
                        <span>Vendor</span>
                    </a>
                    {{-- <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('vendor-detail') }}">View All</a>
                        </li>
                        <li>
                            <a href="index.html">Add Bus Gallery </a>
                        </li>
                    </ul> --}}
                </li>

                {{-- customer details --}}
                <li>
                    <a href="{{ route('customer-detail') }}">
                        <i class="  fas fa-users"></i>
                        <span>Customer</span>
                    </a>
                </li>

                 {{-- rating --}}
                 <li>
                    <a href="{{ route('booking-detail') }}">
                        <i class=" fas fa-book"></i>
                        <span>Booking Details</span>
                    </a>
                </li>

                {{-- Cancellation --}}
                <li>
                    <a href="javascript: void(0);">
                        <i class="fas fa-ban"></i>
                        <span>Cancellation</span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('cancellation-detail') }}">View All</a>
                        </li>
                    </ul>
                </li>

                {{-- Setting  --}}
                <li>
                    <a href="javascript: void(0);">
                        <i class="fas fa-cogs"></i>
                        <span>Web Settings</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('generalsetting') }}">Genaral Setting</a>
                        </li>
                        <li>
                            <a href="{{ route('menus') }}">Menus Setting</a>
                        </li>
                        <li>
                            <a href="{{ route('emailsetting') }}">Email Setting</a>
                        </li>
                        <li>
                            <a href="{{ route('smssetting') }}">SMS Setting</a>
                        </li>
                        <li>
                            <a href="{{ route('contactsetting') }}">Contact Setting</a>
                        </li>
                        <li>
                            <a href="#">Language Setting</a>
                        </li>
                    </ul>
                </li>

                {{-- seat layout --}}
                {{-- <li>
                    <a href="javascript: void(0);">
                        <i class="fas fa-wheelchair"></i>
                        <span>Seat Layout</span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('seat-layout') }}">View All</a>
                        </li>
                        <li>
                            <a href="index.html">Add Bus Gallery </a>
                        </li>
                    </ul>
                </li> --}}

                {{-- rating --}}
                <li>
                    <a href="{{ route('rating') }}">
                        <i class=" far fa-star"></i>
                        <span>Rating</span>
                    </a>
                </li>



            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
