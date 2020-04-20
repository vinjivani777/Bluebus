<?php

namespace App\Http\Controllers\Admin;

use App\Model\Bus;
use App\Model\Menu;
use App\Model\User;
use App\Model\Admin;
use App\Model\Route;
use App\Model\Vendor;
use App\Model\Booking;
use App\Model\BusType;
use App\Model\Amenitie;
use App\Model\Customer;
use App\Model\DropPoint;
use App\Model\PromoCode;
use App\Model\BoardPoint;
use App\Model\SeatLayout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $nav=Array();
        $nav['total_bus']=count(Bus::get());
        $nav['total_route']=count(Route::get());
        $nav['total_vendor']=count(Vendor::get());
        $nav['ban_vendor']=count(Vendor::whereStatus(1)->get());
        $nav['total_customer']=count(Customer::get());
        // $nav['ban_customer']=Customer::whereStatus(1)->get();

        return view('admin.index',$nav);
    }

    /**
     * Change status change commen funcation.
     *
    */
    public function statuschange(Request $request)
    {
        $model = $request->model;

        if($model == "BusType"){
            $find_model = BusType::findorfail($request->id);
            $find_model->status = $request->status;
            $find_model->save();
        }elseif ($model == "Bus") {
            $find_model = Bus::findorfail($request->id);
            $board_point_id=(BoardPoint::whereBus_id($request->id)->select('id')->get());

            foreach (($board_point_id) as $item) {
                $record=BoardPoint::findorfail($item)->first();
                $record->status=$request->status;
                $record->save();
            }
            $find_model->status = $request->status;
            $find_model->save();

        }elseif ($model == "Menu") {
            $find_model = Menu::findorfail($request->id);
            $find_model->status = $request->status;
            $find_model->save();
        }elseif ($model == "SeatLayout") {
            $find_model = SeatLayout::findorfail($request->id);
            $find_model->status = $request->status;
            $find_model->save();
        }elseif ($model == "Amenitie") {
            $find_model = Amenitie::findorfail($request->id);
            $find_model->status = $request->status;
            $find_model->save();
        }elseif ($model == "Route") {
            $find_model = Route::findorfail($request->id);
            $find_model->status = $request->status;
            $find_model->save();
        }elseif ($model == "BoardPoint") {
            $find_model = BoardPoint::findorfail($request->id);
            $find_model->status = $request->status;
            $find_model->save();
        }elseif ($model == "DropPoint") {
            $find_model = DropPoint::findorfail($request->id);
            $find_model->status = $request->status;
            $find_model->save();
        }elseif ($model == "PromoCode") {
            $find_model = PromoCode::findorfail($request->id);
            $find_model->status = $request->status;
            $find_model->save();
        }elseif ($model == "Admin") {
            $find_model = Admin::findorfail($request->id);
            $find_model->status = $request->status;
            $username= $find_model->username;
            $find_model->save();

            $find_user = User::whereUsername($username)->first();
            $find_user->status = $request->status;
            $find_user->save();

        }elseif ($model == "Vendor") {
            $find_model = Vendor::findorfail($request->id);
            $find_model->status = $request->status;
            $username= $find_model->username;
            $find_model->save();

            $find_user = User::whereUsername($username)->first();
            $find_user->status = $request->status;
            $find_user->save();

        }elseif ($model == "User") {
            $find_model = User::findorfail($request->id);
            $find_model->save();
            $role=$find_model->role_id;
            $username= $find_model->username;
            $find_model->status = $request->status;

            if($role == 1)
            {
                $find_admin = Admin::whereUsername($username)->first();
                $find_admin->status = $request->status;
                $find_admin->save();
            }

            if($role == 2)
            {
                $find_vendor = Vendor::whereUsername($username)->first();
                $find_vendor->status = $request->status;
                $find_vendor->save();
            }
            $find_model->status = $request->status;
            $find_model->save();
        }

        if ($model == "Booking") {
            $find_model = Booking::findorfail($request->id);
            $find_model['booking_status']=$request->status;
            $find_model->save();
        }


        if($find_model){
            return "success";
        }else{
            return "error";
        }
    }

    public function profile()
    {
        $auth_id=Auth::guard('admin')->user()->id;
        $get_admin=Admin::whereId($auth_id)->first();
        return view('admin.profile.index',['admin_details'=>$get_admin]);
    }

    public function profileupdate(Request $request)
    {
        // return $request;
        $validator=Validator::make($request->all(),[
            'username'  => 'required',
            'email'     =>  'required',
            'mobile_no' => 'required',
            'profile_image'  => 'image',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with(['status' => 'Something Went Wrong']);
        }


        $params=array();

        $params['username']=$request->username;
        $params['email']=$request->email;
        $params['mobile_no']=$request->mobile_no;

        $profile_picture="admin/images/admin.png";

        if ($request->hasFile('profile_image')) {
            $type = $request->file('profile_image')->getMimeType();
            if(strpos($type, 'image/') !== false){
                $profile_picture = substr(str_slug($request->input('username')),0,10).'_'.str_random(5).'.'.$request->profile_image->getClientOriginalExtension();

                $request->profile_image->move(public_path('admin/images/admin-profile/'),$profile_picture);
                $profile_picture = 'admin/images/admin-profile/'.$profile_picture;
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



        $params['avatar']=$profile_picture;
        // return $params;
         $Save_Profile=Admin::whereId(Auth::guard('admin')->user()->id)->update($params);
         $Save_Profile=User::whereRole_id('1')->whereUsername(Auth::guard('admin')->user()->username)->whereFirst_name(Auth::guard('admin')->user()->first_name)->whereLast_name(Auth::guard('admin')->user()->last_name)->update($params);

         if($Save_Profile)
         {
            return redirect()->back()->with(['status' => 'Settings Updated Successfully']);
         }else{
            return redirect()->back()->with(['status' => 'Something Went Wrong']);
        }

    }

    public function adminpassword(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'old_password'  => 'required',
            'new_password'  => 'required|min:4|required_with:confirm_password|same:confirm_password',
            'confirm_password'  => 'required|min:4',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->with(['status' => 'Something Went Wrong']);

        }

        $pass=Admin::whereId(Auth::guard('admin')->user()->id)->first();
        // dd(Hash::check($request->old_password, $pass->password));
        if (Hash::check($request->old_password, $pass->password))
        {
            $params=array();

            $params['password']=bcrypt($request->new_password);
            // return $params;
            $admin_password_update=Admin::whereId(Auth::guard('admin')->user()->id)->update($params);
            $admin_password_update=User::whereRole_id('1')->whereUsername(Auth::guard('admin')->user()->username)->whereFirst_name(Auth::guard('admin')->user()->first_name)->whereLast_name(Auth::guard('admin')->user()->last_name)->update($params);
        }
        else{
            return redirect()->back()->with(['status' => 'Old Password Mismatch']);
        }

        if($admin_password_update)
        {
            return redirect()->back()->with(['status' => 'Password Updated Successfully']);
        }
        else
        {
            return "No";
            return redirect()->back();
        }
    }


}
