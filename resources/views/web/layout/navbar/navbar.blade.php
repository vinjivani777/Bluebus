<nav class="navbar navbar-expand-xl sticky-top  navbar-light  nav-big" style="background-color:#d84f57">
    <a class="navbar-brand text-white" href="{{ route('web.index')}}">BlueBus</a>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link text-white" href="{{route('web.index')}}">Booking Ticket <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('offer') }}">Offers</a>
            </li>

        </ul>
    <div>
        <div>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('bluecare')}}">Help</a>
                </li>
                <li class="dropdown notification-list show">
                    <a class="nav-link dropdown-toggle nav-user mr-0 mt-1" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="text-white">
                            Manage Booking
                        </span>
                        <span class="pro-user-name ml-1">
                        <i class="mdi mdi-chevron-down text-white"></i>
                        </span>
                    </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown " x-placement="bottom-end" style="background-color:#fff;position: absolute;margin-top:12px;width:220px; will-change: transform; top: 20px; left: 0px; transform: translate3d(-52px, 70px, 0px);">
                    <!-- item-->
                    <div class="dropdown-header noti-title pb-0">
                        <h6 class="text-overflow m-0">BUS TICKET</h6>
                    </div>

                    <!-- item-->
                    <a  href="{{route('cancellation')}}"   class="dropdown-item notify-item pb-0">
                        <i class="fe-alert-octagon"></i>
                        <span>Cancel/Refund</span>
                    </a>
                    {{-- <a  data-toggle="modal" data-target=".bs-example-modal-lg" class="dropdown-item notify-item pb-0">
                        <i class="fe-user"></i>
                        <span>Reschedule</span>
                    </a> --}}
                    <a href="{{ route('printticket')}}"  class="dropdown-item notify-item pb-0">
                        <i class="fe-printer"></i>
                        <span>
                            Print/Download
                        </span>
                    </a>
                    <a  href="{{route('smsandemailticket')}}" class="dropdown-item notify-item pb-0">
                        <i class="fe-send"></i>
                        <span>
                            Email/SMS
                        </span>
                    </a>
                    {{-- <div class="dropdown-divider"></div> --}}
                {{--
                    <!-- item-->
                    <a href="http://127.0.0.1:8000/admin/logout" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a> --}}

                </div>
            </li>
            <li class="dropdown notification-list show">
                <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('web\user.png') }}" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                    <i class="mdi mdi-chevron-down text-white"></i>
                    </span>
                </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown " x-placement="bottom-end" style="background-color:#fff;position: absolute;margin-top:12px;width:220px; will-change: transform; top: 20px; left: 0px; transform: translate3d(-52px, 70px, 0px);">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>
                <!-- item-->
                @if (!Auth::guard('user')->check())
                <a  data-toggle="modal" data-target=".bs-example-modal-lg" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>SignUp / SignIN</span>
                </a>
                @endif
                @auth('user')
                <a  href="{{route('user.profile')}}" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>Profile</span>
                </a>
                {{-- <div class="dropdown-divider"></div> --}}

                <!-- item-->
                <a href="{{ route('user.logout') }}" class="dropdown-item notify-item">
                    <i class="fe-log-out"></i>
                    <span>Logout</span>
                </a>
                @endauth

            </div>
        </li>
        </ul>

            {{-- <img src="{{ asset('web\user.png') }} " alt="user" style="width:30px;height:30px" > --}}
            </div>
    </div>
    </div>
</nav>

<nav class="navbar navbar-expand-xl sticky-top  navbar-light  mini-nav" style="background-color:#d84f57">
    <span style="font-size:30px;cursor:pointer" class="openbtn text-white" onclick="openNav()">&#9776;</span>
    <span  style="font-size:30px;cursor:pointer" class="closebtn text-white"  onclick="closeNav()">&times;</span>

    <a class="navbar-brand ml-3 text-white" style="f" href="{{ route('web.index')}}">BlueBus</a>

</nav>

<div id="mySidenav" class="sidenav">
   @foreach ($Menus as $menu)
        <a href="@if($menu->link == "#") {{ "#" }} @else {{ route(''. $menu->link) }} @endif" >{{ $menu->name }}</a>
   @endforeach
</div>
