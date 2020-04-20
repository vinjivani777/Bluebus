    <div class="container-fluid top-bar pt-4 mx-auto">
        <div class="row mx-auto">
            <div class="col-12 text-center">
                <h2 class="text-white" style="font-weight:300">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="bus_svg" version="1.1" id="Capa_1" width="35" height="35" viewBox="0 0 76.334 76.334" style="enable-background:new 0 0 76.334 76.334;" xml:space="preserve">
                        <g>
                            <path d="M2.386,21.467h2.386v14.312H2.386C1.067,35.779,0,34.717,0,33.394v-9.542C0,22.54,1.067,21.467,2.386,21.467z    M73.948,21.467h-2.388v14.312h2.388c1.317,0,2.386-1.062,2.386-2.385v-9.542C76.334,22.54,75.268,21.467,73.948,21.467z    M66.792,16.698v42.937c0,2.638-2.133,4.771-4.771,4.771v4.771c0,2.639-2.133,4.771-4.771,4.771h-4.772   c-2.637,0-4.771-2.137-4.771-4.771v-4.771H28.626v4.771c0,2.639-2.134,4.771-4.771,4.771h-4.769c-2.638,0-4.771-2.137-4.771-4.771   v-4.771c-2.637,0-4.771-2.137-4.771-4.771V16.698C9.542,8.796,15.954,2.386,23.855,2.386H52.48   C60.382,2.386,66.792,8.794,66.792,16.698z M28.626,11.928h19.083V7.157H28.626V11.928z M23.855,54.866   c0-2.641-2.134-4.771-4.769-4.771c-2.637,0-4.771,2.133-4.771,4.771c0,2.635,2.134,4.771,4.771,4.771   C21.72,59.636,23.855,57.499,23.855,54.866z M62.021,54.866c0-2.641-2.133-4.771-4.771-4.771s-4.771,2.133-4.771,4.771   c0,2.635,2.136,4.771,4.771,4.771C59.889,59.636,62.021,57.499,62.021,54.866z M62.021,16.698H14.313v28.625h47.708V16.698   L62.021,16.698z" fill="#ffffff"></path>
                        </g>
                    </svg>
                    Online Bus Tickets 
                </h2>
            </div>
        </div>
        <form action="{{ route('search') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mt-2">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mx-auto">
                    <div class="container mx-auto">
                        <div class="form-row align-items-center ">
                            <div class="col-3 mr-0 pr-0 input-icons">
                                <i class="far fa-building icon"></i>
                                <input type="text"  class="form-control mb-2 pl-4 search_input source_place place" style="padding-left:40px;padding:25px;" name="source_place"  autocomplete="off" id="source_place" value="" >
                                <label for="src" class="db " style="left:18%">FROM</label>
                            </div>
                            <div class="col-3 ml-0 pl-0 mr-0 pr-0 input-icons">
                                <i class="far fa-building icon"></i>
                                <input type="text" class="form-control mb-2 pl-4 search_input destination_place place" style="padding-left:40px;padding:25px" name="destination_place"  autocomplete="off" id="destination_place" value="" >
                                <label for="desc" class="db " style="left:18%">To</label>
                            </div>
                            <div class="col-2 ml-0 pl-0 mr-0 pr-0 input-icons">
                                <i class="fe-calendar icon"></i>
                                <input type="text" class="form-control mb-2 pl-4 search_input basic-datepicker" style="padding-left:50px;padding:25px" name="journey_date"  id="journey_date" placeholder="Onward Date">
                            </div>
                            <div class="col-2 ml-0 pl-0 mr-0 pr-0 input-icons">
                                <i class="fe-calendar icon"></i>
                                <input type="text" class="form-control mb-2 pl-4 search_input return-datepicker" style="padding-left:50px;padding:25px" name="return_date"  id="return_date" placeholder="Return Date">
                                {{-- <label id="lblOptional" style="color: #F4F9ED; font-size: 12px; font-style:italic; margin-right: 38px;">(Optional)</label> --}}
                            </div>
                            <div class="col-2 ml-0 pl-0">
                                <button type="submit" class="btn  mb-2 search_input search_bus_btn" style="padding:15px;width:100%;background:#ef6614" id="search_bus">Search Bus</button>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </form>
    </div>
    {{-- <div class="head-banner">
        <div class="banner-wrapper">
                <div id="image_div" style="background: url({{ asset('web/images/redbus/home-banner/diwali-2019-22.png') }}); background-size: cover; ">
                    <div id="welcome_image_div" style="background: url({{ asset('web/images/redbus/home-banner/diwali-2019-111.png') }}) top center no-repeat;position: relative;z-index:0;pointer-events: none;height:450px;"></div>
                </div>
            <h1 class="image-text main-header-family"></h1>
            <div id="search_div" class="clearfix">
            </div>
        </div>
    </div> --}}

    {{-- <div class="search-bar" >
        <div class="row" >
            <div class="col-9 col-md-9 mx-auto">
                <div class="container ml-3" style="position:absolute;bottom: 186px;z-index:2;">
                    <form action="{{ route('search') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row align-items-center ">
                            <div class="col-3 mr-0 pr-0 input-icons">
                                <i class="far fa-building icon"></i>
                                <input type="text"  class="form-control mb-2 search_input source_place place" style="padding-left:16%;" name="source_place"  autocomplete="off" id="source_place" value="" >
                                <label for="src" class="db " style="left:18%">FROM</label>
                            </div>

                            <div class="col-3 ml-0 pl-0 mr-0 pr-0 input-icons">
                                <i class="far fa-building icon"></i>
                                <input type="text" class="form-control mb-2 search_input destination_place place" style="padding-left:16%;" name="destination_place"  autocomplete="off" id="destination_place" value="" >
                                <label for="desc" class="db " style="left:18%">To</label>
                            </div>
                            <div class="col-2 ml-0 pl-0 mr-0 pr-0 input-icons">
                                <i class="fe-calendar icon"></i>
                                <input type="text" class="form-control mb-2 search_input basic-datepicker" style="padding-left:25%;" name="journey_date"  id="journey_date" placeholder="Onward Date">
                            </div>
                            <div class="col-2 ml-0 pl-0 mr-0 pr-0 input-icons">
                                <i class="fe-calendar icon"></i>
                                <input type="text" class="form-control mb-2 search_input return-datepicker" style="padding-left:25%;" name="return_date"  id="return_date" placeholder="Return Date">
                                {{-- <label id="lblOptional" style="color: #F4F9ED; font-size: 12px; font-style:italic; margin-right: 38px;">(Optional)</label> --}}
                            {{-- </div>
                            <div class="col-2 ml-0 pl-0">
                                <button type="submit" class="btn btn-danger mb-2 search_input search_bus_btn" id="search_bus">Search Bus</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div> --}}

    <div class="container-fluid mt-3">
        <div class="row mt-2">
            <div class="col-12 mx-auto text-center">
                <h3 style="font-weight:400">OFFER & DEALS FOR YOU</h3>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="container mx-auto">
                    <div class="row  mx-auto">
                        <div class="col-lg-3 col-sm-12 col-md-3 ">
                            <div class="card offer-list" style="border:1px solid #bdbaba;border-radius:0px ">
                                <img class="card-img-top img-fluid" src="{{ asset('web\images\offers\10-busnew31dec.png') }}" style="border-radius:0px " alt="Card image cap">
                                <div class="card-body ml-1 pl-0 pr-0 mr-1 pb-0 mb-1">
                                    <h5 class="card-title ml-0 pl-0 pr-0 mr-0 mt-0 pt-0">10% Discount On Bus Booking</h5>
                                    <p style="    font-size: 12px;color: #000;font-weight: 400;margin: 0 0 7px;text-align: justify;">Get up to Rs.100 Off on VRL Travel Bus Tickets</p>
                                <div class="float-left pl-1 pr-1 text-center" style="border:1px dashed #ef6614">
                                    <p style="color:#ef6614;font-weight: 600;font-size:12px;margin:0;padding:0">Promocode</p>
                                    <p style="color:#000;font-weight: 600;font-size:12px;margin:0;padding:0">SUP100</p>
                                </div>
                                <div class="float-right mt-3" style="box-sizing:border-box;font-size:10px;margin:0;padding:0" >
                                        <svg class="vldt-icn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1" width="11px" height="11px">
                                            <g id="surface1">
                                                <path style=" " d="M 12 0 C 5.371094 0 0 5.371094 0 12 C 0 18.628906 5.371094 24 12 24 C 18.628906 24 24 18.628906 24 12 C 24 5.371094 18.628906 0 12 0 Z M 12 2 C 17.523438 2 22 6.476563 22 12 C 22 17.523438 17.523438 22 12 22 C 6.476563 22 2 17.523438 2 12 C 2 6.476563 6.476563 2 12 2 Z M 10.9375 3.875 L 10.5 12.0625 L 10.59375 12.9375 L 16.75 18.375 L 17.71875 17.375 L 12.625 11.96875 L 12.1875 3.875 Z " fill="#8d8a8a"></path>
                                            </g>
                                        </svg>
                                        Validity: 30th Apr,2020
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-md-3 ">
                            <div class="card offer-list" style="border:1px solid #bdbaba;border-radius:0px ">
                                <img class="card-img-top img-fluid" src="{{ asset('web\images\offers\100-off-bus-hp.png') }}" style="border-radius:0px " alt="Card image cap">
                                <div class="card-body ml-1 pl-0 pr-0 mr-1 pb-0 mb-1">
                                    <h5 class="card-title ml-0 pl-0 pr-0 mr-0 mt-0 pt-0">10% Discount On Bus Booking</h5>
                                    <p style="    font-size: 12px;color: #000;font-weight: 400;margin: 0 0 7px;text-align: justify;">Get up to Rs.100 Off on VRL Travel Bus Tickets</p>
                                <div class="float-left pl-1 pr-1 text-center" style="border:1px dashed #ef6614">
                                    <p style="color:#ef6614;font-weight: 600;font-size:12px;margin:0;padding:0">Promocode</p>
                                    <p style="color:#000;font-weight: 600;font-size:12px;margin:0;padding:0">SUP100</p>
                                </div>
                                <div class="float-right mt-3" style="box-sizing:border-box;font-size:10px;margin:0;padding:0" >
                                        <svg class="vldt-icn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1" width="11px" height="11px">
                                            <g id="surface1">
                                                <path style=" " d="M 12 0 C 5.371094 0 0 5.371094 0 12 C 0 18.628906 5.371094 24 12 24 C 18.628906 24 24 18.628906 24 12 C 24 5.371094 18.628906 0 12 0 Z M 12 2 C 17.523438 2 22 6.476563 22 12 C 22 17.523438 17.523438 22 12 22 C 6.476563 22 2 17.523438 2 12 C 2 6.476563 6.476563 2 12 2 Z M 10.9375 3.875 L 10.5 12.0625 L 10.59375 12.9375 L 16.75 18.375 L 17.71875 17.375 L 12.625 11.96875 L 12.1875 3.875 Z " fill="#8d8a8a"></path>
                                            </g>
                                        </svg>
                                        Validity: 30th Apr,2020
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-md-3 ">
                            <div class="card offer-list" style="border:1px solid #bdbaba;border-radius:0px ">
                                <img class="card-img-top img-fluid" src="{{ asset('web\images\offers\bus-22apr-2019-hp.png') }}" style="border-radius:0px " alt="Card image cap">
                                <div class="card-body ml-1 pl-0 pr-0 mr-1 pb-0 mb-1">
                                    <h5 class="card-title ml-0 pl-0 pr-0 mr-0 mt-0 pt-0">10% Discount On Bus Booking</h5>
                                    <p style="    font-size: 12px;color: #000;font-weight: 400;margin: 0 0 7px;text-align: justify;">Get up to Rs.100 Off on VRL Travel Bus Tickets</p>
                                <div class="float-left pl-1 pr-1 text-center" style="border:1px dashed #ef6614">
                                    <p style="color:#ef6614;font-weight: 600;font-size:12px;margin:0;padding:0">Promocode</p>
                                    <p style="color:#000;font-weight: 600;font-size:12px;margin:0;padding:0">SUP100</p>
                                </div>
                                <div class="float-right mt-3" style="box-sizing:border-box;font-size:10px;margin:0;padding:0" >
                                        <svg class="vldt-icn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1" width="11px" height="11px">
                                            <g id="surface1">
                                                <path style=" " d="M 12 0 C 5.371094 0 0 5.371094 0 12 C 0 18.628906 5.371094 24 12 24 C 18.628906 24 24 18.628906 24 12 C 24 5.371094 18.628906 0 12 0 Z M 12 2 C 17.523438 2 22 6.476563 22 12 C 22 17.523438 17.523438 22 12 22 C 6.476563 22 2 17.523438 2 12 C 2 6.476563 6.476563 2 12 2 Z M 10.9375 3.875 L 10.5 12.0625 L 10.59375 12.9375 L 16.75 18.375 L 17.71875 17.375 L 12.625 11.96875 L 12.1875 3.875 Z " fill="#8d8a8a"></path>
                                            </g>
                                        </svg>
                                        Validity: 30th Apr,2020
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-md-3 ">
                            <div class="card offer-list" style="border:1px solid #bdbaba;border-radius:0px ">
                                <img class="card-img-top img-fluid" src="{{ asset('web\images\offers\emt-bus-28feb-hp.png') }}" style="border-radius:0px " alt="Card image cap">
                                <div class="card-body ml-1 pl-0 pr-0 mr-1 pb-0 mb-1">
                                    <h5 class="card-title ml-0 pl-0 pr-0 mr-0 mt-0 pt-0">10% Discount On Bus Booking</h5>
                                    <p style="    font-size: 12px;color: #000;font-weight: 400;margin: 0 0 7px;text-align: justify;">Get up to Rs.100 Off on VRL Travel Bus Tickets</p>
                                <div class="float-left pl-1 pr-1 text-center" style="border:1px dashed #ef6614">
                                    <p style="color:#ef6614;font-weight: 600;font-size:12px;margin:0;padding:0">Promocode</p>
                                    <p style="color:#000;font-weight: 600;font-size:12px;margin:0;padding:0">SUP100</p>
                                </div>
                                <div class="float-right mt-3" style="box-sizing:border-box;font-size:10px;margin:0;padding:0" >
                                        <svg class="vldt-icn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" version="1.1" width="11px" height="11px">
                                            <g id="surface1">
                                                <path style=" " d="M 12 0 C 5.371094 0 0 5.371094 0 12 C 0 18.628906 5.371094 24 12 24 C 18.628906 24 24 18.628906 24 12 C 24 5.371094 18.628906 0 12 0 Z M 12 2 C 17.523438 2 22 6.476563 22 12 C 22 17.523438 17.523438 22 12 22 C 6.476563 22 2 17.523438 2 12 C 2 6.476563 6.476563 2 12 2 Z M 10.9375 3.875 L 10.5 12.0625 L 10.59375 12.9375 L 16.75 18.375 L 17.71875 17.375 L 12.625 11.96875 L 12.1875 3.875 Z " fill="#8d8a8a"></path>
                                            </g>
                                        </svg>
                                        Validity: 30th Apr,2020
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 



    {{-- <div class="how-to-help">
        <div class="data-body mt-5">
            <div class="row">
                <div class="col-10 mx-auto" style="border:1px solid #ddd">
                    <div class="container-fluid ">
                        <div class="row " style="margin:10px">
                            <div class="col-2">
                                <img src="{{ asset('web/images/redbus/offer/ic-shield-red-big.png') }}" style="width:88px;height:88px;margin-left:5px;margin-top:10px;">
                            </div>
                            <div class="col-9" >
                                <h1 style="font-weight: bolder;text-align: left; color: #3e3e52;font-size: 32px;font-weight: 700;">
                                    Introducing On-Time Guarantee
                                </h1 >
                                <h3 style="font-size: 24px;font-weight: 400;font-style: normal;font-stretch: normal;line-height: 1.25; letter-spacing: .3px;text-align: left;color: #7e7e8c;margin-top: 10px;">Leave on time, everytime</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-10">
                                <span>
                                    <img src="{{ asset('web/images/redbus/icon/tip-icon.png') }}" style="width:24px;height:24px;" alt="">
                                </span>
                                <span style="line-height: 1.71;letter-spacing: .3px;font-size:16px;">Look for buses with </span>
                                <span>
                                    <img src="{{ asset('web/images/redbus/icon/otgText.png') }}" style="width:156px;height:26px;" alt="">
                                </span>
                                <span style="font-size:16px;">tag while booking your journey, </span>
                            </div>
                        </div>
                        <div class="row mt-4 mb-2">
                            <div class="col-2"></div>
                            <div class="col-10">
                                <div class="container-fluid">
                                    <div class="row ">
                                        <div class="col-4">
                                            <h3 style="height: 24px;font-size: 19px;font-weight: bolder;color: #1446a0;"> Bus on time </h3>
                                            <div style="width: 278px;font-style: normal;font-weight: 700;font-stretch: normal; letter-spacing: .3px;=text-align: left;">Get 25% refund  </div>
                                            <div style="width: 278px;height: 60px;font-size: 16px;font-weight: 400;font-style: normal;font-stretch: normal;line-height: 1.43;letter-spacing: .3px;color: #34495e;text-align: left;">If bus departure is delayed by 30 mins from boarding point.</div>
                                        </div>
                                        <div class="col-4">
                                            <h3 style="height: 24px;font-size: 19px;font-weight: bolder;color: #1446a0;"> No bus cancellation</h3>
                                            <div style="width: 278px;font-style: normal;font-weight: 700;font-stretch: normal; letter-spacing: .3px;=text-align: left;">Get 150% refund  </div>
                                            <div style="width: 278px;height: 60px;font-size: 16px;font-weight: 400;font-style: normal;font-stretch: normal;line-height: 1.43;letter-spacing: .3px;color: #34495e;text-align: left;">Bus is cancelled without an alternate arrangement.</div>
                                        </div>
                                        <div class="col-4">
                                            <h3 style="height: 24px;font-size: 19px;font-weight: bolder;color: #1446a0;"> Alternate assurance </h3>
                                            <div style="width: 278px;font-style: normal;font-weight: 700;font-stretch: normal; letter-spacing: .3px;=text-align: left;">Get 300% refund  </div>
                                            <div style="width: 278px;height: 60px;font-size: 16px;font-weight: 400;font-style: normal;font-stretch: normal;line-height: 1.43;letter-spacing: .3px;color: #34495e;text-align: left;">Bus breaks down with no alternate arrangement within 6 hours.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="watch-ad">
        <div class="main-body" style="background-image: url(https://s3.rdbuz.com/Images/TVC-Banner.jpg);background-repeat: no-repeat;position: relative;width: 1122px;height: 236px;margin: 0 auto; top: 25px;"><div class="video_section" style="position: relative;width: 375px;margin: 0 auto;float: left;top: 21px;x;left: 5px;"><iframe width="375" height="198" src="https://www.youtube.com/embed/NMsv_NPLTY4?rel=0"></iframe></div></div>
    </div> --}}

    {{-- <div class="bus-track">
        <div class="row" >
            <div class="col-10 mx-auto" style="width: 1122px; height: 524px;background-color: #e8ecef;margin: 0 auto;margin-top: 50px;">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('web/images/redbus/icon/tmb_img.png') }}" alt="" style="width: 440px;height: 282px;display: inline-block;float: left;margin-left: 71px;margin-top: 26px;object-fit: contain;">
                        </div>
                        <div class="col-6">
                            <h2 style="height: 29px;font-size: 24px;font-weight: 700;text-align: left; padding-top: 60px;color: #4a4a4a;">TRACK MY BUS - Smarter  Way To Travel</h2>
                            <p style="padding-top: 50px;font-size: 16px;line-height: 1.36;text-align: left;padding-right: 76px;height: 38px;color: #4a4a4a;">Track your bus with our ‘Track My Bus’ feature and know the exact location in real-time.Stay informed and keep your family informed!</p>
                            <div class="links_Tmb" style="display: inline-block;float: left;text-decoration: none;padding-top: 90px;width: 130pxheight: 32px;box-sizing: border-box;"> <a href="https://www.redbus.in/info/track-my-bus" class="know_more" style="color: #4c8fdb;padding: 8px 17px;text-decoration: none;border-radius: 2px;border: 1px solid #4c8fdb;">Know more</a></div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-11 mx-auto">
                            <hr class="" style="border:1px solid #ddd;"   >
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-10 mx-auto">
                            <div class="container">
                                <div class="row">
                                    <div class="col-3 mr-5">
                                        <h4 class="text-center" style="font-size:16px;letter-spacing: 1px;color: #4a4a4a;"> BUSES</h4>
                                        <h2 style="font-size: 36px;text-align: center;color: #da4d52">10,000</h2>
                                        <div style="font-size: 15px;text-align: center;color: #4a4a4a;">Total buses currently being tracked</div>
                                    </div>
                                    <div class="col-3 mr-5 ml-4">
                                        <h4 class="text-center" style="font-size:16px;letter-spacing: 1px;color: #4a4a4a;"> ROUTES</h4>
                                        <h2 style="font-size: 36px;text-align: center;color: #da4d52">60,000</h2>
                                        <div style="font-size: 15px;text-align: center;color: #4a4a4a;">Total routes covered by live tracking</div>
                                    </div>
                                    <div class="col-3 ml-3">
                                        <h4 class="text-center" style="font-size:16px;letter-spacing: 1px;color: #4a4a4a;"> USERS</h4>
                                        <h2 style="font-size: 36px;text-align: center;color: #da4d52">40,000</h2>
                                        <div style="font-size: 15px;text-align: center;color: #4a4a4a;">Total users using Track My Bus feature</div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="contect-us">
        <div class="row mt-5">
            <div class="col-12">
                <div class="container" style="position:absolute;margin-left:14%">
                    <div class="row">
                        <div class="col-5" style="z-index:5">
                            <div class="row">
                                <div class="col-12">
                                    <h3>CONVENIENCE ON-THE-GO.</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="desc-op-new">Exclusive features on mobile include</div>
                                    <div class="desc-op-new">redBus NOW - when you need a bus in the next couple of hours. Board a bus on its way.</div>
                                    <div class="desc-op-new">Boarding Point Navigation - Never lose your way while travelling to your boarding point!</div>
                                    <div class="desc-op-new">1-click Booking- Save your favourite payment options securely on redBus, and more.</div>
                                    <div class="desc-op-new">Download the app.</div>
                                    <div class="desc-op-new">Enter your mobile number below to download the redBus mobile app.
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                <form action="">
                                        <div class="form-group mt-2">
                                            <select  id="upphoneCode" name="upphoneCode">
                                                <option value="93">93</option>
                                                <option value="355">355</option>
                                                <option value="213">213</option>
                                                <option value="1684">1684</option>
                                                <option value="376">376</option>
                                                <option value="244">244</option>
                                                <option value="1264">1264</option>
                                                <option value="672">672</option>
                                                <option value="1268">1268</option>
                                                <option value="54">54</option>
                                                <option value="374">374</option>
                                                <option value="297">297</option>
                                                <option value="61">61</option>
                                                <option value="43">43</option>
                                                <option value="994">994</option>
                                                <option value="1242">1242</option>
                                                <option value="973">973</option>
                                                <option value="880">880</option>
                                                <option value="1246">1246</option>
                                                <option value="375">375</option>
                                                <option value="32">32</option>
                                                <option value="501">501</option>
                                                <option value="229">229</option>
                                                <option value="1441">1441</option>
                                                <option value="975">975</option>
                                                <option value="591">591</option>
                                                <option value="599">599</option>
                                                <option value="387">387</option>
                                                <option value="267">267</option>
                                                <option value="47">47</option>
                                                <option value="55">55</option>
                                                <option value="246">246</option>
                                                <option value="673">673</option>
                                                <option value="359">359</option>
                                                <option value="226">226</option>
                                                <option value="257">257</option>
                                                <option value="855">855</option>
                                                <option value="237">237</option>
                                                <option value="1">1</option>
                                                <option value="238">238</option>
                                                <option value="1345">1345</option>
                                                <option value="236">236</option>
                                                <option value="235">235</option>
                                                <option value="56">56</option>
                                                <option value="86">86</option>
                                                <option value="61">61</option>
                                                <option value="61">61</option>
                                                <option value="57">57</option>
                                                <option value="269">269</option>
                                                <option value="242">242</option>
                                                <option value="243">243</option>
                                                <option value="682">682</option>
                                                <option value="506">506</option>
                                                <option value="385">385</option>
                                                <option value="53">53</option>
                                                <option value="599">599</option>
                                                <option value="357">357</option>
                                                <option value="420">420</option>
                                                <option value="225">225</option>
                                                <option value="45">45</option>
                                                <option value="253">253</option>
                                                <option value="1767">1767</option>
                                                <option value="1809">1809</option>
                                                <option value="1829">1829</option>
                                                <option value="1849">1849</option>
                                                <option value="593">593</option>
                                                <option value="20">20</option>
                                                <option value="503">503</option>
                                                <option value="240">240</option>
                                                <option value="291">291</option>
                                                <option value="372">372</option>
                                                <option value="251">251</option>
                                                <option value="500">500</option>
                                                <option value="298">298</option>
                                                <option value="679">679</option>
                                                <option value="358">358</option>
                                                <option value="33">33</option>
                                                <option value="594">594</option>
                                                <option value="689">689</option>
                                                <option value="262">262</option>
                                                <option value="241">241</option>
                                                <option value="220">220</option>
                                                <option value="995">995</option>
                                                <option value="49">49</option>
                                                <option value="233">233</option>
                                                <option value="350">350</option>
                                                <option value="30">30</option>
                                                <option value="299">299</option>
                                                <option value="1473">1473</option>
                                                <option value="590">590</option>
                                                <option value="1671">1671</option>
                                                <option value="502">502</option>
                                                <option value="44">44</option>
                                                <option value="224">224</option>
                                                <option value="245">245</option>
                                                <option value="592">592</option>
                                                <option value="509">509</option>
                                                <option value="672">672</option>
                                                <option value="379">379</option>
                                                <option value="504">504</option>
                                                <option value="852">852</option>
                                                <option value="36">36</option>
                                                <option value="354">354</option>
                                                <option value="91">91</option>
                                                <option value="62">62</option>
                                                <option value="98">98</option>
                                                <option value="964">964</option>
                                                <option value="353">353</option>
                                                <option value="44">44</option>
                                                <option value="972">972</option>
                                                <option value="39">39</option>
                                                <option value="1876">1876</option>
                                                <option value="81">81</option>
                                                <option value="44">44</option>
                                                <option value="962">962</option>
                                                <option value="7">7</option>
                                                <option value="254">254</option>
                                                <option value="686">686</option>
                                                <option value="850">850</option>
                                                <option value="82">82</option>
                                                <option value="965">965</option>
                                                <option value="996">996</option>
                                                <option value="856">856</option>
                                                <option value="371">371</option>
                                                <option value="961">961</option>
                                                <option value="266">266</option>
                                                <option value="231">231</option>
                                                <option value="218">218</option>
                                                <option value="423">423</option>
                                                <option value="370">370</option>
                                                <option value="352">352</option>
                                                <option value="853">853</option>
                                                <option value="389">389</option>
                                                <option value="261">261</option>
                                                <option value="265">265</option>
                                                <option value="60">60</option>
                                                <option value="960">960</option>
                                                <option value="223">223</option>
                                                <option value="356">356</option>
                                                <option value="692">692</option>
                                                <option value="596">596</option>
                                                <option value="222">222</option>
                                                <option value="230">230</option>
                                                <option value="262">262</option>
                                                <option value="52">52</option>
                                                <option value="691">691</option>
                                                <option value="373">373</option>
                                                <option value="377">377</option>
                                                <option value="976">976</option>
                                                <option value="382">382</option>
                                                <option value="1664">1664</option>
                                                <option value="212">212</option>
                                                <option value="258">258</option>
                                                <option value="95">95</option>
                                                <option value="264">264</option>
                                                <option value="674">674</option>
                                                <option value="977">977</option>
                                                <option value="31">31</option>
                                                <option value="687">687</option>
                                                <option value="64">64</option>
                                                <option value="505">505</option>
                                                <option value="227">227</option>
                                                <option value="234">234</option>
                                                <option value="683">683</option>
                                                <option value="672">672</option>
                                                <option value="1670">1670</option>
                                                <option value="47">47</option>
                                                <option value="968">968</option>
                                                <option value="92">92</option>
                                                <option value="680">680</option>
                                                <option value="970">970</option>
                                                <option value="507">507</option>
                                                <option value="675">675</option>
                                                <option value="595">595</option>
                                                <option value="51">51</option>
                                                <option value="63">63</option>
                                                <option value="870">870</option>
                                                <option value="48">48</option>
                                                <option value="351">351</option>
                                                <option value="1">1</option>
                                                <option value="974">974</option>
                                                <option value="40">40</option>
                                                <option value="7">7</option>
                                                <option value="250">250</option>
                                                <option value="262">262</option>
                                                <option value="590">590</option>
                                                <option value="290">290</option>
                                                <option value="1869">1869</option>
                                                <option value="1758">1758</option>
                                                <option value="590">590</option>
                                                <option value="508">508</option>
                                                <option value="1784">1784</option>
                                                <option value="685">685</option>
                                                <option value="378">378</option>
                                                <option value="239">239</option>
                                                <option value="966">966</option>
                                                <option value="221">221</option>
                                                <option value="381">381</option>
                                                <option value="248">248</option>
                                                <option value="232">232</option>
                                                <option value="65">65</option>
                                                <option value="1721">1721</option>
                                                <option value="421">421</option>
                                                <option value="386">386</option>
                                                <option value="677">677</option>
                                                <option value="252">252</option>
                                                <option value="27">27</option>
                                                <option value="500">500</option>
                                                <option value="211">211</option>
                                                <option value="34">34</option>
                                                <option value="94">94</option>
                                                <option value="249">249</option>
                                                <option value="597">597</option>
                                                <option value="47">47</option>
                                                <option value="268">268</option>
                                                <option value="46">46</option>
                                                <option value="41">41</option>
                                                <option value="963">963</option>
                                                <option value="886">886</option>
                                                <option value="992">992</option>
                                                <option value="255">255</option>
                                                <option value="66">66</option>
                                                <option value="670">670</option>
                                                <option value="228">228</option>
                                                <option value="690">690</option>
                                                <option value="676">676</option>
                                                <option value="1868">1868</option>
                                                <option value="216">216</option>
                                                <option value="90">90</option>
                                                <option value="993">993</option>
                                                <option value="1649">1649</option>
                                                <option value="688">688</option>
                                                <option value="256">256</option>
                                                <option value="380">380</option>
                                                <option value="971">971</option>
                                                <option value="44">44</option>
                                                <option value="1">1</option>
                                                <option value="1">1</option>
                                                <option value="598">598</option>
                                                <option value="998">998</option>
                                                <option value="678">678</option>
                                                <option value="58">58</option>
                                                <option value="84">84</option>
                                                <option value="1284">1284</option>
                                                <option value="1340">1340</option>
                                                <option value="681">681</option>
                                                <option value="212">212</option>
                                                <option value="967">967</option>
                                                <option value="260">260</option>
                                                <option value="263">263</option>
                                            </select>
                                            <input type="text" name="" id="" placeholder="Enter Your Mobile no">
                                        </div>
                                        <div>
                                            <button class="btn btn-sm" style="background-color:#d84e55;position:relative">SMS ME THE LINK</button>
                                        </div>
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-2" ></div>
                        <div class="col-5" style="z-index:5">
                            <img src="{{ asset('web/images/redbus/banner/IOS_Android_device.png') }}" alt="" height="552" srcset="">
                        </div>
                    </div>
                </div>
                <div class="container-fluid" style="position:relative;margin-top:130px;">
                    <img src="{{ asset('web/images/redbus/banner/city_scape_app_download.png') }}" style="opacity:.2;width:100%" height"430" alt="" srcset="">
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container-fluid mt-3">
        <div class="col-12 text-center">
            <img src="{{ asset('web/images/redbus/custsupport/promise.png') }}"     height="100"  alt="">
        </div>
        <div class="col-12 text-center">
            <h2>WE PROMISE TO DELIVER</h2>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="container">
                    <div class="row  mx-auto">
                        <div class="col-lg-3 col-sm-12 col-md-3 ">
                            <div class="card cust-banifit" >
                                <div class="card-body ml-1 pl-0 pr-0 mr-1 pb-0 mb-1">
                                    <div class="image text-center" style="min-height:125px">
                                        <img src="{{ asset('web/images/redbus/custsupport/maximum_choices.png') }}" alt="" height="100">
                                    </div>
                                    <div class="text-center">
                                        <h5 style="font-weight: 400;">MAXIMUM CHOICE</h5>
                                    </div>
                                    <p style="font-size:12px;" class="text-center">Book from the selection of buses, including AC, Non-AC, Deluxe and more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-md-3 ">
                            <div class="card cust-banifit" >
                                <div class="card-body ml-1 pl-0 pr-0 mr-1 pb-0 mb-1">
                                    <div class="image text-center" style="min-height:125px">
                                        <img src="{{ asset('web/images/redbus/custsupport/customer_care.png') }}" alt="" height="100">
                                    </div>
                                    <div class="text-center">
                                        <h5 style="font-weight: 400;">SUPERIOR CUSTOMER SERVICE</h5>
                                    </div>
                                    <p style="font-size:12px;" class="text-center">We put our experience and relationships to good use and are available to solve your travel issues.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-md-3 ">
                            <div class="card cust-banifit" >
                                <div class="card-body ml-1 pl-0 pr-0 mr-1 pb-0 mb-1">
                                    <div class="image text-center" style="min-height:125px">
                                        <img src="{{ asset('web/images/redbus/custsupport/lowest_Fare.png') }}" alt="" height="100">
                                    </div>
                                    <div class="text-center">
                                        <h5 style="font-weight: 400;">LOWEST PRICES</h5>
                                    </div>
                                    <p style="font-size:12px;" class="text-center">We always give you the lowest price with the best partner offers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-md-3 ">
                            <div class="card cust-banifit" >
                                <div class="card-body ml-1 pl-0 pr-0 mr-1 pb-0 mb-1">
                                    <div class="image text-center" style="min-height:125px">
                                        <img src="{{ asset('web/images/redbus/custsupport/benefits.png') }}" alt="" height="100">
                                    </div>
                                    <div class="text-center">
                                        <h5 style="font-weight: 400;">UNMATCHED BENEFITS</h5>
                                    </div>
                                    <p style="font-size:12px;" class="text-center">We take care of your travel beyond ticketing by providing you with innovative and unique benefits.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="mt-5" style="padding-bottom: 0;padding-top: 15px;background-color: #ededed;border-top:1px solid #c0c0c0;border-bottom:1px solid #c0c0c0;">
        <div>
            <div style="min-width: 1000px;
            max-width: 1300px;
            margin: 0 auto;
            overflow: hidden;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="{{ asset('web/images/redbus/custsupport/promise.png') }}"     height="100"  alt="">
                    </div>
                    <div class="col-12 text-center">
                        <h2>WE PROMISE TO DELIVER</h2>
                    </div>
                </div>
                <div class="row" style="margin: 30px auto;color: #8d8d8d;margin-top: 13px;">
                    <div class="col-11 mx-auto">
                        <div class="row" >
                            <div class="col-3" style="box-shadow: 0 0 1.2px #686868;height: 390px;color: #3c3d41;background-color: #fff">
                                <div class="image text-center" style=" margin-bottom: 15px;min-height: 125px">
                                    <img src="{{ asset('web/images/redbus/custsupport/maximum_choices.png') }}" alt="" height="100">
                                </div>
                                <div class="adv_title text-center" style="color: #4a4a4a;font-weight: 400;font-size: 17px;letter-spacing: 1px;word-spacing: 8px;margin-bottom: 27px;margin: 0 auto;width: 215px;text-align: center;text-transform: uppercase;">
                                    MAXIMUM CHOICE
                                </div>
                                <div class="adv_content text-center" style="margin-left: 15px;margin-right: 15px;color: #737373;font-size: 16px;padding-left: 20px;padding-right: 20px;position: absolute;top: 60%;">
                                    We take care of your travel beyond ticketing by providing you with innovative and unique benefits.
                                </div>
                            </div>
                            <div class="col-3" style="box-shadow: 0 0 1.2px #686868;height: 390px;color: #3c3d41;background-color: #fff">
                                <div class="image text-center" style="    margin-top: 35px; margin-bottom: 15px;min-height: 125px">
                                    <img src="{{ asset('web/images/redbus/custsupport/customer_care.png') }}" alt="" height="100">
                                </div>
                                <div class="adv_title text-center" style="color: #4a4a4a;font-weight: 400;font-size: 17px;letter-spacing: 1px;word-spacing: 8px;margin-bottom: 27px;margin: 0 auto;width: 215px;text-align: center;text-transform: uppercase;">
                                    SUPERIOR CUSTOMER SERVICE
                                </div>
                                <div class="adv_content text-center" style="margin-left: 15px;margin-right: 15px;color: #737373;font-size: 16px;padding-left: 20px;padding-right: 20px;position: absolute;top: 60%;">
                                    We take care of your travel beyond ticketing by providing you with innovative and unique benefits.
                                </div>
                            </div>
                            <div class="col-3" style="box-shadow: 0 0 1.2px #686868;height: 390px;color: #3c3d41;background-color: #fff">
                                <div class="image text-center" style="    margin-top: 35px; margin-bottom: 15px;min-height: 125px">
                                    <img src="{{ asset('web/images/redbus/custsupport/lowest_Fare.png') }}" alt="" height="100">
                                </div>
                                <div class="adv_title text-center" style="color: #4a4a4a;font-weight: 400;font-size: 17px;letter-spacing: 1px;word-spacing: 8px;margin-bottom: 27px;margin: 0 auto;width: 215px;text-align: center;text-transform: uppercase;">
                                    LOWEST PRICES
                                </div>
                                <div class="adv_content text-center" style="margin-left: 15px;margin-right: 15px;color: #737373;font-size: 16px;padding-left: 20px;padding-right: 20px;position: absolute;top: 60%;">
                                    We take care of your travel beyond ticketing by providing you with innovative and unique benefits.
                                </div>
                            </div>
                            <div class="col-3" style="box-shadow: 0 0 1.2px #686868;height: 390px;color: #3c3d41;background-color: #fff">
                                <div class="image text-center" style="    margin-top: 35px; margin-bottom: 15px;min-height: 125px">
                                    <img src="{{ asset('web/images/redbus/custsupport/benefits.png') }}" alt="" height="100">
                                </div>
                                <div class="adv_title text-center" style="color: #4a4a4a;font-weight: 400;font-size: 17px;letter-spacing: 1px;word-spacing: 8px;margin-bottom: 27px;margin: 0 auto;width: 215px;text-align: center;text-transform: uppercase;">
                                    UNMATCHED BENEFITS
                                </div>
                                <div class="adv_content text-center" style="margin-left: 15px;margin-right: 15px;color: #737373;font-size: 16px;padding-left: 20px;padding-right: 20px;position: absolute;top: 60%;">
                                    We take care of your travel beyond ticketing by providing you with innovative and unique benefits.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div>
    </div> --}}

    <div class="growing" style="min-width: 1000px;max-width: 1300px;margin: 0 auto;overflow: hidden;">
        <div class="" style="margin: 50px 0;margin-bottom: 85px">
            <div class="row">
                <div class="col-12 text-center" style="text-transform: uppercase;font-size: 30px;line-height: 1.1em;color: #4a4a4a;font-weight: 600;">
                    <h2>The numbers are growing!</h2>
                </div>
            </div>
            <div class="" style="margin: 50px 0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4 text-center">
                            <div class="title" style="letter-spacing:2px;font-size: 17px;">
                                CUSTOMERS
                            </div>
                            <div class="counter " style="font-size: 46px;font-weight: 400;color:rgb(33, 150, 243)">
                                17 M
                            </div>
                            <div class="counter-content text-center" style="font-size:16px;width:208px;margin:0 auto;margin-top: 10px;">
                                redBus is trusted by over 17 million happy customers globally
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="title" style="letter-spacing:2px;font-size: 17px;">
                                OPERATORS
                            </div>
                            <div class="counter " style="font-size: 46px;font-weight: 400;color:rgb(33, 150, 243)">
                                2300
                            </div>
                            <div class="counter-content text-center" style="font-size:16px;width:208px;margin:0 auto;margin-top: 10px;">
                                network of over 2300 bus operators worldwide
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="title" style="letter-spacing:2px;font-size: 17px;">
                                BUS TICKETS
                            </div>
                            <div class="counter " style="font-size: 46px;font-weight: 400;color:rgb(33, 150, 243)">
                                180+ M
                            </div>
                            <div class="counter-content text-center" style="font-size:16px;width:208px;margin:0 auto;margin-top: 10px;">
                                Over 180 million trips booked using redBus
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="border-top:1px solid #c3cbd1;border-bottom:1px solid #c3cbd1">
        <div class="container" >
             <div class="row mt-4 mb-0">
                 <div class="col-8">
                     <h2>Sign up for Exclusive Email-only Newsletter</h2>
                     <h4>Exclusive access to coupons, special offers and promotions.</h4>
                 </div>
                 <div class="col-4 mb-4">
                     <div class="form-group mb-3">
                         <label>Newsletter</label>
                         <div class="input-group m-b-20">
                             <input class="form-control" id="single-input" type="text" value="" placeholder="Email">
                             <div class="input-group-append">
                                 <button type="button" id="check-minutes" class="btn waves-effect waves-light btn-info" style="background-color:rgb(33, 150, 243)">Newsletter</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
        </div>
    </div>
