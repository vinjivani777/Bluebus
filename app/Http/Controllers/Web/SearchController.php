<?php

namespace App\Http\Controllers\Web;

use App\Model\Bus;
use App\Model\City;
use App\Model\Menu;
use App\Model\Route;
use App\Model\Country;
use App\Model\BusType;
use App\Model\Amenitie;
use App\Model\DropPoint;
use App\Model\BoardPoint;
use App\Model\Bustoroute;
use App\Model\PromoCode;
use App\Model\SeatLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
// use Exception;

class SearchController extends Controller
{

    public function source(Request $request)
    {


        $result = City::select("city_name")
                ->where("city_name","LIKE","%{$request->input('term')}%")
                ->take(50)
                ->get();

        return response()->json($result);

    }

    public function dest(Request $request)
    {

        $result = City::select("city_name")
                ->where("city_name","LIKE","%{$request->input('term')}%")
                ->take(50)
                ->get();

        return response()->json($result);

    }

    public function search(Request $request)
    {
        // return $request;
        $source=$request->source_place;
        $dest=$request->destination_place;
        $jdate=$request->journey_date;
        //  Bus::select('Dates')->first();
        $route_id=Route::select('id')->where(['status'=>'1','source_name'=>$source,'destination_name'=>$dest])->first();
        $menus=Menu::whereStatus(1)->get();

        if($route_id==""){
            $params=array();
            $params['result']="NoBus";
            $params['total_bus']=0;
            $params['source']=$source;
            $params['dest']=$dest;
            $params['Menus']=$menus;

            // return $params;
            return view('web.search.search',$params);
        }else{
            // $Total_route_id=Bustoroute::select('bus_id')->whereRoute_id($route_id->id)->get();
            $Total_route_id=DB::table('bustoroutes')
                                ->select('bus_id', DB::raw('count(*) as total'))
                                ->groupBy('bus_id')->whereRoute_id($route_id->id)
                                ->pluck('bus_id')->all();
            $Total_bus=Bus::with('Bus_Type')->whereStatus(1)->whereIn('id',$Total_route_id)->get();
            $data=array();

            foreach($Total_bus as $bus)
            {
                $busid=$bus->id;
                $amenities[$busid]=explode(",",$bus->amenities_id);
                foreach($amenities as $amenitie=>$key)
                {
                        $path[$busid]=Amenitie::whereIn('id',$amenities[$busid])->select('id','description','image_path')->get()->take(3);
                }
            }

            $allAmenities=Amenitie::whereStatus(1)->get();
            $BusType=BusType::wherestatus(1)->get();
            $menus=Menu::whereStatus(1)->get();

            $params=array();
            $params['result']="BusAreHere";
            $params['source']=$source;
            $params['dest']=$dest;
            $params['path']=$path;
            $params['aminaties']=$allAmenities;
            $params['total_bus']=$Total_bus;
            $params['route']=$route_id->id;
            $params['BusTypes']=$BusType;


            $nav=Array();
            $nav['active']="Active";
            $nav['Menus']=$menus;

            return view('web.search.search',$params,$nav);
        }
    }

