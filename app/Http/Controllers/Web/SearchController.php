<?php

namespace App\Http\Controllers\Web;

use App\Model\Bus;
use App\Model\City;
use App\Model\Route;
use App\Model\Amenitie;
use App\Model\Bustoroute;
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
                ->take(100)
                ->get();

        return response()->json($result);

    }

    public function dest(Request $request)
    {

        $result = City::select("city_name")
                ->where("city_name","LIKE","%{$request->input('term')}%")
                ->take(100)
                ->get();

        return response()->json($result);

    }

    public function search(Request $request)
    {
        $source=$request->source_place;
        $dest=$request->destination_place;
        $jdate=$request->journey_date;
        //  Bus::select('Dates')->first();
        $route_id=Route::select('id')->where(['status'=>'1','source_name'=>$source,'destination_name'=>$dest])->first();
        if($route_id==""){
            $params=array();
            $params['result']="NoBus";
            $params['total_bus']=0;
            $params['source']=$source;
            $params['dest']=$dest;
            // return $params;
            return view('web.search.search',$params);
        }else{

        // $Total_route_id=Bustoroute::select('bus_id')->whereRoute_id($route_id->id)->get();
            $Total_route_id=DB::table('bustoroutes')
                                ->select('bus_id', DB::raw('count(*) as total'))
                                ->groupBy('bus_id')->whereRoute_id($route_id->id)
                                ->pluck('bus_id')->all();
            $Total_bus=Bus::with('Bus_Type')->whereIn('id',$Total_route_id)->get();
            // $data=array();
            // return $Total_bus[1]->amenities_id;
            foreach($Total_bus as $bus)
            {
                return $amenities[]=explode(",",$bus->amenities_id);
                foreach($amenities as $amenitie)
                {
                    $path[$bus->id]=(Amenitie::whereId($amenitie)->select('image_path')->first());
                }
            }
            return $path;
            $params=array();
            $params['result']="BusAreHere";
            $params['source']=$source;
            $params['dest']=$dest;
            $params['aminaties']=$path;
            $params['total_bus']=$Total_bus;
            return view('web.search.search',$params);
        }
    }
}
