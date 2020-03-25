<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                {{-- Dashboard --}}
                <li>
                    <a href="{{ route('vendor.index') }}">
                        <i class="ti-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                {{-- bus management --}}
                <li>
                    <a href="javascript: void(0);">
                        <i class="fa fa-bus"></i>
                        <span> Bus Management </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('vendor.bus-detail') }}">View All Bus</a>
                        </li>
                        <li>
                            <a href="{{ route('vendor.bus-type') }}">Add Bus Type</a>
                        </li>
                    </ul>
                </li>

                {{-- route details --}}
                <li>
                    <a href="{{ route('vendor.route-detail') }}" aria-expanded="false">
                        <i class="fa fa-road"></i>
                        <span> Route Details </span>
                    </a>
                    {{-- <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('vendor.route-detail') }}">View All Route</a>
                        </li>
                    </ul> --}}
                </li>

                {{-- board point details --}}
                <li>
                    <a href="{{ route('vendor.board-point') }}">
                        <i class="fas fa-level-up-alt"></i>
                        <span> Board Point Details </span>
                    </a>
                    {{-- <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('vendor.board-point') }}">View All</a>
                        </li>
                    </ul> --}}
                </li>


                {{-- drop point details --}}
                <li>
                    <a href="{{ route('vendor.drop-point') }}">
                        <i class=" icon-drop"></i>
                        <span> Drop Point Details </span>
                    </a>
                    {{-- <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('vendor.drop-point') }}">View All</a>
                        </li>
                    </ul> --}}
                </li>

                {{-- promo management --}}
                <li>
                    <a href="{{ route('vendor.promo-detail') }}">
                        <i class=" icon-tag"></i>
                        <span> Promo Management </span>
                    </a>
                    {{-- <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('vendor.promo-detail') }}">View All</a>
                        </li>
                    </ul> --}}
                </li>

                {{-- bus gallery management --}}
                <li>
                    <a href="{{ route('vendor.img_gallery') }}">
                        <i class="far fa-images"></i>
                        <span> Bus Image Gallery </span>
                    </a>
                    {{--  <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="index.html">View All</a>
                        </li>
                    </ul>  --}}
                </li>



                {{-- customer details --}}
                <li>
                    <a href="{{ route('vendor.customer-detail') }}">
                        <i class="  fas fa-users"></i>
                        <span>Customer</span>
                    </a>
                </li>

                 {{-- rating --}}
                 <li>
                    <a href="{{ route('vendor.booking-detail') }}">
                        <i class=" fas fa-book"></i>
                        <span>Booking Details</span>
                    </a>
                </li>

                {{-- Cancellation --}}
                <li>
                    <a href="{{ route('vendor.cancellation-detail') }}">
                        <i class="fas fa-ban"></i>
                        <span>Cancellation</span>
                    </a>
                </li>



                {{-- seat layout --}}
                {{-- <li>
                    <a href="javascript: void(0);">
                        <i class="fas fa-wheelchair"></i>
                        <span>Seat Layout</span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('vendor.seat-layout') }}">View All</a>
                        </li> --}}
                        {{-- <li>
                            <a href="index.html">Add Bus Gallery </a>
                        </li> --}}
                    {{-- </ul>
                </li> --}}

                {{-- rating --}}
                <li>
                    <a href="{{ route('vendor.rating') }}">
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
