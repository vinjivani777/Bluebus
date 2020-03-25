<?php

namespace App\Http\Controllers\Vendor;

use App\Model\Bus;
use App\Model\Cancellation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        $total_bus_id=Bus::whereVendor_id((Auth::guard('vendor')->user()->id))->whereStatus(1)->select('id')->get();
        $Cancellation=Cancellation::with('bus')->whereIn('bus_id',$total_bus_id)->get();
        return view('vendor.cancellation.index',['Cancellation'=> $Cancellation]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return $total_bus_id=(Bus::where('vendor_id',(Auth::guard('vendor')->user()->id))->select('id')->get());
        $bus=Bus::where('vendor_id',(Auth::guard('vendor')->user()->id))->whereStatus(1)->get();
        return view('vendor.cancellation.create',['Bus'=>$bus]);
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
            'cancellation_time'=>'required',
            'cancellation_date'=>'required',
            'refund_amount'=>'required',
            'route_name'=>'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $params=array();

        $params['bus_id']=$request->bus_name;
        $params['route_id']=$request->route_name;
        $params['cancellation_date']=(date('Y-m-d',(strtotime($request->cancellation_date))));
        $params['cancellation_time']=(date('H:i:s',(strtotime($request->cancellation_time))));
        $params['note']="";
        $params['compensation_amount']=0;
        $params['refund_amount']=$request->refund_amount;
        $Data_save=Cancellation::create($params);

        if($Data_save)
        {
            $Cancellation=Cancellation::with('bus')->get();
            return view('vendor.cancellation.index',['Cancellation'=> $Cancellation]);
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
        $bus=Bus::where('vendor_id',(Auth::guard('vendor')->user()->id))->whereStatus(1)->get();
        $Cancellation=Cancellation::whereId($id)->first();
        return view('vendor.cancellation.edit',['Bus'=>$bus,'Cancellation'=>$Cancellation]);
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
            'cancellation_time'=>'required',
            'cancellation_date'=>'required',
            'refund_amount'=>'required',
            'route_name'=>'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $params=array();

        $params['bus_id']=$request->bus_name;
        $params['route_id']=$request->route_name;
        $params['cancellation_date']=(date('Y-m-d',(strtotime($request->cancellation_date))));
        $params['cancellation_time']=(date('H:i:s',(strtotime($request->cancellation_time))));
        $params['note']="";
        $params['compensation_amount']=0;
        $params['refund_amount']=$request->refund_amount;
        $Data_save=Cancellation::whereId($id)->update($params);


        if($Data_save)
        {
            $Cancellation=Cancellation::with('bus')->get();
            return view('vendor.cancellation.index',['Cancellation'=> $Cancellation]);
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

    public function busdates(Request $request)
    {
        $dates=Bus::whereId($request->bus_id)->select('dates')->first();
        return $dates->dates;
    }
}