    public function filter(Request $request)
    {
        if(isset($request->action))
        {

            $route_id=$request->route;

            $Total_route_id=DB::table('bustoroutes')
                                ->select('bus_id', DB::raw('count(*) as total'))
                                ->groupBy('bus_id')->whereRoute_id($route_id)
                                ->pluck('bus_id')->all();

            // $Total_bus=Bus::with('Bus_Type')->whereStatus(1)->whereIn('id',$Total_route_id)->get();

            $Total_bus=Bus::query();
            $Total_bus = $Total_bus->whereIn('id',$Total_route_id);


            if(isset($request->busType) && !empty($request->busType))
            {
                $busType_filter =$request->busType;
                $Total_bus = $Total_bus->whereIn('bus_type_id',$busType_filter);
            }

            if(isset($request->Aminaties) && !empty($request->Aminaties))
            {
                $Aminaties_filter = $request->Aminaties;
                $Total_bus = $Total_bus->whereIn('amenities_id',$Aminaties_filter);
            }

             $results = $Total_bus->wherestatus(1)->get();

            foreach($results as $bus)
            {
                $busid=$bus->id;
                $amenities[$busid]=explode(",",$bus->amenities_id);
                foreach($amenities as $amenitie=>$key)
                {
                        $path[$busid]=Amenitie::whereIn('id',$amenities[$busid])->select('id','description','image_path')->get()->take(3);
                }
            }

            $allAmenities=Amenitie::whereStatus(1)->get();
            $BusType=BusType::wherestatus(1)->get();
            $menus=Menu::whereStatus(1)->get();

            $output='';

            $output.='

            <table  class=" table  datatable" style="border-collapse:separate; border-spacing: 0 1em;">
                <thead class="">
                    <tr>';
                    $output.='
                        <th>'. count($results) .' Buses <span style="font-weight: 400;">Found</span>  <span class="float-right">Sort By:</span></th>
                        <th><span style="font-weight: 400;">Departure</span></th>
                        <th><span style="font-weight: 400;">Duration</span></th>
                        <th><span style="font-weight: 400;">Arrival</span></th>
                        <th><span style="font-weight: 400;">Ratings</span></th>
                        <th><span style="font-weight: 400;">Fare</span></th>
                        <th><span style="font-weight: 400;">Seats Available
                        </span></th>
                    </tr>
                </thead>
                <tbody >';
                         $r=0;
                    foreach ($results as $item)
                    {
                        $r++;

            $output.='<tr style="border:1px solid #ddd" class="bg-white bus-list-tr" id="row_'. $r .'">
                        <td >
                            <div class="row">
                                <div class="col-12">
                                    <input type="hidden" name="bus_id" class="bus_id" id="bus_id_'. $r .'" value="'.$item->id .'">
                                    <input type="hidden" name="total_select_seat" class="total_select_seat" id="total_select_seat_'. $r .'" >
                                    <input type="hidden" name="total_fare_amt" class="total_fare_amt" id="total_fare_amt_'. $r .'" >
                                    <input type="hidden" name="selected_broadpoint" class="selected_broadpoint" id="selected_broadpoint_'. $r .'" >
                                    <input type="hidden" name="selected_droppoint" class="selected_droppoint" id="selected_droppoint_'. $r .'" >

                                    <span style="font-size:16px;font-weight: 700;" class="busName_'. $r .'" id="busName_'. $r .'">'.$item->bus_name .'</span>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <span style="font-size:12px;font-weight: 300;" class="busType_'. $r .'" id="busType_'. $r .'">'.$item->Bus_Type->type_name.'</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">';
                                    foreach($path[$item->id] as $icon)
                                    {
                                        $output.='<img  style="font-size:1px;margin-left:10px;height:18px;font-weight:100;" class="amanitis_'. $r .'"   src="'. $icon['image_path'] .'"  title="'. $icon->description  .' !" data-plugin="tippy" data-tippy-theme="success" data-tippy-arrow="true"/>';
                                    }
                                    $output.='</div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-size:19px;font-weight:400" class="startTime_'. $r .'" id="startTime_'. $r .'">'. date("g:i A",strtotime($item->start_time)) .'</span>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-4">
                                    <span style="font-size:12px;font-weight: 300;" class="startingPoint_'. $r .'" id="startingPoint_'. $r .'">'. $item->starting_point .'</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-size:18px;font-weight:400" class="duration_'. $r .'" id="duration_'. $r .'">'. date('G:i',strtotime($item->ending_time) -  strtotime($item->start_time)) .'</span>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-size:18px;font-weight:400" class="endingTime_'. $r .'" id="endingTime_'. $r .'">'.date("g:i A",strtotime($item->ending_time)) .'</span>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-4">
                                    <span style="font-size:12px;font-weight: 300;" class="endingPoint_'. $r .'" id="endingPoint_'. $r .'">'. $item->ending_point .'</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-12">
                                    <span class="badge badge-danger p-1" style="font-size:px;font-weight:300"  class="reating_'. $r .'" id="reating_'. $r .'"><i class="fe-star mr-1"></i>4.2</span>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                </div>
                            </div><div class="row mt-2">
                                <div class="col-12">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-size:18px;font-weight:400"  class="totalFare_'. $r .'" id="totalFar_'. $r .'">INR '. $item->total_fare .'</span>
                                    <input type="hidden" name="totalFare" class="totalFare_'. $r .'" id="totalFare_'. $r .'" value="'. $item->total_fare .'">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">

                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                </div>
                            </div>
                        </td>
                        <td class="pb-0">
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-size:18px;font-weight:400" class="totalSeats_'. $r .'" id="totalSeats_'. $r .'">30 Seats</span>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <span style="font-size:12px;font-weight: 300;" class="avlSeats_'. $r .'" id="avlSeats_'. $r .'">31 Seats available</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 pr-0">
                                    <span style="font-size:12px;font-weight: 300;" class="float-right mb-0 mr-0">
                                        <button class="mb-0 mr-0 btn btn-sm btn-danger viewSeats"  style="border:0px;border-radius:0px;max-width:110px;" id="viewSeats_'. $r .'" data-style="contract">
                                            <span class="ladda-label">VIEW SEATS</span>
                                            <span class="ladda-spinner"></span>
                                        </button>
                                        <button class="mb-0 mr-0 btn btn-sm btn-success hideView"  style="display:none;border:0px;border-radius:0px;max-width:110px;width:110px" id="hideView_'. $r .'" data-style="contract" style="display:none;">
                                            <span class="ladda-label">HIDE</span>
                                            <span class="ladda-spinner"></span>
                                    </button>
                                    </span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="amenities mb-2" style="background-color:#f8f9fa;display:none" >
                        <td colspan="7" class="amenities_content">
                            <div class="row">
                                <div class="col-12 mt-1 mb-1 ml-3 data">';
                                foreach ($allAmenities as $amt)
                                {
                                        $output.='<span style="font-size:14px;font-weight: 100;" >';

                                                    if(($amt->id) == ($item->amenities_id))
                                                    {
                                                        $amt->description;
                                                    }
                                }
                                        $output.='</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr id="SeatsLayout_'. $r .'" class="SeatsLayout" style="background-color:#f8f9fa;">

                    </tr>';
                    }
            $output.='</tbody>
            </table>';

            // $output=json_encode($output);
            return response()->json($output);
            // return $output;

        }else{

            $output = '<h3>No Data Found</h3>';

        }
    }

