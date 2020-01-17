<?php

namespace App\Http\Controllers\Web;

use App\Model\Route;
use App\Model\Amenitie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function source(Request $request)
    {
         $search=$request->get('Source');


       $result = Route::where('board_point', 'LIKE', '%'. $search. '%')->get();

         if($result == '')
         {
            $output = '<ul class="dropdown-menu" style="display:none;position:absolute;z-index:10;overflow:auto;height:150px;">';
            $output .= '<li><a href="#"> So Sorry !</a></li>';
            $output .= '</ul>';
            return  $output;
         }else{
            $output = '<ul class="dropdown-menu" style="display:block;position:absolute;z-index:10;overflow:auto;height:150px;">';
            foreach($result as $row)
            {
                $output .= '<li class="source_select"><a>'.$row->board_point.'</a></li>';
            }
            $output .= '</ul>';
            return  $output;
         }


    }

    public function dest(Request $request)
    {
         $search=$request->get('Destnation');


       $result = Route::where('drop_point', 'LIKE', '%'. $search. '%')->get();

         if($result == '')
         {
            $output = '<ul class="dropdown-menu" style="display:none;position:absolute;z-index:10;overflow:auto;height:150px;">';
            $output .= '<li><a href="#"> So Sorry !</a></li>';
            $output .= '</ul>';
            return  $output;
         }else{
            $output = '<ul class="dropdown-menu" style="display:block;position:absolute;z-index:10;overflow:auto;height:150px;">';
            foreach($result as $row)
            {
                $output .= '<li class="dest_select"><a>'.$row->drop_point.'</a></li>';
            }
            $output .= '</ul>';
            return  $output;
         }


    }

    public function search(Request $request)
    {
        $source=$request->source_palace;
        $dest=$request->destination_palace;
        $total_bus=Route::with('Bus_Name')->where(['status'=>'1','board_point'=>$source,'drop_point'=>$dest])->get();

        $aminaties=Amenitie::whereStatus(1)->get();


        $params=array();
        $params['source']=$source;
        $params['dest']=$dest;
        $params['aminaties']=$aminaties;
        $params['total_bus']=$total_bus;
        return view('web.search.search',$params);
    }
}
