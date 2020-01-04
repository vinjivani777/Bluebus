<?php

namespace App\Http\Controllers\Vendor;

use App\Model\Bus;
use App\Model\Admin;
use App\Model\Vendor;
use App\Model\Agent;
use App\Model\Route;
use App\Model\BusType;
use App\Model\DropPoint;
use App\Model\PromoCode;
use App\Model\BoardPoint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VendorController extends Controller
{
   public function index()
   {
       return view('vendor.index');
   }

   public function register()
   {
       return view('vendor.register');
   }

   public function registernew(Request $request)
   {
       $validator=Validator::make($request->all(),[
            'username'  => 'required',
            'emailid'   =>  'required',
            'password'  =>  'required|min:4'
       ]);

       if($validator->fails())
       {
           return redirect()->back()->withErrors($validator)->withInput($request->all());
       }

       $params=array();
       $params['username']=$request->username;
       $params['email']=$request->emailid;
       $params['password']=bcrypt($request->password);
       $params['status']=false;

       $Vendor=Vendor::create($params);

       if($Vendor)
       {
           return redirect()->back();
       }
   }

   public function showforgetpage()
   {
        return view('vendor.forgetpassword');
   }

   public function forgetpassword(Request $request)
   {
       $b=$request->emailphone;
        b:if(is_numeric($b))
        {
            return "Message";   
        }
        else{
            return "Email";
        }
        // return view('vendor.forgetcodesuccess');
   }

   public function statuschange(Request $request)
   {
       $model = $request->model;

       if($model == "BusType"){
           $find_model = BusType::findorfail($request->id);
       }elseif ($model == "Bus") {
           $find_model = Bus::findorfail($request->id);
       }elseif ($model == "Route") {
           $find_model = Route::findorfail($request->id);
       }elseif ($model == "BoardPoint") {
           $find_model = BoardPoint::findorfail($request->id);
       }elseif ($model == "DropPoint") {
           $find_model = DropPoint::findorfail($request->id);
       }elseif ($model == "PromoCode") {
           $find_model = PromoCode::findorfail($request->id);
       }elseif ($model == "Agent") {
           $find_model = Agent::findorfail($request->id);
       }

       $find_model->status = $request->status;
       $find_model->save();

       if($find_model){
           return "success";
       }else{
           return "error";
       }
   }

   public function profile()
   {
       $auth_id=Auth::guard('vendor')->user()->id;
       $get_vendor=Vendor::whereId($auth_id)->first();

       return view('vendor.profile.index',['vendor_details'=>$get_vendor]);
   }

   public function profileupdate(Request $request)
   {
       $validator=Validator::make($request->all(),[
           'username'  => 'required',
           'email'     =>  'required',
           'mobile_no' => 'required',
           'profile_image'  => 'image',
       ]);

       if($validator->fails())
       {
           return redirect()->back()->withErrors($validator)->withInput($request->all());
       }


       $params=array();

       $params['username']=$request->username;
       $params['email']=$request->email;
       $params['phone_number']=$request->mobile_no;

       $profile_picture="vendor/images/admin.png";

       if ($request->hasFile('profile_image')) {
           $type = $request->file('profile_image')->getMimeType();
           if(strpos($type, 'image/') !== false){
               $profile_picture = substr(str_slug($request->input('username')),0,10).'_'.str_random(5).'.'.$request->profile_image->getClientOriginalExtension();

               $request->profile_image->move(public_path('vendor/images/admin-profile/'),$profile_picture);
               $profile_picture = 'vendor/images/admin-profile/'.$profile_picture;
           }
           if($request->input('old_profile'))
           {
               unlink(public_path().'/'.$request->old_profile);
           }else{
               $profile_picture;
           }
       }else{
           $profile_picture= $request->input('old_profile');
       }

       $logo="vendor/images/admin.png";


       if ($request->hasFile('logo')) {
        $type = $request->file('logo')->getMimeType();
        if(strpos($type, 'image/') !== false){
            $logo = substr(str_slug($request->input('username')),0,10).'_'.str_random(5).'.'.$request->logo->getClientOriginalExtension();

            $request->logo->move(public_path('vendor/images/logo/'),$logo);
            $logo = 'vendor/images/logo/'.$logo;
        }
        if($request->input('old_logo'))
        {
            unlink(public_path().'/'.$request->old_logo);
        }else{
            $logo;
        }
    }else{
        $logo= $request->input('old_logo');
    }

       $params['profile_picture']=$profile_picture;
       $params['logo']=$logo;

        $Save_Profile=Vendor::whereId(Auth::guard('vendor')->user()->id)->update($params);

        if($Save_Profile)
        {
            return redirect()->back();
        }else{
           return redirect()->back();
       }

   }

   public function vendorpassword(Request $request)
   {
       $validator=Validator::make($request->all(),[
           'old_password'  => 'required',
           'new_password'  => 'required|min:4|required_with:confirm_password|same:confirm_password',
           'confirm_password'  => 'required|min:4',
       ]);

       if ($validator->fails()) {

           return redirect()->back()->withErrors($validator);

       }

       $params=array();

       $params['password']=bcrypt($request->password);

       $admin_password_update=Vendor::whereId(Auth::guard('vendor')->user()->id)->update($params);

       if($admin_password_update)
       {

           return redirect()->back();

       }else{

           return redirect()->back();

       }
   }


}
