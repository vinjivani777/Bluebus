<nav class="navbar navbar-expand-xl sticky-top  navbar-light  mini-nav" style="background-color:#d84f57">
    <span style="font-size:30px;cursor:pointer" class="openbtn text-white" onclick="openNav()">&#9776;</span>
    <span  style="font-size:30px;cursor:pointer" class="closebtn text-white"  onclick="closeNav()">&times;</span>

    <a class="navbar-brand ml-3 text-white" style="f" href="{{ route('web.index')}}">BlueBus</a>

</nav>

<div id="mySidenav" class="sidenav" >
   @foreach ($Menus as $menu)
        <a href="@if($menu->link == "#") {{ "#" }} @else {{ route(''. $menu->link) }} @endif" >{{ $menu->name }}</a>
   @endforeach
</div>
