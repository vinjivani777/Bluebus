<?php

namespace App\Http\Controllers\Vendor;

use App\Model\Bus;
use App\Model\BoardPoint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        $auth=Auth::guard('vendor')->user()->id;
        $data = array();
        $data['board_list'] = BoardPoint::with('Bus_Name','Route_Name')->where(['created_id'=>$auth,'created_by'=>'vendor'])->get();
        return view('vendor.board-point.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auth=Auth::guard('vendor')->user()->id;

        $data = array();
        $data['bus_list'] = Bus::whereStatus(true)->select('id','bus_name', 'bus_reg_no')->where(['created_id'=>$auth,'created_by'=>'vendor'])->get();
        return view('vendor.board-point.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'bus_name' => 'required|numeric|min:0|not_in:0',
            'route_id' => 'required|numeric|min:0|not_in:0',
            'board_point' => 'required|min:3',
            'landmark' => 'required|min:3',
            'board_time' => 'required',
            'landmark' => 'required|min:3',
            'address' => 'required|min:3'
        ]);

        if($validator->fails())
        {
            return "error in validtion";
        }else{
            $droppoint= new BoardPoint;
            $droppoint->bus_id= $request->bus_name;
            $droppoint->board_point= $request->route_id;
            $droppoint->pickup_point= $request->board_point;
            $droppoint->pickup_time= $request->board_time;
            $droppoint->landmark= $request->landmark;
            $droppoint->address= $request->address;
            $droppoint->created_id=Auth::guard('vendor')->user()->id;
            $droppoint->created_by="vendor";
            $droppoint->save();

            return redirect()->route('vendor.board-point');
        }
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
        $auth=Auth::guard('vendor')->user()->id;
        $data = array();
        $data['bus_list'] = Bus::whereStatus(true)->select('id','bus_name', 'bus_reg_no')->where(['created_id'=>$auth,'created_by'=>'vendor'])->get();
        $data['board_point'] = BoardPoint::findorfail($id);
        return view('vendor.board-point.edit',$data);
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
            'landmark' => 'required|min:3',
            'board_time' => 'required',
            'landmark' => 'required|min:3',
            'address' => 'required|min:3'
        ]);

        if($validator->fails())
        {
            return "error in validtion";
        }else{
            $droppoint= BoardPoint::findorfail($id);
            $droppoint->bus_id= $request->bus_name;
            $droppoint->board_point= $request->route_id;
            $droppoint->pickup_point= $request->board_point;
            $droppoint->pickup_time= $request->board_time;
            $droppoint->landmark= $request->landmark;
            $droppoint->address= $request->address;
            $droppoint->created_id=Auth::guard('vendor')->user()->id;
            $droppoint->created_by="vendor";
            $droppoint->save();

            return redirect()->route('vendor.board-point');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function boarddestory(Request $request)
    {
        $newboard =  BoardPoint::findorfail($request->id);
        $newboard->delete();

        if($newboard){
            return "success";
        }else{
            return "error";
        }
    }
}
