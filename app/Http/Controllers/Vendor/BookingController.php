<?php

namespace App\Http\Controllers\Vendor;

use App\Model\Bus;
use App\Model\User;
use App\Model\Route;
use App\Model\Booking;
use App\Model\Customer;
use App\Model\DropPoint;
use App\Model\BoardPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Booking=Booking::with('bus')->get();
        // dd($Booking);
        return view('vendor.booking-details.index',['Booking'=>$Booking]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return date("d-m-Y");
        $validator= $request->validate([
            'bus_name' => 'required',
            'route_name' => 'required',
            'starting_point' => 'required',
            'stoping_point' => 'required',
            'amount' => 'required|numeric',
            'paymentstatus' => 'required',
            'seatno' => 'required|numeric',
        ]);

            // return $validator;

        if($validator == false)
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
            $newbus= new Booking;
            $newbus->booking_id= '#'.rand(10000,99999);
            $newbus->amount= $request->amount;
            $newbus->bus_id= $request->bus_name;
            $newbus->route_id= $request->route_name;
            $newbus->boarding_point_id= $request->starting_point;
            $newbus->drop_point_id= $request->stoping_point;
            $newbus->user_id= Auth::guard('vendor')->user()->id;
            $newbus->seat_no= $request->seatno;
            $newbus->payment_status= 1;
            $newbus->payment_option= $request->paymentstatus;
            $newbus->booking_date= date("d-m-Y");
            $newbus->status= "1";
            $newbus->created_by= "vendor";
            // return $newbus;
            $data = $newbus->save();
            if($data)
            {
                return redirect()->route('booking-detail');
            }
            else{
                return redirect()->back()->withErrors($validator)->withInput($request->all())->withStatus('Something Went Wrong.');
            }
        }
    }

    public function add()
    {
        return view('vendor.booking-details.create',['bus_list'=>Bus::select('id','bus_name','bus_reg_no')->get()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request )
    {
        $id=$request->id;

        $cust_book=Customer::whereBooking_id($id)->get();

        $html="";
    foreach ($cust_book as  $value) {
        $html= '<tr>
                <td>'. $value->customer_name .'</td>
                <td>'. $value->age .'</td>
                <td>'. $value->gender .'</td>
                <td>'. $value->seat_no .'</td>
            </tr>';
        }

       return  $html;



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $removebooking =  Booking::findorfail($request->id);
        $removebooking->delete();

        if($removebooking){
            return "success";
        }else{
            return "error";
        }
    }

    public function bookingroute(Request $request)
    {
        return Route::whereStatus(true)->select('id','source_name','destination_name')->get();
    }
    public function bustotalfare(Request $request)
    {
        $data= (Bus::whereId($request->bus_id)->select('total_fare','start_time')->first());
        return  $data;
    }
    public function bookingroutetocancel(Request $request)
    {
        // $routes= (Bus::where('id',$request->bus_id)->select('route_id')->first())->route_id;
        $Total_route_id=DB::table('bustoroutes')
        ->select('route_id', DB::raw('count(*) as total'))
        ->groupBy('route_id')->wherebus_id($request->bus_id)
        ->pluck('route_id')->all();

        //  $Total_route_id= Bus::whereId($request->bus_id)->select('route_id')->get();
        $data = Route::whereStatus(true)->whereIn('id',$Total_route_id)->select('id','source_name','destination_name')->get();
        // return $routes;
        // foreach ($routes as $id) {
        //     $data = Route::whereStatus(true)->where('id',$id)->select('id','source_name','destination_name')->get();
        // }

        return $data;
    }

    public function bookingboardpoint(Request $request)
    {
        return BoardPoint::where(['status'=>'1',"bus_id"=>$request->bus_id,"route_id"=>$request->route_id])->select('id','bus_id','pickup_point')->get();
    }
    public function bookingdroppoint(Request $request)
    {
        return DropPoint::where(['status'=>'1',"bus_id"=>$request->bus_id,"route_id"=>$request->route_id])->select('id','bus_id','stoping_point')->get();
    }
    public function bookingboardpointdetails(Request $request)
    {
        return BoardPoint::where(["id"=>$request->starting_point_id])->select('address','landmark')->get()->first();
    }
    public function bookingdroppointdetails(Request $request)
    {
        return DropPoint::where(["id"=>$request->stoping_point_id])->select('address','landmark')->get()->first();
    }

}
