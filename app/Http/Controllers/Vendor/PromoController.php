<?php

namespace App\Http\Controllers\Vendor;

use App\Model\PromoCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PromoController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth=Auth::guard('vendor')->user()->id;
        $promo= PromoCode::where(['created_id'=>$auth,'created_by'=>'vendor'])->get();
        return view('vendor.promo-mgn.index',['Promo'=>$promo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.promo-mgn.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'promo_code' => 'required|max:30',
            // 'promo_no_use' => 'required',
            'description' => 'required',
            'usage_count' => 'required',
            'indivisual_count' => 'required|lt:usage_count',
            // 'min_ticket_amount' =>'required',
            'max_discount_amount'   => 'required',
            'start_date'  =>  'required',
            'expiry_date'  =>  'required',
            'thumbnail_image'  => 'image|dimensions:max_width=130,max_height=120',
            'promo_code_image'  => 'image|dimensions:max_width=300,max_height=180',
            't_and_c'  =>  'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        if ($request->hasFile('promo_code_image')) {
            $type = $request->file('promo_code_image')->getMimeType();
            if(strpos($type, 'image/') !== false){
                $promo_image_name = substr(str_slug($request->promo_code),0,10).'_'.str_random(5).'.'.$request->promo_code_image->getClientOriginalExtension();
                $request->promo_code_image->move(public_path('vendor/images/promo-code/'),$promo_image_name);
                $promo_image_name = 'vendor/images/promo-code/'.$promo_image_name;
            }
        }else{
            $promo_image_name = "";
        }
        if ($request->hasFile('thumbnail_image')) {
            $type = $request->file('thumbnail_image')->getMimeType();
            if(strpos($type, 'image/') !== false){
                $thumbnail_image_name = substr(str_slug($request->promo_code),0,10).'_'.str_random(5).'.'.$request->thumbnail_image->getClientOriginalExtension();
                $request->thumbnail_image->move(public_path('vendor/images/promo-code/'),$thumbnail_image_name);
                $thumbnail_image_name = 'vendor/images/promo-code/'.$thumbnail_image_name;
            }
        }else{
            $thumbnailimage = "";
        }

        $data = new PromoCode;
        $data->promocode           = strtoupper($request->promo_code);
        // $data->promo_no_use         = $request->promo_no_use;
        $data->description          = $request->description;
        $data->usage_count          = $request->usage_count;
        $data->indivisual_use       = $request->indivisual_count;
        $data->min_order_amount     = $request->min_ticket_amount;
        $data->max_amount           = $request->max_discount_amount;
        $data->discount_type        = $request->promo_type;
        $data->amount               = $request->percentage_pr;
        $data->start_date           = date('Y-m-d', strtotime($request->start_date));
        $data->expiry_date          = date('Y-m-d', strtotime($request->expiry_date));
        $data->thumbnail_image      = $thumbnail_image_name;
        $data->promocode_image      = $promo_image_name;
        $data->created_by           = 'vendor' ;
        $data->created_id           = (Auth::guard('vendor')->user()->id) ;
        $data->t_and_c              = $request->t_and_c;
        // $data->include_bus_id       = implode('|',$request->include_bus_id);
        // $data->exclude_bus_id       = implode('|',$request->exclude_bus_id);
        // return $data;
        $data->save();
        return redirect()->route('vendor.promo-detail');
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
        $edit = PromoCode::where(['created_id'=>$auth,'created_by'=>'vendor'])->find($id);
        return view('vendor.promo-mgn.edit',['edit'=>$edit]);
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
        // $validator = Validator::make($request->all(), [
        //     'code' => 'required|max:20',
        //     'maxdiscount' => 'required',
        //     'minordervalue' => 'required',
        //     'expiry_date'   => 'required',
        //     'type'  =>  'required',
        // ]);

        // if($validator->fails())
        // {
        //     return redirect()->back()->withErrors($validator);

        // }

        // $data = PromoCode::findorfail($id);
        // $data->promocode = $request->code;
        // $data->maxdiscount  =   $request->maxdiscount;
        // $data->minordervalue =  $request->minordervalue;
        // $data->expiry_date  =   $request->expiry_date;
        // $data->type =   $request->type;
        // if($request->type = "Flat"){
        //     $data->percentage   =   $request->flatamount;
        // }
        // else{
        //     $data->percentage   =   $request->percentageamount;
        // }

        // $data->save();
        // return redirect()->route('promo-detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request)
    {
        $id=$request->id;
        $removepromo =  PromoCode::findorfail($id);
        if($removepromo->promo_image != "")
        {
            unlink(public_path().'/'.$removepromo->promo_image);
        }
        $removepromo->delete();

        if($removepromo){
            return "success";
        }else{
            return "error";
        }
    }
}
