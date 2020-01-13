<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Blue Bus Travels  | Booking Volvo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured web theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('web/images/favicon.ico')}}">


        <!-- extra css  -->
        @yield('other-page-css')

        <!-- Plugins css -->
        <link href="{{ asset('web/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/libs/clockpicker/bootstrap-clockpicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href=" {{ asset('web/libs/animate/animate.min.css') }} " rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('web/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('web/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

        <style>
            .desc-op-new {
                color: #4a4a4a;
                font-size: 16px;
                font-weight: 300;
                margin-top: 10px;
            }
            .seo a {
                display: block;
                color: #444343;
                cursor: pointer;
                margin-bottom: 15px;
            }
            a:hover{
                text-decoration: none;
                color:#d84f57;
                cursor: pointer;
                -webkit-tap-highlight-color: transparent;
            }
            .footer-row{
                background-color:#1b2330;
                overflow: hidden;
            }
            .footer-links a {
                display: block;
                color: #d7d7d7;
                cursor: pointer;
                margin-bottom: 5px;
                font-weight: 600;
            }
            .search_input{
                border-radius:0px;
            }
        </style>
    </head>
<body class="bg-white" style="padding-bottom: 0px;">
    <section>
        <nav class="navbar navbar-expand-xl sticky-top  navbar-light  " style="background-color:#d84f57">
            <a class="navbar-brand text-white" href="#">BlueBus</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Booking Ticket <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="#">Offers</a>
                    </li>
                </ul>
            <div>
            </div>
            </div>
        </nav>

        <div class="main-content">
            <section class="head-banner">
                <div class="banner-wrapper">
                          <div id="image_div" style="background: url({{ asset('web/images/redbus/home-banner/diwali-2019-22.png') }}); background-size: cover; ">
                              <div id="welcome_image_div" style="background: url({{ asset('web/images/redbus/home-banner/diwali-2019-111.png') }}) top center no-repeat;position: relative;z-index:0;pointer-events: none;height:450px;"></div>
                          </div>
                    <h1 class="image-text main-header-family"></h1>
                    <div id="search_div" class="clearfix">
                    </div>
                </div>
            </section>

            <section class="search-bar" >
                <div class="row" >
                    <div class="col-9 col-md-9 mx-auto">
                        <div class="container ml-3" style="position: absolute;bottom: 186px;z-index:2;">
                            <form action="{{ route('search') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row align-items-center">
                                    <div class="col-3 mr-0 pr-0">
                                        <input type="text" class="form-control mb-2 search_input source_palace" name="source_palace" tabindex="1" autocomplete="off" id="inlineFormInput" placeholder="Source Place">
                                        <div id="countryList" class=""></div>
                                    </div>
                                    <div class="col-3 ml-0 pl-0 mr-0 pr-0">
                                        <input type="text" class="form-control mb-2 search_input destination_palace" name="destination_palace" tabindex="2" autocomplete="off" id="inlineFormInput" placeholder="Destination Place">
                                        <div id="destationList" class=""></div>
                                    </div>
                                    <div class="col-2 ml-0 pl-0 mr-0 pr-0">
                                        <input type="text" class="form-control mb-2 search_input basic-datepicker " name="onward" tabindex="3" id="inlineFormInput" placeholder="Onward Date">
                                    </div>
                                    <div class="col-2 ml-0 pl-0 mr-0 pr-0">
                                        <input type="text" class="form-control mb-2 search_input return-datepicker" name="return" tabindex="4" id="inlineFormInput" placeholder="Return Date">
                                    </div>
                                    <div class="col-2 ml-0 pl-0">
                                        <button class="btn  btn-danger mb-2 search_input" id="inlineFormInput"><b>Search Bus</b></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>

            <section class="offerforu bg-light" style="height:430px;background-color: #f7f7f7;margin-top: -9px;">
                <div class="offer-body">
                    <div class="row">
                        <div class="col-10 mx-auto">
                            <div class="container-fluid " style="position: absolute;top:-64px;z-index: 1;">
                                <div class="row">
                                    <div class="col-7 mx-auto">
                                        <div class="card" style="height:120px;">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <img  src="{{ asset('web/images/redbus/offer/100x100.png') }}" alt="" style="width:100px;height:100px;margin-top:-15px;">
                                                    </div>
                                                    <div class="col-9">
                                                        <h4>SAVE UPTO RS 150 ON BUS TICKET</h4>
                                                        <h5>Use code FIRST on App</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-4 mx-auto">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h6 class="text-center text-dark mt-0">
                                                            Get assured cashback between Rs.100 to Rs.500
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 text-center">
                                                        <img src="{{ asset('web/images/redbus/offer/274x147.png') }}" alt="" style="width:274px;height:147px;">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5 class="text-center">Limited Period Offer</h5>
                                                        <h4 class="text-center">  Pay Using OlaMoney Postpaid </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 mx-auto">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h6 class="text-center text-dark mt-0">
                                                            Win Rs 10 to Rs 300 on minimum purchase of Rs 300.
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 text-center">
                                                        <img src="{{ asset('web/images/redbus/offer/274x147px.png') }}" alt="" style="width:274px;height:147px;">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5 class="text-center">Limited Period Offer</h5>
                                                        <h4 class="text-center">Use code:CONTROL</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 mx-auto">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h6 class="text-center text-dark mt-0">
                                                            <b>Get assured cashback between Rs.100 to Rs.500</b>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 text-center">
                                                        <img src="{{ asset('web/images/redbus/offer/offertile..png') }}" alt="" style="width:274px;height:147px;">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5 class="text-center">  Pay Using Amazon Pay  </h5>
                                                        <h4 class="text-center">Limited Period Offer</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
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
            </section>

            <section>
                <div class="main-body" style="background-image: url(https://s3.rdbuz.com/Images/TVC-Banner.jpg);background-repeat: no-repeat;position: relative;width: 1122px;height: 236px;margin: 0 auto; top: 25px;"><div class="video_section" style="position: relative;width: 375px;margin: 0 auto;float: left;top: 21px;x;left: 5px;"><iframe width="375" height="198" src="https://www.youtube.com/embed/NMsv_NPLTY4?rel=0"></iframe></div></div>
            </section>

            <section>
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
            </section>

            <section>
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
            </section>

            <div style="padding-bottom: 0;padding-top: 15px;background-color: #ededed;border-top:1px solid #c0c0c0;border-bottom:1px solid #c0c0c0;">
                <section>
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
                                        <div class="image text-center" style="    margin-top: 35px; margin-bottom: 15px;min-height: 125px">
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

                </section>
            </div>

            <div class="growing" style="min-width: 1000px;max-width: 1300px;margin: 0 auto;overflow: hidden;">
                <section class="" style="margin: 50px 0;margin-bottom: 85px">
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
                                    <div class="counter" style="color: #da4e52;font-size: 46px;font-weight: 400;">
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
                                    <div class="counter" style="color: #da4e52;font-size: 46px;font-weight: 400;">
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
                                    <div class="counter" style="color: #da4e52;font-size: 46px;font-weight: 400;">
                                        180+ M
                                    </div>
                                    <div class="counter-content text-center" style="font-size:16px;width:208px;margin:0 auto;margin-top: 10px;">
                                        Over 180 million trips booked using redBus
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <footer>
                <div style="padding-bottom: 0;padding-top: 15px;color:#444343;background-color: #e5e5e5;border-top:1px solid #c0c0c0;border-bottom:1px solid #c0c0c0;">
                        <div style="min-width: 1000px;max-width: 1300px;margin: 0 auto;overflow: hidden;">
                            <div class="container-fluid">
                                <div class="row mt-3 mb-3">
                                    <div class="col-1">
                                    </div>
                                    <div class="col-2 seo">
                                        <h3 class="mb-2" style="font-weight: 800;font-size: 1.1em;">Top Bus Routes</h3>
                                        <a href="#" target="_blank" title="Hyderabad to Bangalore Bus" >Hyderabad to Bangalore Bus</a>
                                        <a href="#" target="_blank" title="Bangalore to Chennai Bus" >Bangalore to Chennai Bus</a>
                                        <a href="#" target="_blank" title="Pune to Bangalore Bus" >Pune to Bangalore Bus</a>
                                        <a href="#" target="_blank" title="Mumbai to Bangalore Bus" >Mumbai to Bangalore Bus</a>
                                        <a href="#" target="_blank" title="More" >More ></a>
                                    </div>
                                    <div class="col-2 seo">
                                        <h3 class="mb-2" style="font-weight: 800;font-size: 1.1em;">Top Cities</h3>
                                        <a href="#" target="_blank" title="Hyderabad Bus Tickets" >Hyderabad Bus Tickets</a>
                                        <a href="#" target="_blank" title="Bangalore Bus Tickets" >Bangalore Bus Tickets</a>
                                        <a href="#" target="_blank" title="Pune Bus Tickets" >Pune Bus Tickets</a>
                                        <a href="#" target="_blank" title="Mumbai Bus Tickets" >Mumbai Bus Tickets</a>
                                        <a href="#" target="_blank" title="More" >More ></a>
                                    </div>
                                    <div class="col-2 seo">
                                        <h3 class="mb-2" style="font-weight: 800;font-size: 1.1em;">Top RTC's</h3>
                                        <a href="#" target="_blank" title="APSRTC" >APSRTC</a>
                                        <a href="#" target="_blank" title="MSRTC" >MSRTC</a>
                                        <a href="#" target="_blank" title="HRTC" >HRTC</a>
                                        <a href="#" target="_blank" title="UPSRTC" >UPSRTC</a>
                                        <a href="#" target="_blank" title="More" >More ></a>
                                    </div>
                                    <div class="col-2 seo">
                                        <h3 class="mb-2" style="font-weight: 800;font-size: 1.1em;">Others</h3>
                                        <a href="#" target="_blank" title="GSRTC" >GSRTC</a>
                                        <a href="#" target="_blank" title="RSRTC" >RSRTC</a>
                                        <a href="#" target="_blank" title="KTCL" >KTCL</a>
                                        <a href="#" target="_blank" title="PEPSU" >PEPSU</a>
                                        <a href="#" target="_blank" title="More" >More ></a>
                                    </div>
                                    <div class="col-2 seo">
                                        <h3 class="mb-2" style="font-weight: 800;font-size: 1.1em;">Tempo Traveller in Cities</h3>
                                        <a href="#" target="_blank" title="Tempo Traveller Bangalore">Tempo traveller in Bangalore</a>
                                        <a href="#" target="_blank" title="Tempo Traveller Chennai">Tempo traveller in Chennai</a>
                                        <a href="#" target="_blank" title="Tempo traveller in Mumbai">Tempo traveller in Mumbai</a>
                                        <a href="#" target="_blank" title="Tempo traveller in Hyderabad">Tempo traveller in Hyderabad</a>
                                        <a href="#" target="_blank" title="Tempo traveller in Ahmedabad">Tempo traveller in Ahmedabad</a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-11 mx-auto">
                                        <hr class="" style="border:0.5px solid #999;">
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-1"></div>
                                    <div class="col-10">
                                        <h3 class="mb-2" style="font-weight: 800;font-size: 1.1em;">Top Operator</h3>
                                        <p style="font-size:16.2px">
                                            SRS Travels &nbsp; | &nbsp; Evacay Bus &nbsp; | &nbsp; Kallada Travels &nbsp; | &nbsp; KPN Travels &nbsp; | &nbsp; Orange Travels &nbsp; | &nbsp; Parveen Travels &nbsp; | &nbsp; Rajdhani Express &nbsp; | &nbsp; VRL Travels &nbsp; | &nbsp; Chartered Speed Bus
                                            Bengal Tiger &nbsp; | &nbsp; SRM Travels &nbsp; | &nbsp; Infant Jesus &nbsp; | &nbsp; Patel Travels &nbsp; | &nbsp; JBT Travels &nbsp; | &nbsp; Shatabdi Travels &nbsp; | &nbsp; Eagle Travels &nbsp; | &nbsp; Kanker Roadways &nbsp; | &nbsp; Komitla &nbsp; | &nbsp;
                                            Sri Krishna Travels &nbsp; | &nbsp; Humsafar Travels &nbsp; | &nbsp; Mahasagar Travels &nbsp; | &nbsp; Raj Express &nbsp; | &nbsp; Sharma Travels &nbsp; | &nbsp; Shrinath Travels &nbsp; | &nbsp; Universal Travels &nbsp; | &nbsp; Verma Travels &nbsp; | &nbsp;
                                            Gujarat Travels &nbsp; | &nbsp; Madurai Radha Travels &nbsp; | &nbsp; Patel Tours and Travels &nbsp; | &nbsp; Paulo Travels &nbsp; | &nbsp; Royal Travels &nbsp; | &nbsp; Amarnath Travels &nbsp; | &nbsp; Vaibhav Travels &nbsp; | &nbsp; Ganesh Travels &nbsp; | &nbsp;
                                            Jabbar Travels &nbsp; | &nbsp; Jain Travels &nbsp; | &nbsp; Manish Travels &nbsp; | &nbsp; Pradhan Travels &nbsp; | &nbsp; YBM Travels &nbsp; | &nbsp; Hebron Transports &nbsp; | &nbsp; Mahalaxmi travels &nbsp; | &nbsp; MR Travels &nbsp; | &nbsp;
                                            Vivegam Travels &nbsp; | &nbsp; VST Travels &nbsp; | &nbsp; Jakhar Travels &nbsp; | &nbsp; Kaleswari Travels &nbsp; | &nbsp; Mahendra Travels &nbsp; | &nbsp; Neeta Tours and Travels &nbsp; | &nbsp; Yamani Travels &nbsp; | &nbsp; Arthi Travels
                                        </p>
                                    </div>
                                </div>
                                <div class="row mt-0">
                                    <div class="col-12 text-right ">
                                        <h3 class="mb-4 mr-5" style="font-weight: 800;font-size: 1.1em;">All Operator ></h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
                <div class="footer-row" >
                    <div class="container">
                        <div class="row">
                            <div class="col-8 mt-3 ml-3">
                                 <div class="row footer-links">
                                    <div class="col-3 ">
                                        <h3 class="mb-2 " style="font-weight: 700;font-size: 1.1em;color: #797979;">About redBus</h3>
                                        <a href="/info/aboutus" target="_blank">About Us</a>
                                        <a href="/info/contactus" target="_blank">Contact Us</a>
                                        <a href="//m.redbus.in" target="_blank">Mobile Version</a>
                                        <a href="/info/mobile" target="_blank">redBus on Mobile</a>
                                        <a href="/sitemap.html" target="_blank">Sitemap</a>
                                        <a href="/info/OfferTerms" target="_blank">Offers</a>
                                        <a href="/careers" target="_blank">Careers</a>
                                        <a href="/values" target="_blank">Values</a>
                                    </div>
                                    <div class="col-3 ">
                                        <h3 class="mb-2 " style="font-weight: 700;font-size: 1.1em;color: #797979;">Info </h3>
                                        <a href="/info/termscondition" target="_blank">T &amp; C</a>
                                        <a href="/info/privacypolicy" target="_blank">Privacy Policy</a>
                                        <a href="/info/faq" target="_blank">FAQ</a>
                                        <a href="http://blog.redbus.in/" target="_blank">Blog</a>
                                        <a href="https://in3.seatseller.travel/" target="_blank">Agent Registration</a>
                                        <a href="https://www.icicilombard.com/" target="_blank">Insurance Partner</a>
                                        <a href="/info/useragreement" target="_blank">User Agreement</a>
                                    </div>
                                    <div class="col-3 ">
                                        <h3 class="mb-2 " style="font-weight: 700;font-size: 1.1em;color: #797979;">Global Sites </h3>
                                        <a href="https://www.redbus.in" target="_blank">India</a>
                                        <a href="https://www.redbus.sg" target="_blank">Singapore</a>
                                        <a href="https://www.redbus.my" target="_blank">Malaysia</a>
                                        <a href="https://www.redbus.id" target="_blank">Indonesia</a>
                                        <a href="https://www.redbus.pe" target="_blank">Peru</a>
                                        <a href="https://www.redbus.co" target="_blank">Colombia</a>
                                    </div>
                                    <div class="col-3 ">
                                        <h3 class="mb-2 " style="font-weight: 700;font-size: 1.1em;color: #797979;">Our Partners</h3>
                                        <a href="https://www.redbus.in" target="_blank">Goibibo</a>
                                        <a href="https://www.redbus.sg" target="_blank">redbus</a>
                                        <a href="https://www.redbus.my" target="_blank">MakeMytrip</a>
                                        <a href="https://www.redbus.id" target="_blank">Easytotrip</a>
                                        <a href="https://www.redbus.pe" target="_blank">HappyJourny</a>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-3 mt-3">
                                <h3 class="text-white" href="#">BlueBus</h3>
                                <div style="color:#d7d7d7;font-size:14px">
                                    redBus is the world's largest online bus ticket booking service trusted by over
                                    17 million happy customers globally. redBus offers bus ticket booking through its
                                    website,iOS and Android mobile apps for all major routes.
                                </div>
                                <div class="mt-2">
                                    <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect"><i class="fe-facebook color-white"></i></button>
                                    <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect ml-2"><i class="fe-twitter color-white"></i></button>
                                    <button type="button" class="btn btn-outline-secondary btn-rounded waves-effect ml-2"><i class="fe-instagram color-white"></i></button>
                                </div>
                                <div class=" text-white mt-2 ml-0 ">
                                    <span>Ⓒ</span><span> 2019-2020 ......... All rights reserved</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </footer>

        </div>
    </section>