    public function viewSeate(Request $request)
    {

        try{

            $bus_id=$request->bus_id;
            $SeatLayout=SeatLayout::whereBus_id($request->bus_id)->first();
            $Bus=Bus::FindorFail($bus_id);
            $BoardPoint=BoardPoint::whereStatus(1)->whereBus_id($bus_id)->get();
            $DropPoint=DropPoint::whereStatus(1)->whereBus_id($bus_id)->get();
            $str=str_random(10);

            $total_seat=$SeatLayout->total_seat;
            $seat_type=$SeatLayout->seat_type;
            $bus_bath=$SeatLayout->bus_bath;
            $layout_type=$SeatLayout->layout_type;
            $last_row_seat=$SeatLayout->no_of_seat_at_last;
            $layout=unserialize($SeatLayout->layout);
            $dirver=asset('web/images/redbus/icon/driver.png');

            $url="web/images/redbus/icon/van.png";
            $userurl='web.user';

            $avlSeat=asset('web/images/redbus/icon/4.png');
            $seleSeat=asset('web/images/redbus/icon/5.png');
            $bookSeat=asset('web/images/redbus/icon/6.png');

            if($seat_type == 1)
            {
                $avlSeat=asset('web/images/redbus/icon/4.png');
                $seleSeat=asset('web/images/redbus/icon/5.png');
                $bookSeat=asset('web/images/redbus/icon/6.png');

                $seat=asset('web/images/redbus/icon/4.png');
            }
            elseif($seat_type == 2)
            {
                $avlSeat=asset('web/images/redbus/icon/1.png');
                $seleSeat=asset('web/images/redbus/icon/2.png');
                $bookSeat=asset('web/images/redbus/icon/3.png');

                $sofa=asset('web/images/redbus/icon/1.png');

            }elseif($seat_type == 3)
            {
                $avlSeat=asset('web/images/redbus/icon/4.png');
                $seleSeat=asset('web/images/redbus/icon/5.png');
                $bookSeat=asset('web/images/redbus/icon/6.png');

                $avlSofa=asset('web/images/redbus/icon/1.png');
                $seleSofa=asset('web/images/redbus/icon/2.png');
                $bookSofa=asset('web/images/redbus/icon/3.png');

                $seat=asset('web/images/redbus/icon/4.png');
                $sofa=asset('web/images/redbus/icon/1.png');
            }

            $html="";



            $html.='<td colspan="7">
                <div class="row">';
                    if($layout_type == "1 X 2")
                    {
                        $Alfa="A";
                        $No=1;
                            $html.='<div class="col-3 col-sm-12 col-xs-12 p-1 ml-2">
                                    <span>Single Desk</span>
                                    <div class="card">
                                            <div class="card-header bg-secondary" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                                            </div>
                                        <div class="card-body p-0 mx-auto">';
                                            $total_seat=$total_seat / 3;
                                            $html.='<div class="row m-1">
                                                        <div class="col-9 m-0"></div>
                                                        <div class="col-2 m-0">
                                                            <img src='.$dirver.'>
                                                        </div>
                                                    </div>';

                                            if($seat_type == 1)
                                            {
                                                for($i=1; $i <=  $total_seat; $i++)
                                                {
                                                    $html.='<div class="row m-2">
                                                                <div class="col-3 m-0">
                                                                    <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                                <div class="col-3 m-0"></div>
                                                                <div class="col-3 m-0">
                                                                    <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                </div>
                                                                <div class="col-3 m-0">
                                                                    <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                        </div>';
                                                }

                                                $html.='<div class="row m-2">';
                                                for ($i=1; $i <= $last_row_seat; $i++) {

                                                    $html.='<div class="col-2">
                                                                <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                // <div>'.$Alfa.$No.'</div>';
                                                                $No++;$Alfa++;
                                                                $html.='</div> ';
                                                    }
                                                $html.='</div>';
                                            }

                                            if($seat_type == 2)
                                            {
                                                for($i=1; $i <=  $total_seat; $i++)
                                                {
                                                    $html.='<div class="row m-2">
                                                                <div class="col-3 m-0">
                                                                    <img src='.$sofa.' class="seat_img" id="sofa_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                                <div class="col-3 m-0"></div>
                                                                <div class="col-3 m-0">
                                                                    <img src='.$sofa.' class="seat_img" id="sofa_'.$Alfa.$No.'">
                                                                </div>
                                                                <div class="col-3 m-0">
                                                                    <img src='.$sofa.' class="seat_img" id="sofa_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                        </div>';
                                                }

                                                $html.='<div class="row m-2">';
                                                for ($i=1; $i <= $last_row_seat; $i++) {

                                                    $html.='<div class="col-2">
                                                                <img src='.$sofa.' class="seat_img" id="sofa_'.$Alfa.$No.'">
                                                                <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                // <div>'.$Alfa.$No.'</div>';
                                                                $No++;$Alfa++;
                                                                $html.='</div> ';
                                                    }
                                                $html.='</div>';
                                            }

                                            if($seat_type == 3)
                                            {
                                                for($i=1; $i <=  $total_seat; $i++)
                                                {
                                                    $html.='<div class="row m-2">
                                                                <div class="col-3 m-0">
                                                                    <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                    $html.='</div>
                                                                <div class="col-3 m-0"></div>
                                                                <div class="col-3 m-0">
                                                                    <img src='.$sofa.' class="seat_img" id="sofa_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                    $html.='</div>
                                                                <div class="col-3 m-0">
                                                                    <img src='.$sofa.' class="seat_img" id="sofa_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                    $html.='</div>
                                                            </div>';
                                                }

                                                $html.='<div class="row m-2">';
                                                for ($i=1; $i <= $last_row_seat; $i++) {

                                                    $html.='<div class="col-2">
                                                                <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                // <div>'.$Alfa.$No.'</div>';
                                                                $No++;$Alfa++;
                                                        $html.='</div>';
                                                    }
                                                $html.='</div>';
                                            }
                                $html.='</div>
                                    </div>
                                </div>
                                <div class="col-3 ml-2 all-seat-details">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <img src='.$avlSeat.'>
                                            <span style="font-weight:200;font-size:10px">Avalible</span>
                                        </div>
                                        <div class="col-4 text-center">
                                            <img src='.$seleSeat.'>
                                            <span style="font-weight:200;font-size:10px">Selected</span>
                                        </div>
                                        <div class="col-4 text-center">
                                            <img src='.$bookSeat.'>
                                            <span style="font-weight:200;font-size:10px">Booked</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5 mt-2 ml-2 " >
                                    <div class="row">
                                        <div class="col-md-12 fare-card" >
                                            <div class="card select-seat-fare-details select-seat-fare-details-active" style="display:none">
                                                <div class="card-body" data-select2-id="9" >
                                                    <div class="row">
                                                        <div class="col-12 col-md-12 font-weight-bold  text-dark ">
                                                            <div style="font-size:16px"> Pickup & Drop off </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12 col-md-12">
                                                            <div style="font-weight:400;font-size:15px" class="float-left">'.$Bus->starting_point.'</div>
                                                            <div style="font-weight:700;font-size:15px" class="float-right">'. date("g:i A",strtotime($Bus->start_tie)) .'</div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12 col-md-12 text-center mx-auto">
                                                            <img src="'.asset($url).'" alt="" width="40px" >
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12 col-md-12">
                                                            <div style="font-weight:400;font-size:15px" class="float-left">'.$Bus->ending_point.'</div>
                                                            <div style="font-weight:700;font-size:15px" class="float-right">'.date("g:i A",strtotime($Bus->ending_time)).'</div>
                                                        </div>
                                                    </div>
                                                    <div class="row m-0 p-0">
                                                        <div class="col-12 col-md-12 m-0 p-0">
                                                            <hr style="border:0.5px solid #dcdcdc">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-md-12">
                                                            <div style="font-weight:700;font-size:18px" class="float-left">Seat No.</div>
                                                            <div style="font-weight:700;font-size:15px" class="float-right  select_seat_no" id="select_seat_no_'.@$r.'">0</div>
                                                        </div>
                                                    </div>
                                                    <div class="row m-0 p-0">
                                                        <div class="col-12 col-md-12 m-0 p-0">
                                                            <hr style="border:0.5px solid #dcdcdc">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-md-12">
                                                            <div style="font-weight:700;font-size:18px" class="float-left">Fare Details</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-md-12">
                                                            <div style="font-weight:400;font-size:14px" class="float-left">Amount</div>
                                                            <div style="font-weight:700;font-size:15px" class="float-right  Total_fare">0</div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2 ml-0 mr-0">
                                                        <div class="col-12 col-md-12 ml-0 mr-0">
                                                            <button type="button" class="btn btn-block btn-danger width-lg btn-sm ml-0 mr-0 processToBook" >PROCEED TO BOOK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end card-box-->
                                            <div class="card-box" style="display:none">
                                                <ul class="nav nav-tabs nav-bordered nav-danger nav-justified">
                                                    <li class="nav-item active show">
                                                        <a href="#broadoint-b2-'.$str.'"  data-toggle="tab" aria-expanded="false" class="nav-link active show" style="font-size:16px;font-weight:600">
                                                            BOARDING
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#droppoint-b2-'.$str.'" data-toggle="tab" aria-expanded="true" class="nav-link" style="font-size:16px;font-weight:600">
                                                            DROPING
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active show" id="broadoint-b2-'.$str.'">
                                                        <div style="max-height:300px;overflow:auto;">';
                                                                $k=0;
                                                                foreach ($BoardPoint as $val) {
                                                                    $k++;
                                                                    $html.='
                                                                            <div class="row m-1 p-0">
                                                                                <div class="col-12 m-0 p-0">
                                                                                    <div class="radio radio-danger m-0 p-0">
                                                                                        <input type="radio" class="broadpoint" name="broadpoint" id="'.$k.'_'.$val->id.'"  value="'.$val->id.'">
                                                                                        <label for="'.$k.'_'.$val->id.'">
                                                                                        <div class="float-left" style="font-size:14px;font-weight:400;width:150px;" title="'. $val->address .' !" data-plugin="tippy" data-tippy-theme="success" data-tippy-arrow="true">'. $val->board_point .'</div>
                                                                                        <div class="float-right" style="margin-left:100px;font-size:16px;font-weight:600">'. date("g:i A",strtotime($val->pickup_time)) .'</div>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row m-0 p-0">
                                                                                <div class="col-12 col-md-12 m-0 p-0">
                                                                                    <hr style="border:0.5px solid #dcdcdc">
                                                                                </div>
                                                                            </div>
                                                                    ';

                                                                }

                                                        $html.='
                                                            </div>
                                                    </div>
                                                    <div class="tab-pane" id="droppoint-b2-'.$str.'">
                                                        <div style="max-height:300px;overflow:auto;">';
                                                        $k=50;
                                                        foreach ($DropPoint as $val) {
                                                            $k++;
                                                            $html.='
                                                                    <div class="row m-1 p-0">
                                                                        <div class="col-12 m-0 p-0">
                                                                            <div class="radio radio-danger m-0 p-0">
                                                                                <input type="radio" class="droppoint" name="droppoint" id="'.$k.'_'.$val->id.'"  value="'.$val->id.'" checked=""    >
                                                                                <label for="'.$k.'_'.$val->id.'">
                                                                                <div class="float-left" style="font-size:14px;font-weight:400;width:150px;" title="'. $val->address .' !" data-plugin="tippy" data-tippy-theme="success" data-tippy-arrow="true">'. $val->drop_point .'</div>
                                                                                <div class="float-right" style="margin-left:100px;font-size:16px;font-weight:600">'. date("g:i A",strtotime($val->drop_time)) .'</div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row m-0 p-0">
                                                                        <div class="col-12 col-md-12 m-0 p-0">
                                                                            <hr style="border:0.5px solid #dcdcdc">
                                                                        </div>
                                                                    </div>
                                                            ';

                                                        }

                                                    $html.='
                                                        </div>
                                                            <div class="row mt-3 ml-0 mr-0">
                                                                <div class="col-12 col-md-12 ml-0 mr-0">
                                                                    <button class="btn btn-block btn-danger width-lg btn-sm ml-0 mr-0 continue-to-book right-bar-toggle " onclick="return validate(this);" data-href="'. route($userurl) .'">CONTINUE TO BOOK</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                </div>
                            </div>';
                    }elseif($layout_type == "2 X 2")
                    {
                        $Alfa="A";
                        $No=1;
                            $html.='<div class="col-4 col-sm-12 col-xs-12 p-1 ml-1">
                                    <span>Single Desk</span>
                                    <div class="card">
                                            <div class="card-header bg-secondary" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                                            </div>
                                        <div class="card-body p-0 mx-auto">';
                                            $total_seat=$total_seat / 4;
                                            $html.='<div class="row m-1">
                                                        <div class="col-9 m-0"></div>
                                                        <div class="col-2 m-0">
                                                            <img src='.$dirver.'>
                                                        </div>
                                                    </div>';
                                            if($seat_type == 1)
                                            {
                                                for($i=1; $i <=  $total_seat; $i++)
                                                {
                                                    $html.='<div class="row m-2">
                                                                <div class="col-2 m-0">
                                                                    <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                                <div class="col-2 m-0">
                                                                    <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                                <div class="col-4 m-0"></div>
                                                                <div class="col-2 m-0">
                                                                    <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                                <div class="col-2 m-0">
                                                                    <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                            </div>';
                                                }

                                                $html.='<div class="row m-2">';
                                                for ($i=1; $i <= $last_row_seat; $i++) {

                                                    $html.='<div class="col-2 ">
                                                                <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                // <div>'.$Alfa.$No.'</div>';
                                                                $No++;$Alfa++;
                                                        $html.='</div>';
                                                    }
                                                $html.='</div>';
                                            }

                                            if($seat_type == 2)
                                            {
                                                for($i=1; $i <=  $total_seat; $i++)
                                                {
                                                    $html.='<div class="row m-2">
                                                                <div class="col-2 m-0">
                                                                    <img src='.$sofa.' class="seat_img" id="sofa_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                                <div class="col-2 m-0">
                                                                    <img src='.$sofa.' class="seat_img" id="sofa_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                                <div class="col-4 m-0"></div>
                                                                <div class="col-2 m-0">
                                                                    <img src='.$sofa.' class="seat_img" id="sofa_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                                <div class="col-2 m-0">
                                                                    <img src='.$sofa.' class="seat_img" id="sofa_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                            </div>';
                                                }

                                                $html.='<div class="row m-2">';
                                                for ($i=1; $i <= $last_row_seat; $i++) {

                                                    $html.='<div class="col-2 ">
                                                                <img src='.$sofa.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                // <div>'.$Alfa.$No.'</div>';
                                                                $No++;$Alfa++;
                                                        $html.='</div>';
                                                    }
                                                $html.='</div>';
                                            }

                                            if($seat_type == 3)
                                            {
                                                for($i=1; $i <=  $total_seat; $i++)
                                                {
                                                    $html.='<div class="row m-2">
                                                                <div class="col-3 m-0">
                                                                    <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                                <div class="col-3 m-0">
                                                                    <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                                <div class="col-3 m-0"></div>
                                                                <div class="col-3 m-0">
                                                                    <img src='.$sofa.' class="seat_img" id="sofa_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                                <div class="col-3 m-0">
                                                                    <img src='.$sofa.' class="seat_img" id="sofa_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                            </div>';
                                                }

                                                $html.='<div class="row m-2">';
                                                for ($i=1; $i <= $last_row_seat; $i++) {

                                                    $html.='<div class="col-2">
                                                                <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                // <div>'.$Alfa.$No.'</div>';
                                                                $No++;$Alfa++;
                                                    $html.='</div>';
                                                    }
                                                $html.='</div>';
                                            }

                                $html.='</div>
                                    </div>
                                </div>
                                <div class="col-2 ml-2 all-seat-details">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <img src='.$avlSeat.'>
                                            <span style="font-weight:200;font-size:10px">Avalible</span>
                                        </div>
                                        <div class="col-4 text-center">
                                            <img src='.$seleSeat.'>
                                            <span style="font-weight:200;font-size:10px">Selected</span>
                                        </div>
                                        <div class="col-4 text-center">
                                            <img src='.$bookSeat.'>
                                            <span style="font-weight:200;font-size:10px">Booked</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5 mt-2 ml-1 " >
                                    <div class="row">
                                        <div class="col-md-12 fare-card" >
                                            <div class="card select-seat-fare-details select-seat-fare-details-active" style="display:none" >
                                                <div class="card-body" data-select2-id="9" >
                                                    <div class="row">
                                                        <div class="col-12 col-md-12 font-weight-bold  text-dark ">
                                                            <div style="font-size:16px"> Pickup & Drop off </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12 col-md-12">
                                                            <div style="font-weight:400;font-size:15px" class="float-left">'.$Bus->starting_point.'</div>
                                                            <div style="font-weight:700;font-size:15px" class="float-right">'. date("g:i A",strtotime($Bus->start_tie)) .'</div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12 col-md-12 text-center mx-auto">
                                                            <img src="'.asset($url).'" alt="" width="40px" >
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12 col-md-12">
                                                            <div style="font-weight:400;font-size:15px" class="float-left">'.$Bus->ending_point.'</div>
                                                            <div style="font-weight:700;font-size:15px" class="float-right">'.date("g:i A",strtotime($Bus->ending_time)).'</div>
                                                        </div>
                                                    </div>
                                                    <div class="row m-0 p-0">
                                                        <div class="col-12 col-md-12 m-0 p-0">
                                                            <hr style="border:0.5px solid #dcdcdc">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-md-12">
                                                            <div style="font-weight:700;font-size:18px" class="float-left">Seat No.</div>
                                                            <div style="font-weight:700;font-size:15px" class="float-right  select_seat_no">0</div>
                                                        </div>
                                                    </div>
                                                    <div class="row m-0 p-0">
                                                        <div class="col-12 col-md-12 m-0 p-0">
                                                            <hr style="border:0.5px solid #dcdcdc">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-md-12">
                                                            <div style="font-weight:700;font-size:18px" class="float-left">Fare Details</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-md-12">
                                                            <div style="font-weight:400;font-size:14px" class="float-left">Amount</div>
                                                            <div style="font-weight:700;font-size:15px" class="float-right  Total_fare">0</div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2 ml-0 mr-0">
                                                        <div class="col-12 col-md-12 ml-0 mr-0">
                                                            <button type="button" class="btn btn-block btn-danger width-lg btn-sm ml-0 mr-0 processToBook" >PROCEED TO BOOK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end card-box-->
                                            <div class="card-box" style="display:none" >
                                                <ul class="nav nav-tabs nav-bordered nav-danger nav-justified">
                                                    <li class="nav-item active show">
                                                        <a href="#broadoint-b2-'.$str.'"  data-toggle="tab" aria-expanded="false" class="nav-link active show" style="font-size:16px;font-weight:600">
                                                            BOARDING
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#droppoint-b2-'.$str.'" data-toggle="tab" aria-expanded="true" class="nav-link" style="font-size:16px;font-weight:600">
                                                            DROPING
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active show" id="broadoint-b2-'.$str.'">
                                                        <div style="max-height:300px;overflow:auto;">';
                                                                $k=0;
                                                                foreach ($BoardPoint as $val) {
                                                                    $k++;
                                                                    $html.='
                                                                            <div class="row m-1 p-0">
                                                                                <div class="col-12 m-0 p-0">
                                                                                    <div class="radio radio-danger m-0 p-0">
                                                                                        <input type="radio" class="broadpoint" name="broadpoint" id="'.$k.'_'.$val->id.'"  value="'.$val->id.'">
                                                                                        <label for="'.$k.'_'.$val->id.'">
                                                                                        <div class="float-left" style="font-size:14px;font-weight:400;width:150px;" title="'. $val->address .' !" data-plugin="tippy" data-tippy-theme="success" data-tippy-arrow="true">'. $val->board_point .'</div>
                                                                                        <div class="float-right" style="margin-left:100px;font-size:16px;font-weight:600">'. date("g:i A",strtotime($val->pickup_time)) .'</div>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row m-0 p-0">
                                                                                <div class="col-12 col-md-12 m-0 p-0">
                                                                                    <hr style="border:0.5px solid #dcdcdc">
                                                                                </div>
                                                                            </div>
                                                                    ';

                                                                }

                                                        $html.='
                                                            </div>
                                                    </div>
                                                    <div class="tab-pane" id="droppoint-b2-'.$str.'">
                                                        <div style="max-height:300px;overflow:auto;">';
                                                        $k=50;
                                                        foreach ($DropPoint as $val) {
                                                            $k++;
                                                            $html.='
                                                                    <div class="row m-1 p-0">
                                                                        <div class="col-12 m-0 p-0">
                                                                            <div class="radio radio-danger m-0 p-0">
                                                                                <input type="radio" class="droppoint" name="droppoint" id="'.$k.'_'.$val->id.'"  value="'.$val->id.'">
                                                                                <label for="'.$k.'_'.$val->id.'">
                                                                                <div class="float-left" style="font-size:14px;font-weight:400;width:150px;" title="'. $val->address .' !" data-plugin="tippy" data-tippy-theme="success" data-tippy-arrow="true">'. $val->drop_point .'</div>
                                                                                <div class="float-right" style="margin-left:100px;font-size:16px;font-weight:600">'. date("g:i A",strtotime($val->drop_time)) .'</div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row m-0 p-0">
                                                                        <div class="col-12 col-md-12 m-0 p-0">
                                                                            <hr style="border:0.5px solid #dcdcdc">
                                                                        </div>
                                                                    </div>
                                                            ';

                                                        }

                                                    $html.='
                                                        </div>
                                                            <div class="row mt-3 ml-0 mr-0">
                                                                <div class="col-12 col-md-12 ml-0 mr-0">
                                                                    <button class="btn btn-block btn-danger width-lg btn-sm ml-0 mr-0 continue-to-book right-bar-toggle" onclick="return validate(this);" data-href="'. route($userurl) .'">CONTINUE TO BOOK</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                </div>
                            </div>';
                    }elseif($layout_type == "1 X 1")
                    {
                        $Alfa="A";
                        $No=1;
                            $html.='<div class="col-lg-3 col-md-3  col-sm-8 col-xs-8 p-1 ml-2">
                                    <span>Single Desk</span>
                                    <div class="card">
                                            <div class="card-header bg-secondary" style="height:0px;padding-top: 2px;padding-bottom: 2px;">
                                            </div>
                                        <div class="card-body p-0 mx-auto">';
                                            $total_seat=$total_seat / 2;
                                            $html.='<div class="row m-1">
                                                        <div class="col-9"></div>
                                                        <div class="col-2">
                                                            <img src='.$dirver.'>
                                                        </div>
                                                    </div>';
                                            if($seat_type == 1)
                                            {
                                                for($i=1; $i <=  $total_seat; $i++)
                                                {
                                                    $html.='<div class="row m-1">
                                                                <div class="col-4 ">
                                                                    <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                                <div class="col-4"></div>
                                                                <div class="col-4">
                                                                    <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                            </div>';
                                                }

                                                $html.='<div class="row m-2">';
                                                for ($i=1; $i <= $last_row_seat; $i++) {

                                                    $html.='<div class="col-3">
                                                                <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                // <div>'.$Alfa.$No.'</div>';
                                                                $No++;$Alfa++;
                                                        $html.='</div>';
                                                    }
                                                $html.='</div>';
                                            }

                                            if($seat_type == 2)
                                            {
                                                for($i=1; $i <=  $total_seat; $i++)
                                                {
                                                    $html.='<div class="row m-1">
                                                                <div class="col-4 ">
                                                                    <img src='.$sofa.' class="seat_img" id="sofa_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                                <div class="col-4"></div>
                                                                <div class="col-4">
                                                                    <img src='.$sofa.' class="seat_img" id="sofa_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                            </div>';
                                                }

                                                $html.='<div class="row m-2">';
                                                for ($i=1; $i <= $last_row_seat; $i++) {

                                                    $html.='<div class="col-3">
                                                                <img src='.$sofa.' class="seat_img" id="sofa_'.$Alfa.$No.'">
                                                                <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                // <div>'.$Alfa.$No.'</div>';
                                                                $No++;$Alfa++;
                                                        $html.='</div>';
                                                    }
                                                $html.='</div>';
                                            }

                                            if($seat_type == 3 )
                                            {
                                                for($i=1; $i <=  $total_seat; $i++)
                                                {
                                                    $html.='<div class="row m-1">
                                                                <div class="col-4 ">
                                                                    <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                                <div class="col-4"></div>
                                                                <div class="col-4">
                                                                    <img src='.$sofa.' class="seat_img" id="sofa_'.$Alfa.$No.'">
                                                                    <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                    // <div>'.$Alfa.$No.'</div>';
                                                                    $No++;$Alfa++;
                                                        $html.='</div>
                                                            </div>';
                                                }

                                                $html.='<div class="row m-2">';
                                                for ($i=1; $i <= $last_row_seat; $i++) {

                                                    $html.='<div class="col-3">
                                                                <img src='.$seat.' class="seat_img" id="seat_'.$Alfa.$No.'">
                                                                <input type="hidden" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                                                // <div>'.$Alfa.$No.'</div>';
                                                                $No++;$Alfa++;
                                                    $html.='</div>';
                                                    }
                                                $html.='</div>';
                                            }


                                $html.='</div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 ml-2 all-seat-details">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <img src='.$avlSeat.'>
                                            <span style="font-weight:200;font-size:10px">Avalible</span>
                                        </div>
                                        <div class="col-4 text-center">
                                            <img src='.$seleSeat.'>
                                            <span style="font-weight:200;font-size:10px">Selected</span>
                                        </div>
                                        <div class="col-4 text-center">
                                            <img src='.$bookSeat.'>
                                            <span style="font-weight:200;font-size:10px">Booked</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12  col-xs-12 mt-2 ml-2 " >
                                    <div class="row">
                                        <div class="col-md-12 fare-card">
                                            <div class="card  select-seat-fare-details select-seat-fare-details-active"  style="display:none">
                                                <div class="card-body" data-select2-id="9" >
                                                    <div class="row">
                                                        <div class="col-12 col-md-12 font-weight-bold  text-dark ">
                                                            <div style="font-size:16px"> Pickup & Drop off </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12 col-md-12">
                                                            <div style="font-weight:400;font-size:15px" class="float-left">'.$Bus->starting_point.'</div>
                                                            <div style="font-weight:700;font-size:15px" class="float-right">'. date("g:i A",strtotime($Bus->start_time)) .'</div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12 col-md-12 text-center mx-auto">
                                                            <img src="'.asset($url).'" alt="" width="40px" >
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-12 col-md-12">
                                                            <div style="font-weight:400;font-size:15px" class="float-left">'.$Bus->ending_point.'</div>
                                                            <div style="font-weight:700;font-size:15px" class="float-right">'.date("g:i A",strtotime($Bus->ending_time)).'</div>
                                                        </div>
                                                    </div>
                                                    <div class="row m-0 p-0">
                                                        <div class="col-12 col-md-12 m-0 p-0">
                                                            <hr style="border:0.5px solid #dcdcdc">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-md-12">
                                                            <div style="font-weight:700;font-size:18px" class="float-left">Seat No.</div>
                                                            <div style="font-weight:700;font-size:15px" class="float-right  select_seat_no">0</div>
                                                        </div>
                                                    </div>
                                                    <div class="row m-0 p-0">
                                                        <div class="col-12 col-md-12 m-0 p-0">
                                                            <hr style="border:0.5px solid #dcdcdc">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-md-12">
                                                            <div style="font-weight:700;font-size:18px" class="float-left">Fare Details</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-md-12">
                                                            <div style="font-weight:400;font-size:14px" class="float-left">Amount</div>
                                                            <div style="font-weight:700;font-size:15px" class="float-right  Total_fare">0</div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2 ml-0 mr-0">
                                                        <div class="col-12 col-md-12 ml-0 mr-0">
                                                            <button type="button" class="btn btn-block btn-danger width-lg btn-sm ml-0 mr-0 processToBook" >PROCEED TO BOOK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end card-box-->
                                            <div class="card-box" style="display:none">
                                                <ul class="nav nav-tabs nav-bordered nav-danger nav-justified">
                                                    <li class="nav-item active show">
                                                        <a href="#broadoint-b2-'.$str.'"  data-toggle="tab" aria-expanded="false" class="nav-link active show" style="font-size:16px;font-weight:600">
                                                            BOARDING
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#droppoint-b2-'.$str.'" data-toggle="tab" aria-expanded="true" class="nav-link" style="font-size:16px;font-weight:600">
                                                            DROPING
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active show" id="broadoint-b2-'.$str.'">
                                                        <div style="max-height:300px;overflow:auto;">';
                                                                $k=0;
                                                                foreach ($BoardPoint as $val) {
                                                                    $k++;
                                                                    $html.='
                                                                            <div class="row m-1 p-0">
                                                                                <div class="col-12 m-0 p-0">
                                                                                    <div class="radio radio-danger m-0 p-0">
                                                                                        <input type="radio" class="broadpoint" name="broadpoint" id="'.$k.'_'.$val->id.'"  value="'.$val->id.'">
                                                                                        <label for="'.$k.'_'.$val->id.'">
                                                                                        <div class="float-left" style="font-size:14px;font-weight:400;width:150px;" title="'. $val->address .' !" data-plugin="tippy" data-tippy-theme="success" data-tippy-arrow="true">'. $val->board_point .'</div>
                                                                                        <div class="float-right" style="margin-left:100px;font-size:16px;font-weight:600">'. date("g:i A",strtotime($val->pickup_time)) .'</div>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row m-0 p-0">
                                                                                <div class="col-12 col-md-12 m-0 p-0">
                                                                                    <hr style="border:0.5px solid #dcdcdc">
                                                                                </div>
                                                                            </div>
                                                                    ';

                                                                }

                                                        $html.='
                                                            </div>
                                                    </div>
                                                    <div class="tab-pane" id="droppoint-b2-'.$str.'">
                                                        <div style="max-height:300px;overflow:auto;">';
                                                        $k=50;
                                                        foreach ($DropPoint as $val) {
                                                            $k++;
                                                            $html.='
                                                                    <div class="row m-1 p-0">
                                                                        <div class="col-12 m-0 p-0">
                                                                            <div class="radio radio-danger m-0 p-0">
                                                                                <input type="radio" class="droppoint" name="droppoint" id="'.$k.'_'.$val->id.'"  value="'.$val->id.'">
                                                                                <label for="'.$k.'_'.$val->id.'">
                                                                                <div class="float-left" style="font-size:14px;font-weight:400;width:150px;" title="'. $val->address .' !" data-plugin="tippy" data-tippy-theme="success" data-tippy-arrow="true">'. $val->drop_point .'</div>
                                                                                <div class="float-right" style="margin-left:100px;font-size:16px;font-weight:600">'. date("g:i A",strtotime($val->drop_time)) .'</div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row m-0 p-0">
                                                                        <div class="col-12 col-md-12 m-0 p-0">
                                                                            <hr style="border:0.5px solid #dcdcdc">
                                                                        </div>
                                                                    </div>
                                                            ';

                                                        }

                                                    $html.='
                                                        </div>
                                                            <div class="row mt-3 ml-0 mr-0">
                                                                <div class="col-12 col-md-12 ml-0 mr-0">
                                                                    <button class="btn btn-block btn-danger width-lg btn-sm ml-0 mr-0 continue-to-book right-bar-toggle "  onclick="return validate(this);" data-href="'. route($userurl) .'">CONTINUE TO BOOK</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                </div>';
                    }
                $html.='</div>
            </td>';

                return $html;
        } catch (\Exception $e) {

            $html="Something Is Wrong";
            return $html;
        }

    }

