<?php

namespace App\Http\Controllers\Vendor;

use App\Model\Bus;
use App\Model\DropPoint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DropPointController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $data['drop_list'] = DropPoint::with('Bus_Name','Route_Name')->get();
        return view('vendor.drop-point.index',$data);
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
        $data['bus_list'] = Bus::whereStatus(true)->select('id','bus_name', 'bus_reg_no')->where(['created_id'=>$auth])->get();
        return view('vendor.drop-point.create',$data);
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
            'drop_point' => 'required|min:3',
            'drop_point_position' => 'required',
            'next_time' => 'required',
            'drop_time' => 'required|after:next_time',
            'landmark' => 'required|min:3',
            'address' => 'required|min:3'
        ]);

        // dd($validator->fails());
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $droppoint= new DropPoint;
        $droppoint->bus_id= $request->bus_name;
        $droppoint->route_id= $request->route_id;
        $droppoint->drop_point= $request->drop_point;
        $droppoint->drop_point_position= (1+($request->drop_point_position));
        $droppoint->drop_time= $request->drop_time;
        $droppoint->landmark= $request->landmark;
        $droppoint->address= $request->address;
        $droppoint->status= 1;
        // return $droppoint;
        $droppoint->save();

        return redirect()->route('vendor.drop-point');
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
        $data['bus_list'] = Bus::select('id','bus_name', 'bus_reg_no')->where(['created_id'=>$auth,'created_by'=>'vendor','status'=>true])->get();
        $data['drop_point'] = DropPoint::findorfail($id);
        return view('vendor.drop-point.edit',$data);
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
            'stoping_point' => 'required|min:3',
            'landmark' => 'required|min:3',
            'drop_time' => 'required',
            'landmark' => 'required|min:3',
            'address' => 'required|min:3'
        ]);

        if($validator->fails())
        {
            return "error in validtion";
        }else{
            $droppoint= DropPoint::findorfail($id);
            $droppoint->bus_id= $request->bus_name;
            $droppoint->drop_point= $request->route_id;
            $droppoint->stoping_point= $request->stoping_point;
            $droppoint->drop_time= $request->drop_time;
            $droppoint->landmark= $request->landmark;
            $droppoint->address= $request->address;
            $droppoint->created_id=Auth::guard('vendor')->user()->id;
            $droppoint->created_by="vendor";
            $droppoint->save();

            return redirect()->route('vendor.drop-point');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dropdestroy(Request $request)
    {
        $newdrop =  DropPoint::findorfail($request->id);
        $newdrop->delete();

        if($newdrop){
            return "success";
        }else{
            return "error";
        }
    }

    public function turndetail(Request $request)
    {
        return $newdrop =  DropPoint::whereBus_id($request->bus_id)->whereRoute_id($request->route_id)->orderBy('drop_time', 'DESC')->first();
        // $newdrop->delete();

        if($newdrop){
            return "success";
        }else{
            return "error";
        }
    }

    public function oldturndetail(Request $request)
    {
        return $newdrop =  DropPoint::whereBus_id($request->bus_id)->whereRoute_id($request->route_id)->wheredrop_point_position((--$request->position))->first();
        // $newdrop->delete();

        if($newdrop){
            return "success";
        }else{
            return "error";
        }
    }
}
