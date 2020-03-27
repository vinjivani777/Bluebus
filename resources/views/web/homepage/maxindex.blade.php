    <div class="head-banner">
        <div class="banner-wrapper">
                <div id="image_div" style="background: url({{ asset('web/images/redbus/home-banner/diwali-2019-22.png') }}); background-size: cover; ">
                    <div id="welcome_image_div" style="background: url({{ asset('web/images/redbus/home-banner/diwali-2019-111.png') }}) top center no-repeat;position: relative;z-index:0;pointer-events: none;height:450px;"></div>
                </div>
            <h1 class="image-text main-header-family"></h1>
            <div id="search_div" class="clearfix">
            </div>
        </div>
    </div>

    <div class="search-bar" >
        <div class="row" >
            <div class="col-9 col-md-9 mx-auto">
                <div class="container ml-3" style="position: absolute;bottom: 186px;z-index:2;">
                    <form action="{{ route('search') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row align-items-center ">
                            <div class="col-3 mr-0 pr-0 input-icons">
                                <i class="far fa-building icon"></i>
                                <input type="text" class="form-control mb-2 search_input source_place text-center" name="source_place"  autocomplete="off" id="source_place" placeholder="Source Place">
                            </div>
                            <div class="col-3 ml-0 pl-0 mr-0 pr-0 input-icons">
                                <i class="far fa-building icon"></i>
                                <input type="text" class="form-control mb-2 search_input destination_place text-center" name="destination_place"  autocomplete="off" id="destination_place" placeholder="Destination Place">
                            </div>
                            <div class="col-2 ml-0 pl-0 mr-0 pr-0 input-icons">
                                <i class="fe-calendar icon"></i>
                                <input type="text" class="form-control mb-2 search_input basic-datepicker text-center" name="journey_date"  id="journey_date" placeholder="Onward Date">
                            </div>
                            <div class="col-2 ml-0 pl-0 mr-0 pr-0 input-icons">
                                <i class="fe-calendar icon"></i>
                                <input type="text" class="form-control mb-2 search_input return-datepicker text-center" name="return_date"  id="return_date" placeholder="Return Date">
                            </div>
                            <div class="col-2 ml-0 pl-0">
                                <button class="btn  btn-danger mb-2 search_input search_bus_btn" id="search_bus"><b>Search Bus</b></button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="offerforu bg-light" style="height:430px;background-color: #f7f7f7;margin-top: -9px;">
        <div class="offer-body">
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="container-fluid" style="position: absolute;top:-64px;z-index: 1;">
                        <div class="row">
                            <div class="col-7 mx-auto" >
                                <div class="card" style="height:120px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <img  src="{{ asset('/'.$promoFirst->promocode_image) }}" alt="" style="width:100px;height:100px;margin-top:-15px;">
                                            </div>
                                            <div class="col-9">
                                                <h4>{{ $promoFirst->description }}</h4>
                                                <h5>Use code FIRST TIME sign up</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-7 mx-auto" >


                                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

                                    <div class="carousel-inner" role="listbox">

                                        <div class="carousel-item active">
                                            <div class="col-12 mx-auto" >
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


                                        <div class="carousel-item ">
                                            <div class="col-12 mx-auto">
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

                                    </div>
                                </div>

                            </div> --}}
                        </div>
                        <div class="row">
                            @if($promoCount <= 3 )
                                <?php $r=0; ?>
                                @foreach ($promoCode as $item)
                                    <?php $r++; ?>
                                        <div class="col-4 mx-auto">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h6 class="text-center text-dark mt-0">
                                                                {{ $item->description }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 text-center">
                                                            <img src="{{ asset('/'.$item->promocode_image) }}" alt="" style="width:274px;height:147px;">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5 class="text-center">Limited Period Offer</h5>
                                                            <h4 class="text-center">  Pay Using AmazonPay Postpaid </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                            @else
                                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        @foreach ($promoCode as $item)
                                            <div class="carousel-item ">
                                                <div class="col-4 mx-auto">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <h6 class="text-center text-dark mt-0">
                                                                        {{ $item->description }}
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 text-center">
                                                                    <img src="{{ asset('/'.$item->promocode_image) }}" alt="" style="width:274px;height:147px;">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <h5 class="text-center">Limited Period Offer</h5>
                                                                    <h4 class="text-center">  Pay Using AmazonPay Postpaid </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="how-to-help">
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
    </div>

    <div class="watch-ad">
        <div class="main-body" style="background-image: url(https://s3.rdbuz.com/Images/TVC-Banner.jpg);background-repeat: no-repeat;position: relative;width: 1122px;height: 236px;margin: 0 auto; top: 25px;"><div class="video_section" style="position: relative;width: 375px;margin: 0 auto;float: left;top: 21px;x;left: 5px;"><iframe width="375" height="198" src="https://www.youtube.com/embed/NMsv_NPLTY4?rel=0"></iframe></div></div>
    </div>

    <div class="bus-track">
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
    </div>

    <div class="contect-us">
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
    </div>

    <div style="padding-bottom: 0;padding-top: 15px;background-color: #ededed;border-top:1px solid #c0c0c0;border-bottom:1px solid #c0c0c0;">
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

        </div>
    </div>

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
        </div>
    </div>
