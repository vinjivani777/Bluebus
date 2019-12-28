<?php

namespace App\Http\Controllers\Agent;

use App\Model\Bus;
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

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agent.index');
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
        $auth_id=Auth::guard('agent')->user()->id;
        $get_agent=Agent::whereId($auth_id)->first();

        return view('agent.profile.index',['agent_details'=>$get_agent]);
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
        $params['mobile_no']=$request->mobile_no;

        $profile_picture="agent/images/agent.png";

        if ($request->hasFile('profile_image')) {
            $type = $request->file('profile_image')->getMimeType();
            if(strpos($type, 'image/') !== false){
                $profile_picture = substr(str_slug($request->input('username')),0,10).'_'.str_random(5).'.'.$request->profile_image->getClientOriginalExtension();

                $request->profile_image->move(public_path('agent/images/agent-profile/'),$profile_picture);
                $profile_picture = 'agent/images/agent-profile/'.$profile_picture;
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



        $params['profile_picture']=$profile_picture;

        $Save_Profile=Agent::whereId(Auth::guard('agent')->user()->id)->update($params);

        return redirect()->back();
    }

    public function agentpassword(Request $request)
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
        $agent_password_update=Agent::whereId(Auth::guard('agent')->user()->id)->update($params);
        return redirect()->back();
    }


}

