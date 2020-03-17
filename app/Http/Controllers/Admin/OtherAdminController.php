<?php

namespace App\Http\Controllers\Admin;

use App\Model\User;
use App\Model\Admin;
use App\Model\Vendor;
use App\Model\UserRole;
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
        $user= User::with('UserRole')->get();
        return view('admin.otheradmin-details.index',['users'=>$user]);
    }

    public function admin()
    {
        $admin=Admin::get();
        return view('admin.otheradmin-details.adminlist',['admins'=>$admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Data=Array();
        $Data['userRole']=UserRole::get();
        return view('admin.otheradmin-details.create',$Data);
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
            'userName'      =>  'required|max:20',
            'firstName'     =>  'required|max:20',
            'lastName'      =>  'required|max:20',
            'email'         =>  'required|email|unique:users,email',
            'password'      =>  'required|max:20',
            'phoneNumber'   =>  'required|min:10,max:10',
            'gender'        =>  'required',
            'status'        =>  'required|boolean',
            'userRole'      =>  'required|integer|exists:user_roles,id',
            'avatar'        =>  'image',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
            // dd($validator);
        }
        if(($request->userRole) == 3 )
        {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        $user = new User;

        $user->role_id=$request->userRole;
        $user->username=$request->userName;
        $user->first_name=$request->firstName;
        $user->last_name=$request->lastName;
        $user->gender=$request->gender;
        $user->email=$request->email;
        $user->mobile_no=$request->phoneNumber;
        $user->password=bcrypt($request->password);

        $avatar="admin/images/admin-profile/defaultimage.png";

            if ($request->hasFile('avatar')) {
                $type = $request->file('avatar')->getMimeType();
                if(strpos($type, 'image/') !== false){
                    $avatar = substr(str_slug($request->input('userName')),0,10).'_'.str_random(5).'.'.$request->avatar->getClientOriginalExtension();
                    $request->avatar->move(public_path('admin/images/admin-profile/'),$avatar);
                    $avatar = 'admin/images/admin-profile/'.$avatar;
                }
            }

        $user->avatar=$avatar;
        $user->status=$request->status;

       if(($request->userRole) == 3)
        {

            $referalCode=str_random(5);

        }else{

            $referalCode=" ";

        }

        $user->referral_code=$referalCode;
        $user->parent_id=0;
        $user->save();

        $admin=new Admin();

        if(($request->userRole) == 1 ||  ($request->userRole) == 4  )
        {

            $admin->username=$request->userName;
            $admin->first_name=$request->firstName;
            $admin->last_name=$request->lastName;
            $admin->gender=$request->gender;
            $admin->email=$request->email;
            $admin->mobile_no=$request->phoneNumber;
            $admin->password=bcrypt($request->password);
            $admin->avatar=$avatar;
            $admin->status=$request->status;

            $admin->save();
            return redirect()->route('otheradmin-detail');

        }


        $vendor=new Vendor();

        if(($request->userRole) == 2)
        {

            $vendor->username=$request->userName;
            $vendor->first_name=$request->firstName;
            $vendor->last_name=$request->lastName;
            $vendor->gender=$request->gender;
            $vendor->email=$request->email;
            $vendor->mobile_no=$request->phoneNumber;
            $vendor->password=bcrypt($request->password);
            $vendor->avatar=$avatar;
            $vendor->status=$request->status;

            $vendor->save();
            return redirect()->route('otheradmin-detail');
        }

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
        $Data=Array();
        $Data['userRole']=UserRole::get();
        $Data['edit'] = User::find($id);
        return view('admin.otheradmin-details.edit',$Data);
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
            'userName'      =>  'required|max:20',
            'firstName'     =>  'required|max:20',
            'lastName'      =>  'required|max:20',
            // 'email'         =>  'required|email',
            'phoneNumber'   =>  'required|min:10,max:10',
            'gender'        =>  'required',
            'status'        =>  'required|boolean',
            'userRole'      =>  'required|integer|exists:user_roles,id',
            'avatar'        =>  'image',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }


        $params_user = Array();

        $params_user['role_id'] = $request->userRole;
        $params_user['username'] = $request->userName;
        $params_user['first_name'] = $request->firstName;
        $params_user['last_name'] = $request->lastName;
        $params_user['gender'] = $request->gender;
        // $params_user['email'] = $request->email;
        $params_user['mobile_no'] = $request->phoneNumber;
        $params_user['password'] = bcrypt($request->password);

        $avatar="admin/images/admin-profile/defaultimage.png";



            if ($request->hasFile('avatar')) {
                $type = $request->file('avatar')->getMimeType();
                if(strpos($type, 'image/') !== false){
                    $avatar = substr(str_slug($request->input('userName')),0,20).'_'.str_random(10).'.'.$request->avatar->getClientOriginalExtension();

                    $request->avatar->move(public_path('admin/images/admin-profile/'),$avatar);
                    $avatar = 'admin/images/admin-profile/'.$avatar;
                }
                if($request->input('oldimg'))
                    {
                        if(!(($request['oldimg']) == "admin/images/admin-profile/defaultimage.png"))
                        {
                            unlink(public_path().'/'.$request->oldimg);
                        }
                    }else{

                        $avatar;
                    }
            }else{
                $avatar= $request->input('oldimg');
            }

        $params_user['avatar']=$avatar;
        $params_user['status']=$request->status;

       if(($request->userRole) == 3)
        {

            $referalCode=str_random(5);

        }else{

            $referalCode=" ";

        }

        $params_user['referral_code'] = $referalCode;
        $params_user['parent_id'] = 0;

        $UserUpdate=User::whereId($id)->update($params_user);

        $params_admin=Array();

        if(($request->userRole) == 1 ||  ($request->userRole) == 4  )
        {

            $params_admin['username'] = $request->userName;
            $params_admin['first_name'] = $request->firstName;
            $params_admin['last_name'] = $request->lastName;
            $params_admin['gender'] = $request->gender;
            // $params_admin['email'] = $request->email;
            $params_admin['mobile_no'] = $request->phoneNumber;
            $params_admin['password'] = bcrypt($request->password);
            $params_admin['avatar'] = $avatar;
            $params_admin['status'] = $request->status;

            $AdminUpdate=Admin::whereUsername($request->oldusername)->update($params_admin);


        }


        $params_vendor=Array();

        if(($request->userRole) == 2)
        {

            $params_vendor['username'] = $request->userName;
            $params_vendor['first_name'] = $request->firstName;
            $params_vendor['last_name'] = $request->lastName;
            $params_vendor['gender'] = $request->gender;
            // $params_vendor['email'] = $request->email;
            $params_vendor['mobile_no'] = $request->phoneNumber;
            $params_vendor['password'] = bcrypt($request->password);
            $params_vendor['avatar'] = $avatar;
            $params_vendor['status'] = $request->status;

            $VendorUpdate=Vendor::whereUsername($request->oldusername)->update($params_vendor);

        }


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
        if(!(($request->profilepicture) == "admin/images/admin-profile/defaultimage.png"))
        {
            $image=$request->profilepicture;
            unlink(public_path().'/'.$image);
        }

        $removepromo =  User::findorfail($request->id);
        // return $removepromo->username;
        if(($removepromo->role_id) == 2 )
        {
            $removevendor =  Vendor::where('username',$removepromo->username)->where('email',$removepromo->email)->first();
            $removevendor->delete();
        }
        if(($removepromo->role_id) == 1)
        {
            $removeadmin =  Admin::where('username',$removepromo->username)->where('email',$removepromo->email)->first();
            $removeadmin->delete();
        }
        $removepromo->delete();

        // return $delete;
        if($removepromo)
        {
            return "success";
        }else{
            return "error";
        }
    }
}
