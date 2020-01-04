<?php

namespace App\Http\Controllers\Admin;

use App\Model\Bus;
use App\Model\BoardPoint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeatLayoutController extends Controller
{

    public function index()
    {
        $data = array();
        $data['board_list'] = BoardPoint::with('Bus_Name','Route_Name')->get();
        return view('admin.seat-layout.index',$data);
    }

    public function create()
    {
        $data = array();
        $data['bus_list'] = Bus::whereStatus(true)->select('id','bus_name', 'bus_reg_no')->get();
        return view('admin.seat-layout.create',$data);
    }

    public function view(Request $request)
    {
        $total_seat=$request->total_seat;
        $seat_type=$request->seat_type;
        $layout=$request->layout;
        $html="";
        $seat=asset('web/images/redbus/icon/4.png');

        if($seat_type == 1  )
        {
           for ($i=1; $i <=  $total_seat; $i++) {
            $html.='<div class="row m-2">';
                if($total_seat % 2==0){
                    $html.='<div class="col-1">
                                <img src='.$seat.'>
                            </div>
                            <div class="col-2"></div>';
                }else{
                    $html.='<div class="col-1">
                                <img src='.$seat.'>
                            </div>';
                }
                $html.='</div>';
           }
        return $html;
        }
    }
}
