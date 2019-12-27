<?php

namespace App\Http\Controllers\Admin;

use App\Model\Bus;
use App\Model\Cancellation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CancellationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cancellation=Cancellation::with('bus')->get();
        return view('admin.cancellation.index',['Cancellation'=> $Cancellation]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bus=Bus::get();
        return view('admin.cancellation.create',['Bus'=>$bus]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'bus_name'=>'required',
            'cancel_time'=>'required',
            'percentage'=>'required',
            'flat'=>'required',
            'type'=>'required'
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $params=array();

        $params['bus_id']=$request->bus_name;
        $params['advertisement_status']=1;
        $params['cancel_time']=$request->cancel_time;
        $params['percentage']=$request->percentage;
        $params['flat']=$request->flat;
        $params['type']=$request->type;

        $Data_save=Cancellation::create($params);

        if($Data_save)
        {
            $Cancellation=Cancellation::with('bus')->get();
            return view('admin.cancellation.index',['Cancellation'=> $Cancellation]);
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
        $bus=Bus::get();
        $Cancellation=Cancellation::whereId($id)->first();
        return view('admin.cancellation.edit',['Bus'=>$bus,'Cancellation'=>$Cancellation]);
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
        $validator=Validator::make($request->all(),[
            'bus_name'=>'required',
            'cancel_time'=>'required',
            'percentage'=>'required',
            'flat'=>'required',
            'type'=>'required'
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $params=array();

        $params['bus_id']=$request->bus_name;
        $params['advertisement_status']=1;
        $params['cancel_time']=$request->cancel_time;
        $params['percentage']=$request->percentage;
        $params['flat']=$request->flat;
        $params['type']=$request->type;

        $Data_save=Cancellation::whereId($id)->update($params);

        if($Data_save)
        {
            $Cancellation=Cancellation::with('bus')->get();
            return view('admin.cancellation.index',['Cancellation'=> $Cancellation]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
         $Find=Cancellation::find($request->id);
        $Delete=$Find->delete();

        if($Delete)
        {
            return "Success";
        }else{
            return "error";
        }
    }
}
