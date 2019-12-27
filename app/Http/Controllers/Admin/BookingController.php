<?php

namespace App\Http\Controllers\Admin;

use App\Model\Booking;
use App\Model\User;
use App\Model\Customer;
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
}
