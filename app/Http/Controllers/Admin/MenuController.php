<?php

namespace App\Http\Controllers\Admin;

use App\Model\Menu;
use App\Model\Page;
use Illuminate\Http\Request;
use App\Model\PageDescription;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function index()
    {
        $menus=Menu::get();

        $nav=Array();
        $nav['active']="Active";
        $nav['menus']=$menus;

        return view('admin.menus.index',$nav);
    }

    public static function menuData()
    {
        $menus=Menu::whereStatus(1)->get();

        $nav=Array();
        $nav['active']="Active";
        $nav['menus']=$menus;

        return $nav;
    }

    public function create()
    {

        $menus=Menu::whereStatus(1)->get();

        $nav=Array();
        $nav['active']="Active";
        $nav['menus']=$menus;

        return view('admin.menus.create',$nav);
    }

    public function store(Request $request)
    {
            $validator=Validator::make($request->all(),[
                'menus' => 'required|integer',
                'name'  => 'required',
                'slug'  => 'required',
                'type'  => 'required|string',
                'status'=> 'required|integer'
            ]);

            if ($validator->fails()) {

                return redirect()->back()->withErrors($validator)->withInput($request->all());

            }

            $page=Array();

            $page['slug']=$request->slug;
            $page['sortorder']=1;
            $page['status']=0;

            $pageSave=Page::create($page);

            // $PageDescription=Array();

            // $PageDescription['name']=$request->name;

            // $PageDescriptionSave=PageDescription::create($PageDescription);

            $menus=Array();

            $menus['name']=$request->name;
            $menus['sort_order']=1;
            $menus['sub_sort_order']=1;
            $menus['parant_id']=$request->menus;
            $menus['link']=$request->slug;
            $menus['page_id']=$pageSave->id;
            $menus['type']=$request->type;
            $menus['status']=$request->status;

            $menuSave=Menu::create($menus);

            return redirect()->route('menus');


    }

    public function edit($id)
    {
        $menus=Menu::whereStatus(1)->get();
        $editMenu=Menu::whereId($id)->first();

        $nav=Array();
        $nav['active']="Active";
        $nav['menus']=$menus;
        $nav['editMenu']=$editMenu;

        return view('admin.menus.edit',$nav);
    }

    public function update(Request $request,$id)
    {
        $validator=Validator::make($request->all(),[
            'menus' => 'required|integer',
            'name'  => 'required',
            'slug'  => 'required',
            'page_id'=> 'required',
            'type'  => 'required|string',
            'status'=> 'required|integer'
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput($request->all());

        }

        $page=Array();

        $page['slug']=$request->slug;
        $page['sortorder']=1;
        $page['status']=0;

        $pageSave=Page::whereId($request->page_id)->update($page);

        $menus=Array();

        $menus['name']=$request->name;
        $menus['sort_order']=1;
        $menus['sub_sort_order']=1;
        $menus['parant_id']=$request->menus;
        $menus['link']=$request->slug;
        $menus['page_id']=$request->page_id;
        $menus['type']=$request->type;
        $menus['status']=$request->status;

        $menuSave=Menu::whereId($id)->update($menus);

        return redirect()->route('menus');
    }

    public function destroy(Request $request)
    {
        $Menu =  Menu::findorfail($request->id);
        $page=Page::findorfail($Menu->id);

        $Menu->delete();
        $page->delete();

        if($Menu){
            return "success";
        }else{
            return "error";
        }

    }
}