    public function BroadDropPoint(Request $request)
    {
        try {

            $busId=$request->busid;
            $seatNo=$request->seatNo;
            $totalFare=$request->totalFare;

            $BoardPoint=BoardPoint::whereStatus(1)->whereBus_id($busId)->get();
            $DropPoint=DropPoint::whereStatus(1)->whereBus_id($busId)->get();
            $str=str_random(10);
            $userurl='web.user';
            $menus=Menu::whereStatus(1)->get();

            $nav=Array();
            $nav['BoardPoint']=$BoardPoint;
            $nav['DropPoint']=$DropPoint;
            $nav['seatNo']=$seatNo;
            $nav['userurl']=$userurl;
            $nav['Menus']=$menus;
            $nav['str']=$str;
            $nav['totalFare']=$totalFare;
            $nav['busId']=$busId;



            return view('web.search.minibrodedrop',$nav);

        } catch (\Throwable $th) {

            return redirect()->back();
        }




    }

    public function usercontect(Request $request)
    {
        $bus_id=$request->busid;
        $Droppoint=$request->broadpoint;
        $Broadpoint=$request->droppoint;
        $fareAmt=$request->totalFare;
        $SeatNos=$request->seatNo;
        $SeatNo=explode(',',$SeatNos);

        $bus=Bus::whereId($bus_id)->first();
        $dropPoint=DropPoint::whereId($Droppoint)->first();
        $boardPoint=BoardPoint::whereId($Broadpoint)->first();
        $Route=Route::whereId($dropPoint->route_id)->first();
        $Country=Country::select('id','phone_code','country_code')->get();
        $PromoCode=PromoCode::whereStatus(1)->get();
        $menus=Menu::whereStatus(1)->get();

        $nav=Array();

        $nav['bus']=$bus;
        $nav['dropPoint']=$dropPoint;
        $nav['boardPoint']=$boardPoint;
        $nav['fareAmt']=$fareAmt;
        $nav['SeatNo']=$SeatNo;
        $nav['SeatNos']=$SeatNos;

        $nav['Route']=$Route;
        $nav['Country']=$Country;
        $nav['Menus']=$menus;

        return view('web.search.miniuserdetail',$nav);

    }

}
