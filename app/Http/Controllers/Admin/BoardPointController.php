<?php

namespace App\Http\Controllers\Admin;

use App\Model\Bus;
use App\Model\Route;
use App\Model\BoardPoint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BoardPointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $data['board_list'] = BoardPoint::with('Bus_Name','Route_Name')->get();
        return view('admin.board-point.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        $data['bus_list'] = Bus::whereStatus(true)->select('id','bus_name', 'bus_reg_no')->get();
        return view('admin.board-point.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(),[
            'bus_name' => 'required|numeric|min:0|not_in:0',
            'route_id' => 'required|numeric|min:0|not_in:0',
            'board_point' => 'required|min:3',
            'board_point_position' => 'required',
            'next_time' => 'required',
            'board_time' => 'required|after:next_time',
            'landmark' => 'required|min:3',
            'address' => 'required|min:3'
        ]);
            // dd($validator->fails());
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $boardpoint= new BoardPoint;
        $boardpoint->bus_id= $request->bus_name;
        $boardpoint->route_id= $request->route_id;
        $boardpoint->board_point= $request->board_point;
        $boardpoint->board_point_position= (1+($request->board_point_position));
        $boardpoint->pickup_time= $request->board_time;
        $boardpoint->landmark= $request->landmark;
        $boardpoint->address= $request->address;
        $boardpoint->status= 1;
        // return $boardpoint;
        $boardpoint->save();
        return redirect()->route('board-point');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array();
        $data['bus_list'] = Bus::whereStatus(true)->select('id','bus_name', 'bus_reg_no')->get();
        $data['board_point'] = BoardPoint::findorfail($id);
        $data['route_list'] = Route::get();
        // return $data;
        return view('admin.board-point.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'bus_name' => 'required|numeric|min:0|not_in:0',
            'route_id' => 'required|numeric|min:0|not_in:0',
            'board_point' => 'required|min:3',
            'board_point_position' => 'required',
            // 'next_time' => 'required',
            'board_time' => 'required|after:next_time',
            'landmark' => 'required|min:3',
            'address' => 'required|min:3'
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $boardpoint= BoardPoint::findorfail($id);
        $boardpoint->bus_id= $request->bus_name;
        $boardpoint->route_id= $request->route_id;
        $boardpoint->board_point= $request->board_point;
        $boardpoint->board_point_position= (1+($request->board_point_position));
        $boardpoint->pickup_time= $request->board_time;
        $boardpoint->landmark= $request->landmark;
        $boardpoint->address= $request->address;
        $boardpoint->status= 1;
        // return $boardpoint;
        $boardpoint->save();

        return redirect()->route('board-point');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function boarddestroy(Request $request)
    {
        $newboard =  BoardPoint::findorfail($request->id);
        $newboard->delete();

        if($newboard){
            return "success";
        }else{
            return "error";
        }
    }

    public function turndetail(Request $request)
    {
        return $newboard =  BoardPoint::whereBus_id($request->bus_id)->whereRoute_id($request->route_id)->orderBy('pickup_time', 'DESC')->first();
        // $newboard->delete();

        if($newboard){
            return "success";
        }else{
            return "error";
        }
    }

    public function oldturndetail(Request $request)
    {
        return $newboard =  BoardPoint::whereBus_id($request->bus_id)->whereRoute_id($request->route_id)->whereBoard_point_position((--$request->position))->first();
        // $newboard->delete();

        if($newboard){
            return "success";
        }else{
            return "error";
        }
    }

}
