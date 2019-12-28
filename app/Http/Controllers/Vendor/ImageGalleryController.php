<?php

namespace App\Http\Controllers\Vendor;

use App\Model\Bus;
use App\Model\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ImageGalleryController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth=Auth::guard('vendor')->user()->id;
        $bus=Bus::where(['created_id'=>$auth,'created_by'=>'vendor'])->get();
        $gallery=Gallery::with('bus')->where(['created_id'=>$auth,'created_by'=>'vendor'])->get();
        return view('vendor.img-gallery.index',['Bus'=>$bus,'Gallery'=>$gallery]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.img-gallery.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'bus_name'  => 'required',
            'bus_img'  => 'required|image',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $params=array();


        $banner="bus_img";

        if ($request->hasFile('bus_img')) {
            $type = $request->file('bus_img')->getMimeType();
            if(strpos($type, 'image/') !== false){
                $banner = substr(str_slug($request->input('bus_name')),0,10).'_'.str_random(5).'.'.$request->bus_img->getClientOriginalExtension();

                $request->bus_img->move(public_path('vendor/images/bus-image/'),$banner);
                $banner = 'vendor/images/bus-image/'.$banner;
            }
        }

        $params['image']=$banner;
        $params['user_id']=1;
        $params['bus_id'] = $request->bus_name;
        $params['created_id']=Auth::guard('vendor')->user()->id;
        $params['created_by']="vendor";


            $bus_gallary = Gallery::create($params);
           if ($bus_gallary) {
                return redirect()->route('vendor.img_gallery');
           }


        return redirect()->route('vendor.img_gallery');
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
        $auth=Auth::guard('vendor')->user()->id;

        $gallery=Gallery::find($id);
        $bus=Bus::where(['created_id'=>$auth,'created_by'=>'vendor'])->get();
        return view('vendor.img-gallery.edit',['img'=>$gallery,'Bus'=>$bus]);
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
        $validator=Validator::make($request->all(),[
            'bus_name'  => 'required',
            'old_img'  => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $params=array();


        $banner="bus_img";

        if ($request->hasFile('bus_img')) {
            $type = $request->file('bus_img')->getMimeType();
            if(strpos($type, 'image/') !== false){
                $banner = substr(str_slug($request->input('bus_name')),0,20).'_'.str_random(10).'.'.$request->bus_img->getClientOriginalExtension();

                $request->bus_img->move(public_path('vendor/images/bus-image/'),$banner);
                $banner = 'vendor/images/bus-image/'.$banner;
            }
            if($request->input('old_img'))
                {
                    unlink(public_path().'/'.$request->old_img);
                }else{
                    $banner;
                }
        }else{
            $banner= $request->input('old_img');
        }

        $params['image']=$banner;
        $params['user_id']=1;
        $params['bus_id'] = $request->bus_name;
        $params['created_id']=Auth::guard('vendor')->user()->id;
        $params['created_by']="vendor";

         $bus_gallary = Gallery::where('id',$id)->update($params);

        if ($bus_gallary) {
            return redirect()->route('vendor.img_gallery');
       }


        return redirect()->route('vendor.img_gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $Gallery =  Gallery::findorfail($request->id);
        $Gallery->delete();

        if($Gallery){
            return "success";
        }else{
            return "error";
        }

    }
}
