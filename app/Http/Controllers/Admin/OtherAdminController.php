<?php

namespace App\Http\Controllers\Admin;
use App\Model\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class OtherAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $otheradmin= Admin::get();
        return view('admin.otheradmin-details.index',['otheradmin'=>$otheradmin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.otheradmin-details.create');
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
            'email'  =>  'required',
            'phone_number'  =>  'required|min:10',
            'profile_picture'  =>  'image',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withInput($request->all())->withErrors($validator);

        }

        $data = new Admin;

        $profileimage="admin/images/admin-profile/defaultimage.png";
        // return $request->admin_img;
            if ($request->hasFile('profile_picture')) {
                $type = $request->file('profile_picture')->getMimeType();
                if(strpos($type, 'image/') !== false){
                    $profileimage = substr(str_slug($request->input('profile_picture')),0,10).'_'.str_random(5).'.'.$request->profile_picture->getClientOriginalExtension();

                    $request->profile_picture->move(public_path('images/admin-profile/'),$profileimage);
                    $profileimage = 'images/admin-profile/'.$profileimage;
                }
            }
            // return $profileimage;
        $data->profile_picture =  $profileimage;
        $data->username = $request->username;
        $data->password  =   $request->password;
        $data->email =   $request->email;
        $data->mobile_no =   $request->phone_number;
        $data->user_type =   "1";
        $data->status =   "0";
        $data->save();
        return redirect()->route('otheradmin-detail');
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
        $edit = Admin::find($id);
        return view('admin.otheradmin-details.edit',['edit'=>$edit]);
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
            'email'  =>  'required',
            'phone_number'  =>  'required|min:10',
            'profile_picture'  =>  'image',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withInput($request->all())->withErrors($validator);

        }

        // dd( $request->admin_img);

        $data = Admin::findorfail($id);

        $profileimage="admin/images/admin/defaultimage.png";

            if ($request->hasFile('admin_img')) {
                $type = $request->file('admin_img')->getMimeType();
                if(strpos($type, 'image/') !== false){
                    $profileimage = substr(str_slug($request->input('admin_img')),0,20).'_'.str_random(10).'.'.$request->admin_img->getClientOriginalExtension();

                    $request->admin_img->move(public_path('admin/images/admin-profile/'),$profileimage);
                    $profileimage = 'images/admin-profile/'.$profileimage;
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
            $data->email =   $request->email;
            $data->mobile_no =   $request->phone_number;
            $data->save();
            return redirect()->route('otheradmin-detail');
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
        $removepromo =  Admin::findorfail($request->id);
        $removepromo->delete();

        // return $delete;
        if($removepromo){
            return "success";
        }else{
            return "error";
        }
    }
}
