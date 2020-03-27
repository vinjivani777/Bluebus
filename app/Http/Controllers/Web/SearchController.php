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

class SearchController extends Controller
{
    public function source(Request $request)
    {

        $result = City::select("city_name")
                ->where("city_name","LIKE","%{$request->input('term')}%")
                ->get();

        return response()->json($result);

    //      $search=$request->get('Source');


    //    $result = Route::where('board_point', 'LIKE', '%'. $search. '%')->get();

    //      if($result == '')
    //      {
    //         $output = '<ul class="dropdown-menu" style="display:none;position:absolute;z-index:10;overflow:auto;height:150px;">';
    //         $output .= '<li><a href="#"> So Sorry !</a></li>';
    //         $output .= '</ul>';
    //         return  $output;
    //      }else{
    //         $output = '<ul class="dropdown-menu" style="display:block;position:absolute;z-index:10;overflow:auto;height:150px;">';
    //         foreach($result as $row)
    //         {
    //             $output .= '<li class="source_select"><a>'.$row->board_point.'</a></li>';
    //         }
    //         $output .= '</ul>';
    //         return  $output;
    //      }


    }

    public function dest(Request $request)
    {

        $result = City::select("city_name")
                ->where("city_name","LIKE","%{$request->input('term')}%")
                ->get();

        return response()->json($result);

    //      $search=$request->get('Destnation');


    //    $result = Route::where('drop_point', 'LIKE', '%'. $search. '%')->get();

    //      if($result == '')
    //      {
    //         $output = '<ul class="dropdown-menu" style="display:none;position:absolute;z-index:10;overflow:auto;height:150px;">';
    //         $output .= '<li><a href="#"> So Sorry !</a></li>';
    //         $output .= '</ul>';
    //         return  $output;
    //      }else{
    //         $output = '<ul class="dropdown-menu" style="display:block;position:absolute;z-index:10;overflow:auto;height:150px;">';
    //         foreach($result as $row)
    //         {
    //             $output .= '<li class="dest_select"><a>'.$row->drop_point.'</a></li>';
    //         }
    //         $output .= '</ul>';
    //         return  $output;
    //      }


    }

    public function search(Request $request)
    {
        $source=$request->source_place;
        $dest=$request->destination_place;
        $route_id=Route::select('id')->where(['status'=>'1','source_name'=>$source,'destination_name'=>$dest])->first();
        // $Total_route_id=Bustoroute::select('bus_id')->whereRoute_id($route_id->id)->get();
        $Total_route_id=DB::table('bustoroutes')
        ->select('bus_id', DB::raw('count(*) as total'))
        ->groupBy('bus_id')->whereRoute_id($route_id->id)
        ->pluck('bus_id')->all();


        $Total_bus=Bus::whereIn('id',$Total_route_id)->get();
        $aminaties=Amenitie::whereStatus(1)->get();


        $params=array();
        $params['source']=$source;
        $params['dest']=$dest;
        $params['aminaties']=$aminaties;
        $params['total_bus']=$Total_bus;
        return view('web.search.search',$params);
    }
}
