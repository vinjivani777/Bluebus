<?php

namespace App\Http\Controllers\Admin;
use App\Model\Vendor;
use App\Model\UserRole;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class VendorContrller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Vendor::select()->get();
        return view('admin.vendor-details.index',['vendor_list'=>$data]);
    }

    public function statuschange(Request $request)
    {
        $find_model = Vendor::findorfail($request->id);
        $find_model->status = $request->status;
        $find_model->save();

        if($find_model){
            return "success";
        }else{
            return "error";
        }
    }

    public function create()
    {
        $Data=Array();
        $Data['userRole']=UserRole::get();
        return view('admin.vendor-details.create',$Data);
    }

    public function store(request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'username'      =>  'required|max:20|unique:vendors,username',
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'email'         =>  'required|email',
            'phone_number'  =>  'required',
            'gender'        =>  'required',
            'status'        =>  'required',
            'avatar'        =>  'nullable|image',
            'password'      =>  'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();

        }

        $data = new Vendor;
        $data->username = $request->username;
        $data->first_name = $request->first_name;
        $data->last_name= $request->last_name;
        $data->gender = $request->gender;
        $data->email = $request->email;
        $data->mobile_no = $request->phone_number;
        $data->password = $request->password;

        $vendor_img="vendor\images\vendor.png";

        if ($request->hasFile('avatar')) {
            $type = $request->file('avatar')->getMimeType();
            if(strpos($type, 'image/') !== false){
                $banner = substr(str_slug($request->input('username')),0,10).'_'.str_random(5).'.'.$request->avatar->getClientOriginalExtension();

                $request->avatar->move(public_path('vendor/images/profile/'),$banner);
                $vendor_img = 'vendor/images/profile/'.$banner;
            }
        }
        $data->avatar = $vendor_img;
        $data->status = "0";
        // return $data;
        $data->save();
        return redirect()->route('vendor-detail');
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

    public function edit($id)
    {
        $edit= Vendor::findorfail($id);
        return view('admin.vendor-details.edit',['edit'=>$edit]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'username'      =>  'required|max:20',
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'email'         =>  'required|email',
            'phone_number'  =>  'required',
            'gender'        =>  'required',
            'status'        =>  'required',
            'avatar'        =>  'nullable|image',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();

        }

        $data = Array();
        $data['username']= $request->username;
        $data['first_name']= $request->first_name;
        $data['last_name']= $request->last_name;
        $data['gender']= $request->gender;
        $data['email']= $request->email;
        $data['mobile_no']= $request->phone_number;

        $vendor_img="vendor\images\vendor.png";

        if ($request->hasFile('avatar')) {
            $type = $request->file('avatar')->getMimeType();
            if(strpos($type, 'image/') !== false){
                $vendor_img = substr(str_slug($request->input('username')),0,10).'_'.str_random(5).'.'.$request->avatar->getClientOriginalExtension();

                $request->avatar->move(public_path('vendor/images/profile/'),$vendor_img);
                $vendor_img = 'vendor/images/profile/'.$vendor_img;
            }
            if($request->input('old_img') !=  Null)
                {
                    unlink(public_path().'/'.$request->old_img);
                }else{
                    $vendor_img;
                }
        }else{
            $vendor_img= $request->input('old_img');
        }

        $data['avatar'] = $vendor_img;
        $data['status'] = $request->status;

        $Update=Vendor::whereId($id)->update($data);

        return redirect()->route('vendor-detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {

        if($request->id)
        {
            $RemoveVendor =  Vendor::findorfail($request->id);

            unlink(public_path().'/'.$RemoveVendor->avatar);

            $RemoveVendor->delete();
        }
        // return $delete;
        if($RemoveVendor){
            return "success";
        }else{
            return "error";
        }
    }
}
