<div class="col-lg-12 col-sm-12 col-md-12 col-12 col-xs-12">
    <form action="{{ route('search') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card p-2" style="position:relative;box-shadow: 0 0 4px 0 rgba(0,0,0,.30)">
            {{-- <label for="">From</label>  --}}
            <textarea class="form-control pb-0 search_input source_place" name="source_place" autocomplete="off" id="minisource_place" cols="1" rows="1" placeholder="From"></textarea>
            <div class="row">
                <div class="col-10 col-sm-10 col-md-10 col-lg-11">
                    <hr class=" mx-auto" style="border: 0.5px solid #ddd;">
                </div>
                <div class="col-2 col-sm-2 col-md-2 col-lg-1  mt-0 ">
                    <img src="{{ asset('web/images/redbus/icon/van.png') }}" class="bus_img mx-auto" style="z-index:5;position:absolute" id="bus_img" width="30px" height="30px">
                </div>
            </div>
            {{-- <label for="" class="mt-0 pt-0">To</label> --}}
            <textarea class="form-control pb-0 search_input destination_place" name="destination_place" autocomplete="off" id="minidestination_place" cols="1" rows="1" placeholder="To"></textarea>
        </div>

        <div class="card p-2 " style="box-shadow: 0 0 5px 0 rgba(0,0,0,.30)">
            {{-- <label for="">Journey Date</label> --}}
            {{-- <input type="text" class="form-control mb-2 search_input basic-datepicker text-center" name="onward"  id="journey_date" placeholder="Onward Date"> --}}
            <input type="text" class="form-control mb-2 search_input basic-datepicker" name="journey_date" id="minijourney_date" placeholder="Journey Date">
        </div>

        <div class="col-8 col-md-3 col-lg-3 col-sm-10 col-xs-10 mx-auto ">
            <button class="btn   btn-sm btn-danger" style="width:100%">Search Bus</button>
        </div>
    </form>
    <div class="row mt-3">
        <div class="col-12">
            <h5 class="">OFFERS FOR YOU</h5>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-12 col-lg-4 col-md-6">
            <div class="card card-body p-2">
                <div class="row mt-0 mb-0">
                    <div class="col-3 col-sm-3 ">
                        <img src="{{ asset('web\images\redbus\offer\100x100.png') }}" style="width:50px;height:50px" alt="" class="mx-auto">
                    </div>
                    <div class="col-9 col-lg-7">
                        <h6 class="text-danger">Save up to Rs 250 on bus ticket</h5>
                            <span>Validity : 1 Mar to 31 Apr</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-sm-12 col-lg-4 col-md-6">
                <div class="card card-body p-2">
                    <div class="row mt-0 mb-0">
                        <div class="col-3 col-sm-3 ">
                            <img src="{{ asset('web\images\redbus\offer\100x100.png') }}" style="width:50px;height:50px" alt="" class="mx-auto">
                        </div>
                        <div class="col-9 col-lg-7">
                            <h6 class="text-danger">Save up to Rs 250 on bus ticket</h5>
                            <span>Validity : 1 Mar to 31 Apr</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-sm-12 col-lg-4 col-md-6">
                <div class="card card-body p-2">
                    <div class="row mt-0 mb-0">
                        <div class="col-3 col-sm-3 ">
                            <img src="{{ asset('web\images\redbus\offer\100x100.png') }}" style="width:50px;height:50px" alt="" class="mx-auto">
                        </div>
                        <div class="col-9 col-lg-7">
                            <h6 class="text-danger">Save up to Rs 250 on bus ticket</h5>
                            <span>Validity : 1 Mar to 31 Apr</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row ">
            <div class="col-12">
                <h5 class="">Book Bus Tickets Online</h5>
            </div>
            <div class="col-12">
                <p class="text-justify">redBus is the world’s largest online bus ticket booking platform trusted by millions of happy customers globally. redBus comprises of a wide array of noteworthy bus companies in India offering fast, effortless, and secure booking experiences. redBus enables you to choose the destination, select your preferred seat, and book your bus ticket with just a few clicks. Avail exciting redBus offers and experience an unforgettable journey!redBus is the world's leading bus ticket booking company. It operates in 6 countries (India, Malaysia, Singapore, Indonesia, Peru, and Colombia). redBus has sold over 180 million bus tickets worldwide through the redBus website and app. With over 17 million satisfied customers, redBus has set the bar quite high. There is no shortage of buses on remote and unpopular routes as redBus has on-boarded over 2,300 bus operators to meet every traveler’s needs and requirements Buying a bus ticket on the redBus app or website is really simple. You can download the app or you can go directly to redbus.in. In the search box, enter the point of origin and destination. Compare the prices, schedules, and services of every bus operator providing their services on the route of your choice, select a seat and proceed to the payment page to complete the booking process. You can utilize any of the payment portals that are available on the payment page to complete your transaction. Once your payment has been confirmed, all you have to do is pack your bags and get ready to travel. It's that simple!</p>
            </div>
        </div>

    </div>
