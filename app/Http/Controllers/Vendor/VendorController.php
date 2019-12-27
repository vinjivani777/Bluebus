<?php

namespace App\Http\Controllers\Vendor;

use App\Model\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor.index');
    }

    public function login()
    {
        return view('vendor.login');
    }

    public function register()
    {
        return view('vendor.register');
    }

    public function registervendor(request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:20',
            'firstname' => 'required',
            'lastname' => 'required',
            'email'   => 'required|email',
            'phone_number'  =>  'required|min:10|max:10',
            'password'  =>  'required',
            'confirmpassword'  =>  'required|same:password',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();

        }

        $data = new Vendor;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->first_name = $request->firstname;
        $data->last_name= $request->lastname;
        $data->email = $request->email;
        $data->phone_number = $request->phone_number;
        $data->company_name = "";
        $data->profile_picture = "vendor\images\admin-profile\admin_KZsCR.jpg";
        $data->logo = "vendor\images\products\product-1.jpg";
        $data->address = "";
        $data->city = "";
        $data->state = "";
        $data->status = "Inactive";
        $data->save();
        return view('vendor.index');
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
