<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('agent.login');
    }

    public function login(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'username'  => 'required|exists:agent,username',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        //return  bcrypt($request->password);

        if(Auth::guard('agent')->attempt(['username' => $request->username, 'password' => $request->password]))
        {
            return redirect()->intended(route('agent.index'));
        }else{
          return  redirect()->route('agent');
        }

    }

    public function logout()
    {
        $Logout=Auth::guard('agent')->logout();
        return  redirect()->route('agent');
    }
}

