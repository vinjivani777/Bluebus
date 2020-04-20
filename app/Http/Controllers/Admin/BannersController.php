<?php

namespace App\Http\Controllers\Admin;

use App\Model\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BannersController extends Controller
{
    public function index()
    {
        $banner=Banner::wherestatus(1)->get();

        $nav=array();
        $nav['active']="Active";
        $nav['banner']=$banner;

        return view('admin.setting.banners.index',$nav);
    }

    public function create()
    {
        $nav=array();
        $nav['active']="Active";

        return view('admin.setting.banners.create',$nav);

    }

    public function store(Request $request)
    {

        $validator=Validator::make($request->all(),[
            'page'  => 'required',
            'banner'  => 'required|image',
            'name'  => 'required',
            'slug'  => 'nullable',
            'type'  => 'required',
            'slider'  => 'nullable',
            'slidet_title'  => 'nullable',
            'status'  => 'required',
            'url'  => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $params=array();


        $banner="banner";

        if ($request->hasFile('banner')) {
            $type = $request->file('banner')->getMimeType();
            if(strpos($type, 'image/') !== false){
                $banner = substr(str_slug($request->input('banner')),0,10).'_'.str_random(5).'.'.$request->banner->getClientOriginalExtension();

                $request->banner->move(public_path('web/images/banners/'),$banner);
                $banner = 'web/images/banners/'.$banner;
            }
        }

        $params['banner_title'] =$request->name;
        $params['banners_url'] = $request->url;
        $params['banners_image']=$banner;
        $params['banners_slug']=$request->slug;
        $params['type']=$request->type;
        $params['status']=$request->status;

         $Banner=Banner::create($params);

        return redirect()->route('banner');


    }

    public function edit($id)
    {

    }

    public function update(Request $request,$id)
    {

    }

    public function destroy(Request $request)
    {

    }
}
