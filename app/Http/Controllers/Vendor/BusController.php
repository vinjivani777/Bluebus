<?php

namespace App\Http\Controllers\Vendor;

use App\Model\Bus;
use App\Model\Bustype;
use App\Model\Amenitie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BusController extends Controller
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
        $data['bus_list'] = Bus::with('Bus_Type')->where('vendor_id',$auth)->get();
        return  view('vendor.bus-mgn.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bus = array();
        $bus['amenities'] = Amenitie::whereStatus(true)->get();
        $bus['bus_type'] = Bustype::whereStatus(true)->get();
        return view('vendor.bus-mgn.create',$bus);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator= $request->validate([
            'bus_name' => 'required|min:2',
            'bus_type' => 'required',
            'bus_reg_no' => 'required|min:5',
            'max_seats' => 'required',
            'board_point' => 'required',
            'drop_point' => 'required',
            'board_time' => 'required',
            'drop_time' => 'required',
            'amenities' => 'required',
        ]);



        if($validator == false)
        {
            return "error in validtion";
        }else{
            $newbus= new Bus;
            $amenities =  implode(',', $request->amenities);
            $newbus->bus_name= $request->bus_name;
            $newbus->bus_type_id= $request->bus_type;
            $newbus->amenities_id= $amenities;
            $newbus->bus_reg_no= $request->bus_reg_no;
            $newbus->max_seats= $request->max_seats;
            $newbus->board_point= $request->board_point;
            $newbus->drop_point= $request->drop_point;
            $newbus->board_time= $request->board_time;
            $newbus->drop_time= $request->drop_time;
            $newbus->created_id= Auth::guard('vendor')->user()->id;
            $newbus->created_by= "vendor";
            $newbus->save();

            return redirect()->route('vendor.bus-detail');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bus = array();
        $bus['amenities'] = Amenitie::whereStatus(true)->get();
        $bus['bus_type'] = Bustype::whereStatus(true)->get();
        $bus['bus_detail'] = Bus::find($id);
        return view('vendor.bus-mgn.edit',$bus);
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
        $validator= $request->validate([
            'bus_name' => 'required|min:2',
            'bus_type' => 'required',
            'bus_reg_no' => 'required|min:5',
            'max_seats' => 'required',
            'board_point' => 'required',
            'drop_point' => 'required',
            'board_time' => 'required',
            'drop_time' => 'required',
            'amenities' => 'required',
        ]);


        if($validator == false)
        {
            return "error in validtion";
        }else{
            $newbus = Bus::findorfail($id);
            $amenities =  implode(',', $request->amenities);
            $newbus->bus_name= $request->bus_name;
            $newbus->bus_type_id= $request->bus_type;
            $newbus->amenities_id= $amenities;
            $newbus->bus_reg_no= $request->bus_reg_no;
            $newbus->max_seats= $request->max_seats;
            $newbus->board_point= $request->board_point;
            $newbus->drop_point= $request->drop_point;
            $newbus->board_time= $request->board_time;
            $newbus->drop_time= $request->drop_time;
            $newbus->created_id= Auth::guard('vendor')->user()->id;
            $newbus->created_by= "vendor";
            $newbus->save();

            return redirect()->route('vendor.bus-detail');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function busdestroy(request $request)
    {
        $newbus =  Bus::findorfail($request->id);
        $newbus->delete();

        if($newbus){
            return "success";
        }else{
            return "error";
        }
    }

    public function bustype()
    {
        $bustype= array();
        $bustype['data'] = Bustype::select()->get();
        return view('vendor.bus-mgn.bus-type.index',$bustype);
    }

    public function bustypeadd(request $request)
    {
        $validator= $request->validate([
            'bus_type' => 'required|min:2|max:20',
        ]);
        if($validator->fails()){
        return redirect()->back()->withErrors($validator);
        }
        $newtype= new Bustype;
        $newtype->type_name= $request->bus_type;
        $newtype->save();
        return redirect()->back();
    }

    public function bustypeedit($id)
    {
        $bustype = Bustype::findorfail($id);
        return view('vendor.bus-mgn.bus-type.edit',['bustype'=>$bustype]);
    }

    public function bustypeupdate(request $request,$id)
    {
        $validator= $request->validate([
            'bus_type' => 'required|min:2|max:20',
        ]);
        $newtype =  Bustype::findorfail($id);
        $newtype->type_name= $request->bus_type;
        $newtype->save();
        return redirect()->route('vendor.bus-type');
    }

    public function bustypedestroy(request $request)
    {
        $newtype =  Bustype::findorfail($request->id);
        $newtype->delete();

        if($newtype){
            return "success";
        }else{
            return "error";
        }
    }
}
