<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Amenitie;

class AmenitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $data = Amenitie::all();
        return  view('admin.amenities.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $amenities = array();
        $amenities['amenities'] = Amenitie::whereStatus(true)->get();
        $amenities['amenities_type'] = Bustype::whereStatus(true)->get();
        return view('admin.amenities.create',$amenities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator= $request->validate([
            'amenitiename' => 'required|min:2',
            'image' => 'required',
        ]);



        if($validator == false)
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        else
        {
            $newamenities= new Amenitie;
            $newamenities->amenities= $request->amenitiename;
            if ($request->hasFile('image')) {
                $type = $request->file('image')->getMimeType();
                if(strpos($type, 'image/') !== false){
                    $image = $request->amenitiename.$request->image->getClientOriginalExtension();

                    $request->image->move(public_path('admin/images/amenities/'),$image);
                    $image = 'admin/images/amenities/'.$image;
                }
            }
            $newamenities->image= $image;
            $newamenities->status= "0";
            $newamenities->save();

            return redirect()->route('amenities');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $amenities = array();
        $amenities = Amenitie::Find($id);
        return view('admin.amenities.edit',['amenities'=>$amenities]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator= $request->validate([
            'editamenitiename' => 'required|min:2',
        ]);


        if($validator == false)
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        else
        {
            $newamenities = Amenitie::findorfail($request->editid);
            $newamenities->amenities= $request->editamenitiename;
            $image="admin/images/amenities/default.png";

            if ($request->hasFile('newimage')) {
                $type = $request->file('newimage')->getMimeType();
                if(strpos($type, 'image/') !== false){
                    $image = $request->editamenitiename.'.'.$request->newimage->getClientOriginalExtension();

                    $request->newimage->move(public_path('admin/images/amenities/'),$image);
                    $image = 'admin/images/amenities/'.$image;
                }
                if($request->input('old_profile'))
                {
                    unlink(public_path().'/'.$request->oldimage);
                }else{
                    $image;
                }
                $newamenities->image= $image;

            }else{
                $image;
            }

            $newamenities->save();

            return redirect()->route('amenities');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function amenitiesdestory(request $request)
    {
        $newamenities =  Amenitie::findorfail($request->id);
        $newamenities->delete();

        if($newamenities){
            return "success";
        }else{
            return "error";
        }
    }

    public function amenitiestype()
    {
        $amenitiestype= array();
        $amenitiestype['data'] = Bustype::select()->get();
        return view('admin.amenities.amenities-type.index',$amenitiestype);
    }

    public function amenitiestypeadd(request $request)
    {
        $validator= $request->validate([
            'amenities_type' => 'required|min:2|max:20',
        ]);
        $newtype= new Bustype;
        $newtype->amenities_type= $request->amenities_type;
        $newtype->save();
        return redirect()->back()->withErrors($validator);
    }

    public function amenitiestypeedit($id)
    {
        $amenitiestype = Bustype::findorfail($id);
        return view('admin.amenities.amenities-type.edit',['amenitiestype'=>$amenitiestype]);
    }

    public function amenitiestypeupdate(request $request,$id)
    {
        $validator= $request->validate([
            'amenities_type' => 'required|min:2|max:20',
        ]);
        $newtype =  Bustype::findorfail($id);
        $newtype->amenities_type= $request->amenities_type;
        $newtype->save();
        return redirect()->route('amenities-type');
    }

    public function amenitiestypedestory(request $request)
    {
        $newtype =  Bustype::findorfail($request->id);
        $newtype->delete();

        if($newtype){
            return "success";
        }else{
            return "error";
        }
    }
}