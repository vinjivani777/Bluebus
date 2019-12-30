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
}
