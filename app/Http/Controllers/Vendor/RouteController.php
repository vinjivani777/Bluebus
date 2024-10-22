<?php

namespace App\Http\Controllers\Vendor;

use App\Model\Bus;
use App\Model\City;
use App\Model\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RouteController extends Controller
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
        $data['route_list'] = Route::get();
        return view('vendor.route.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $auth=Auth::guard('vendor')->user()->id;
        $data = array();
        $data['cities'] = City::whereStatus(true)->select('id','city_name')->get();
        return view('vendor.route.create',$data);
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
            'from_place' => 'required',
            'to_place' => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }
        $newbus= new Route;
        $from_place=$request->from_place;
        $to_place=$request->to_place;
        $newbus->source_point=$from_place ;
        $newbus->destination_point= $to_place;
        $newbus->source_name= (City::whereId($from_place)->select('city_name')->first())->city_name;
        $newbus->destination_name= (City::whereId($to_place)->select('city_name')->first())->city_name;
        $newbus->status=1;
        $newbus->save();

        return redirect()->route('vendor.route-detail');
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
        // $auth=Auth::guard('vendor')->user()->id;
        $route = array();
        $route['cities'] = City::whereStatus(true)->select('id','city_name')->get();
        $route['route_detail'] = Route::find($id);
        return view('vendor.route.edit',$route);
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
            'from_place' => 'required',
            'to_place' => 'required',
        ]);

        if($validator->fails())
        {
            return "error in validtion";
        }
        $newbus= Route::findorfail($id);
        $from_place=$request->from_place;
        $to_place=$request->to_place;
        $newbus->source_point=$from_place ;
        $newbus->destination_point= $to_place;
        $newbus->source_name= (City::whereId($from_place)->select('city_name')->first())->city_name;
        $newbus->destination_name= (City::whereId($to_place)->select('city_name')->first())->city_name;
        $newbus->status=1;
        $newbus->save();
        return redirect()->route('vendor.route-detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function routedestroy(Request $request)
    {
        $newroute =  Route::findorfail($request->id);
        $newroute->delete();

        if($newroute){
            return "success";
        }else{
            return "error";
        }
    }

    public function busroute(Request $request)
    {
        $Total_route_id=DB::table('bustoroutes')
        ->select('route_id', DB::raw('count(*) as total'))
        ->groupBy('route_id')->wherebus_id($request->bus_id)
        ->pluck('route_id')->all();

        $data = Route::whereStatus(true)->whereIn('id',$Total_route_id)->select('id','source_name','destination_name')->get();
        return $data;
    }

    public function busrouteforboardpoint(Request $request)
    {
        $Total_route_id=DB::table('bustoroutes')
        ->select('route_id', DB::raw('count(*) as total'))
        ->groupBy('route_id')->wherebus_id($request->bus_id)
        ->pluck('route_id')->all();

        $data = Route::whereStatus(true)->whereIn('id',$Total_route_id)->select('id','source_name','destination_name')->get();
        return $data;
    }

    public function busroutefordroppoint(Request $request)
    {
        $Total_route_id=DB::table('bustoroutes')
        ->select('route_id', DB::raw('count(*) as total'))
        ->groupBy('route_id')->wherebus_id($request->bus_id)
        ->pluck('route_id')->all();

        $data = Route::whereStatus(true)->whereIn('id',$Total_route_id)->select('id','source_name','destination_name')->get();
        return $data;
    }
}
