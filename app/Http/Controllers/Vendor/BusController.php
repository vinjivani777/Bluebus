<?php

namespace App\Http\Controllers\Vendor;

use App\Model\Bus;
use App\Model\Route;
use App\Model\Bustype;
use App\Model\Amenitie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        $bus['route'] = Route::with('Source','Destination')->whereStatus(true)->get();
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
            'bus_name'      => 'required|min:2',
            'bus_type'      => 'required',
            'bus_reg_no'    => 'required|min:5',
            'route'         => 'required|exists:routes,id',
            'max_seats'     => 'required',
            'board_point'   => 'required',
            'drop_point'    => 'required',
            'board_time'    => 'required',
            'drop_time'     => 'required',
            'amenities'     => 'required',
            'dates'         => 'required',
            'total_fare'         => 'required',
        ]);



        if($validator == false)
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $newbus= Array();
        $amenities =  implode(',', $request->amenities);
        $routes =  implode(',', $request->route);
        $newbus['bus_name']= $request->bus_name;
        $newbus['route_id']=$routes;
        $newbus['bus_type_id']= $request->bus_type;
        $newbus['amenities_id']= $amenities;
        $newbus['bus_reg_no']= strtoupper($request->bus_reg_no) ;
        $newbus['starting_point']= $request->board_point;
        $newbus['ending_point']= $request->drop_point;
        $newbus['start_time']= $request->board_time;
        $newbus['ending_time']= $request->drop_time;
        $newbus['max_seats']= $request->max_seats;
        $newbus['status']= "0";
        $newbus['vendor_id']= Auth::guard('vendor')->user()->id;
        $newbus['dates']=$request->dates;
        $newbus['total_fare']=$request->total_fare;
        $newbus['created_by']= "vendor";
        $newbus['created_id']= Auth::guard('vendor')->user()->id;
        // return $newbus;
        $Bus=Bus::create($newbus);

            $BusToRoute=Array();

            foreach ($request->route as $val) {

                $BusToRoute['bus_id']=$Bus->id;
                $BusToRoute['route_id']=$val;

                $BTR=Bustoroute::create($BusToRoute);

            }
        return redirect()->route('vendor.bus-detail');
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
        $bus['routes'] = Route::with('Source','Destination')->whereStatus(true)->get();
        // $bus['vendor'] = Vendor::whereStatus(true)->get();
        $bus['bus'] = Bus::whereId($id)->first();
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
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $newbus= Bus::findorfail($id);
        $amenities =  implode(',', $request->amenities);
        $routes =  implode(',', $request->route);
        $newbus['bus_name']= $request->bus_name;
        $newbus['route_id']=$routes;
        $newbus['bus_type_id']= $request->bus_type;
        $newbus['amenities_id']= $amenities;
        $newbus['bus_reg_no']= strtoupper($request->bus_reg_no) ;
        $newbus['starting_point']= $request->board_point;
        $newbus['ending_point']= $request->drop_point;
        $newbus['start_time']= $request->board_time;
        $newbus['ending_time']= $request->drop_time;
        $newbus['max_seats']= $request->max_seats;
        $newbus['status']= "0";
        $newbus['vendor_id']= Auth::guard('vendor')->user()->id;
        $newbus['dates']=$request->dates;
        $newbus['total_fare']=$request->total_fare;
        $newbus['created_by']= "vendor";
        $newbus['created_id']= Auth::guard('vendor')->user()->id;
        // return $newbus;
        $newbus->save();

        return redirect()->route('vendor.bus-detail');
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
        // dd($validator);
        if(!($validator))
        {
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
