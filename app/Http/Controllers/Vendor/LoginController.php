<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Vendor;

class LoginController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            return redirect()->route('vendor');
        } else {
            return view('vendor.login');
    
        }   
    }

    public function login(Request $request)
    {
        // return bcrypt($request->password);
        $validator=Validator::make($request->all(),[
            'username'  => 'required|exists:vendor,username',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        //return  bcrypt($request->password);

        if(Auth::guard('vendor')->attempt(['username' => $request->username, 'password' => $request->password]))
        {
            return redirect()->intended(route('vendor'));
        }else{
          return  redirect()->route('vendor.login');
        }

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
        $data->profile_picture = "vendor\images\users\user-10.jpg";
        $data->logo = "vendor\images\products\product-1.jpg";
        $data->address = "";
        $data->city = "";
        $data->state = "";
        $data->status = "0";
        $data->save();
        // Auth::guard('vendor')->loginUsingid('1');
        return redirect()->route('vendor.login');
    }

    public function logout()
    {
        Auth::guard('vendor')->logout();
        return redirect()->route('vendor.login');
    }
}
