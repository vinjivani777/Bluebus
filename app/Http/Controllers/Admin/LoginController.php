<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'username'  => 'required|exists:admins,username',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        // return  bcrypt($request->password);

        if(Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password]))
        {
            // Auth::guard('admin')->loginUsingId(1);
            return redirect()->intended(route('index'));
        }else{
          return  redirect()->route('admin');
        }

    }

    public function logout()
    {
        $Logout=Auth::guard('admin')->logout();
        // Auth::logout();

        return  redirect()->route('admin');
    }
}
