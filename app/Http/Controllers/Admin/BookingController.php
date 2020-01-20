<?php

namespace App\Http\Controllers\Admin;

use App\Model\Bus;
use App\Model\User;
use App\Model\Route;
use App\Model\Booking;
use App\Model\Customer;
use App\Model\DropPoint;
use App\Model\BoardPoint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('admin.booking-details.index',['Booking'=>$Booking]);
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
        //
    }

    public function add()
    {
        return view('admin.booking-details.create',['bus_list'=>Bus::select('id','bus_name','bus_reg_no')->get()]);
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
    public function destroy($id)
    {
        //
    }

    public function bookingroute(Request $request)
    {
        return Route::whereStatus(true)->whereBus_id($request->bus_id)->select('id','bus_id','board_point','drop_point')->get();
    }

    public function bookingboardpoint(Request $request)
    {
        return BoardPoint::where(['status'=>'1',"id"=>$request->route_id])->select('id','bus_id','board_point')->get();
    }
    public function bookingdroppoint(Request $request)
    {
        return DropPoint::where(['status'=>'1',"id"=>$request->route_id])->select('id','bus_id','drop_point')->get();
    }

}