</body>

<script src="{{ asset('web/js/vendor.min.js')}}"></script>

<script src="{{ asset('web/js/pages/animation.init.js')}}"></script>

<!-- Plugins js-->
<script src="{{ asset('web/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('web/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('web/libs/clockpicker/bootstrap-clockpicker.min.js') }}"></script>

<!-- Init js-->
<script src="{{ asset('web/js/pages/form-pickers.init.js') }}"></script>

{{--  <script>
$(document).ready(function(){

    $('.source_palace').keyup(function(){
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('search') }}",
          method:"POST",
          data:{query:query,token:_token},
          success:function(data){
              alert(data);
           $('#sourceList').fadeIn();
                    $('#sourceList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){
        $('.source_palace').val($(this).text());
        $('#sourceList').fadeOut();
    });

});
</script>  --}}

<script>
    $('.source_palace').keyup(function(){
       var Source=$(this).val();
            $.ajax({
                    url:'{{route('source')}}',
                    data:{Source : Source},
                    type:'get',
                    success:function(resource)
                    {

                        if(resource != " ")
                        {
                            $('#countryList').show(100);
                            $('#countryList').html(resource);
                        }

                    }
                });
            });

            $(document).on('click', '.source_select', function(){
                $('.source_palace').val($(this).text());
                $('#countryList').fadeOut();
            });

            $('.source_palace').focusout( function(){
                $('#countryList').fadeOut();
            });
</script>

<script>
    $('.destination_palace').keyup(function(){
       var Destnation=$(this).val();
            $.ajax({
                    url:'{{route('dest')}}',
                    data:{Destnation : Destnation},
                    type:'get',
                    success:function(resource)
                    {

                        if(resource != " ")
                        {
                            $('#destationList').show(100);
                            $('#destationList').html(resource);
                        }

                    }
                });
            });

            $(document).on('click', '.dest_select', function(){
                $('.destination_palace').val($(this).text());
                $('#destationList').fadeOut();
            });

            $('.destination_palace').focusout( function(){
                $('#destationList').fadeOut();
            });
</script>

<!-- App js -->
<script src="{{ asset('web/js/app.min.js')}}"></script>


</html>
