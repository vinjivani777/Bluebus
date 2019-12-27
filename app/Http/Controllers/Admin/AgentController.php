<?php

namespace App\Http\Controllers\Admin;
use App\Model\Agent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $agent= Agent::get();
        return view('admin.agent-details.index',['agent'=>$agent]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agent-details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:20',
            'password' => 'required|min:8',
            'first_name' => 'required',
            'last_name'   => 'required',
            'address'  =>  'required',
            'email'  =>  'required',
            'phone_number'  =>  'required|min:10',
            'city'  =>  'required',
            'company_name'  =>  'required',
            'country'  =>  'required',
            'agent_img'  =>  'image',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);

        }

        $data = new Agent;

        $profileimage="admin/images/agent/defaultimage.png";
        // return $request->agent_img;
            if ($request->hasFile('agent_img')) {
                $type = $request->file('agent_img')->getMimeType();
                if(strpos($type, 'image/') !== false){
                    $profileimage = substr(str_slug($request->input('agent_img')),0,10).'_'.str_random(5).'.'.$request->agent_img->getClientOriginalExtension();

                    $request->agent_img->move(public_path('admin/images/agent/'),$profileimage);
                    $profileimage = 'admin/images/agent/'.$profileimage;
                }
            }
            // return $profileimage;
        $data->profile_picture =  $profileimage;
        $data->username = $request->username;
        $data->password  =   $request->password;
        $data->first_name  =   $request->first_name;
        $data->last_name =  $request->last_name;
        $data->email =   $request->email;
        $data->phone_number =   $request->phone_number;
        $data->company_name =   $request->company_name;
        $data->address =   $request->address;
        $data->city =   $request->city;
        $data->country =   $request->country;
        $data->created_by =   "admin";
        $data->save();
        return redirect()->route('agent-detail');
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
        $edit = Agent::find($id);
        return view('admin.agent-details.edit',['edit'=>$edit]);
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
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:20',
            'first_name' => 'required',
            'last_name'   => 'required',
            'address'  =>  'required',
            'email'  =>  'required',
            'phone_number'  =>  'required|min:10',
            'city'  =>  'required',
            'company_name'  =>  'required',
            'country'  =>  'required',
            'agent_img'  =>  'image',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);

        }

        $data = Agent::findorfail($id);

        $profileimage="admin/images/agent/defaultimage.png";

            if ($request->hasFile('agent_img')) {
                $type = $request->file('agent_img')->getMimeType();
                if(strpos($type, 'image/') !== false){
                    $profileimage = substr(str_slug($request->input('bus_name')),0,20).'_'.str_random(10).'.'.$request->agent_img->getClientOriginalExtension();

                    $request->agent_img->move(public_path('admin/images/bus-image/'),$profileimage);
                    $profileimage = 'admin/images/bus-image/'.$profileimage;
                }
                if($request->input('oldimg'))
                    {
                        unlink(public_path().'/'.$request->oldimg);
                    }else{
                        $profileimage;
                    }
            }else{
                $profileimage= $request->input('oldimg');
            }
        $data->profile_picture =  $profileimage;
        $data->username = $request->username;
        $data->password  =   $request->password;
        $data->first_name  =   $request->first_name;
        $data->last_name =  $request->last_name;
        $data->email =   $request->email;
        $data->phone_number =   $request->phone_number;
        $data->company_name =   $request->company_name;
        $data->address =   $request->address;
        $data->city =   $request->city;
        $data->country =   $request->country;
        $data->created_by =   "admin";
        $data->save();
        return redirect()->route('agent-detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $image=$request->profilepicture;
        unlink(public_path().'/'.$image);
        $removepromo =  Agent::findorfail($request->id);
        $removepromo->delete();

        // return $delete;
        if($removepromo){
            return "success";
        }else{
            return "error";
        }
    }
}
