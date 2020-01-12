<?php

namespace App\Http\Controllers\Web;

use App\Model\Route;
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

        return view('web.search.search');
    }
}
