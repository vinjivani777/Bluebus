<?php

namespace App\Http\Controllers\Admin;
use App\Model\Bus;
use App\Model\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $data = array();
        $data['route_list'] = Route::with('Bus_Name')->get();
        return view('admin.route.index',$data);
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
        return view('admin.route.create',$data);
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
            'fare' => 'required|numeric|min:0|not_in:0',
            'board_point' => 'required|min:3',
            'drop_point' => 'required|min:3',
            'board_time' => 'required',
            'drop_time' => 'required'
        ]);

        if($validator->fails())
        {
            dd($validator);
        }else{
            $newbus= new Route;
            $newbus->bus_id= $request->bus_name;
            $newbus->fare= $request->fare;
            $newbus->board_point= $request->board_point;
            $newbus->drop_point= $request->drop_point;
            $newbus->board_time= $request->board_time;
            $newbus->drop_time= $request->drop_time;
            $newbus->created_by= "admin";
            $newbus->save();

            return redirect()->route('route-detail');
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
        $route = array();
        $route['bus_list'] = Bus::whereStatus(true)->select('id','bus_name', 'bus_reg_no')->get();
        $route['route_detail'] = Route::find($id);
        return view('admin.route.edit',$route);
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
            'fare' => 'required|numeric|min:0|not_in:0',
            'board_point' => 'required|min:3',
            'drop_point' => 'required|min:3',
            'board_time' => 'required',
            'drop_time' => 'required'
        ]);

        if($validator->fails())
        {
            return "error in validtion";
        }else{
            $newbus= Route::findorfail($id);
            $newbus->bus_id= $request->bus_name;
            $newbus->fare= $request->fare;
            $newbus->board_point= $request->board_point;
            $newbus->drop_point= $request->drop_point;
            $newbus->board_time= $request->board_time;
            $newbus->drop_time= $request->drop_time;
            $newbus->created_by= "admin";
            $newbus->save();

            return redirect()->route('route-detail');
        }
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
        return Route::whereStatus(true)->whereBus_id($request->bus_id)->select('id','board_point','drop_point')->get();
    }
}
