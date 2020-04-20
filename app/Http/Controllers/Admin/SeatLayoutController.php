<?php

namespace App\Http\Controllers\Admin;

use App\Model\Bus;
use App\Model\BoardPoint;
use App\Model\SeatLayout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SeatLayoutController extends Controller
{

    public function index()
    {
        $data = array();
        $data['SeatLayout'] = SeatLayout::with('Bus')->get();
        return view('admin.seat-layout.index',$data);
    }

    public function create()
    {
        $data = array();
        $data['bus_list'] = Bus::whereStatus(true)->select('id','bus_name', 'bus_reg_no')->get();
        return view('admin.seat-layout.create',$data);
    }

    public function view(Request $request)
    {
        $total_seat=$request->total_seat;
        $seat_type=$request->seat_type;
        $layout=$request->layout;
        $last_row_seat=$request->last_row_seat;
        $html="";

        if($seat_type == 1)
        {
            $seat=asset('web/images/redbus/icon/4.png');
        }
        elseif($seat_type == 2)
        {
            $seat=asset('web/images/redbus/icon/1.png');

        }elseif($seat_type == 3)
        {
            $seat=asset('web/images/redbus/icon/4.png');
            $sofa=asset('web/images/redbus/icon/1.png');
        }


            if($layout == "1 X 2")
            {
                $Alfa="A";
                $No=1;
                for ($i=1; $i <=  $total_seat; $i++) {
                    $html.='<div class="row m-2">';

                    if($seat_type == 1 || $seat_type == 2)
                    {

                            $html.='<div class="col-2">
                                        <img src='.  $seat.'>
                                        <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                        // <div>'.$Alfa.$No.'</div>';
                                        $No++;$Alfa++;
                            $html.='</div>
                                    <div class="col-3"></div>';
                            $html.='<div class="col-2">
                                        <img src='.$seat.'>
                                        <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                        // <div>'.$Alfa.$No.'</div>';
                                        $No++;$Alfa++;
                            $html.='</div>';
                            $html.='<div class="col-2">
                                        <img src='.$seat.'>
                                        <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                        // <div>'.$Alfa.$No.'</div>';
                                        $No++;$Alfa++;
                            $html.='</div>';
                        $html.='</div>';
                    }

                    if($seat_type == 3)
                    {

                            $html.='<div class="col-2">
                                        <img src='.  $seat.'>
                                        <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                        // <div>'.$Alfa.$No.'</div>';
                                        $No++;$Alfa++;
                            $html.='</div>
                                    <div class="col-3"></div>';
                            $html.='<div class="col-2">
                                        <img src='.$sofa.'>
                                        <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                        // <div>'.$Alfa.$No.'</div>';
                                        $No++;$Alfa++;
                            $html.='</div>';
                            $html.='<div class="col-2">
                                        <img src='.$sofa.'>
                                        <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                        // <div>'.$Alfa.$No.'</div>';
                                        $No++;$Alfa++;
                            $html.='</div>';
                        $html.='</div>';
                    }

                   }

                    $html.='<div class="row m-2">';
                    for ($i=1; $i <= $last_row_seat; $i++) {

                        $html.='<div class="col-2">
                                    <img src='.$seat.'>
                                    <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                    // <div>'.$Alfa.$No.'</div>';
                                    $No++;$Alfa++;
                        $html.='</div>';
                        }
                    $html.='</div>';
                    $nav=Array();
                    $nav['html']=$html;
                    $nav['total_seats']=$total_seat * 3 + $last_row_seat;

                    return response()->json($nav);

            }elseif($layout == "2 X 2")
            {
                $Alfa="A";
                $No=1;
                for ($i=1; $i <=  $total_seat; $i++) {
                    if($seat_type == 1 || $seat_type == 2)
                    {
                        $html.='<div class="row m-2">';

                                $html.='<div class="col-2">
                                            <img src='.$seat.'>
                                            <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                            // <div>'.$Alfa.$No.'</div>';
                                            $No++;$Alfa++;
                                $html.='</div>
                                        <div class="col-2">
                                            <img src='.$seat.'>
                                            <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                            // <div>'.$Alfa.$No.'</div>';
                                            $No++;$Alfa++;
                                $html.='</div>
                                        <div class="col-2"></div>';
                                $html.='<div class="col-3">
                                            <img src='.$seat.'>
                                            <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                            // <div>'.$Alfa.$No.'</div>';
                                            $No++;$Alfa++;
                                $html.=' </div>
                                        <div class="col-2">
                                            <img src='.$seat.'>
                                            <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                            // <div>'.$Alfa.$No.'</div>';
                                            $No++;$Alfa++;
                                $html.='</div>
                                </div>';
                    }

                    if($seat_type == 3)
                    {
                        $html.='<div class="row m-2">';

                                $html.='<div class="col-2">
                                            <img src='.$seat.'>
                                            <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                            // <div>'.$Alfa.$No.'</div>';
                                            $No++;$Alfa++;
                                $html.='</div>
                                        <div class="col-2">
                                            <img src='.$seat.'>
                                            <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                            // <div>'.$Alfa.$No.'</div>';
                                            $No++;$Alfa++;
                                $html.='</div>
                                        <div class="col-3"></div>';
                                $html.='<div class="col-2">
                                            <img src='.$sofa.'>
                                            <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                            // <div>'.$Alfa.$No.'</div>';
                                            $No++;$Alfa++;
                                $html.=' </div>
                                        <div class="col-2">
                                            <img src='.$sofa.'>
                                            <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                            // <div>'.$Alfa.$No.'</div>';
                                            $No++;$Alfa++;
                                $html.='</div>
                                </div>';
                    }
                   }


                        $html.='<div class="row m-2">';
                        for ($i=1; $i <= $last_row_seat; $i++) {
                            $html.='<div class="col-2">
                                        <img src='.$seat.'>
                                        <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                        // <div>'.$Alfa.$No.'</div>';
                                        $No++;$Alfa++;
                            $html.='</div>';
                            }
                        $html.='</div>';

                        $nav=Array();
                        $nav['html']=$html;
                        $nav['total_seats']=$total_seat * 4 +$last_row_seat;

                        return response()->json($nav);
                }else{

                    $Alfa="A";
                    $No=1;
                for ($i=1; $i <=  $total_seat; $i++) {
                    if($seat_type == 1 || $seat_type == 2)
                    {
                        $html.='<div class="row m-2">';
                                $html.='<div class="col-2">
                                            <img src='.$seat.'>
                                            <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                            // <div>'.$Alfa.$No.'</div>';
                                            $No++;$Alfa++;
                                    $html.='</div>
                                        <div class="col-3"></div>';
                                $html.='<div class="col-2">
                                            <img src='.$seat.'>
                                            <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                            // <div>'.$Alfa.$No.'</div>';
                                            $No++;$Alfa++;
                                $html.='</div>';
                        $html.='</div>';
                    }

                    if($seat_type == 3)
                    {
                        $html.='<div class="row m-2">';
                                $html.='<div class="col-2">
                                            <img src='.$seat.'>
                                            <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                            // <div>'.$Alfa.$No.'</div>';
                                            $No++;$Alfa++;
                                    $html.='</div>
                                        <div class="col-3"></div>';
                                $html.='<div class="col-2">
                                            <img src='.$sofa.'>
                                            <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                                            // <div>'.$Alfa.$No.'</div>';
                                            $No++;$Alfa++;
                                $html.='</div>';
                        $html.='</div>';
                    }

                   }

                   $html.='<div class="row m-2">';
                   for ($i=1; $i <= $last_row_seat; $i++) {
                   $html.='<div class="col-2">
                               <img src='.$seat.'>
                               <input type="text" class="seat_text" name="seats[]" value='.$Alfa.$No.' style="width:90%">';
                            //    <div>'.$Alfa.$No.'</div>';
                               $No++;$Alfa++;
                           $html.='</div>';
                       }
                   $html.='</div>';

                       $nav=Array();
                       $nav['html']=$html;
                       $nav['total_seats']=$total_seat * 2 + $last_row_seat;

                       return response()->json($nav);
            }


    }

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'bus_name'      =>  'required|exists:buses,id',
            'seat_type'     =>  'required|',
                // in([1,2,3])
            'bus_bath'      =>  'required',
                // in([1,2])',
            'layout'        =>  'required',
                // |in([1 X 1,1 X 2,2 X 2])',
            'total_seat'    =>  'required|integer',
            'last_row_seat' =>  'required|integer',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput($request->all());

        }

        // $bus_id_in_seat_layout=SeatLayout::select('bus_id')->where('bus_id',$request->bus_name)->first();

        // if( $bus_id_in_seat_layout == " ")
        // {
        //         $params=Array();
                $params['bus_id']=$request->bus_name;
                $params['total_seat']=$request->total_seat;
                $params['layout']=serialize($request->seats);
                $params['layout_type']=$request->layout;
                $params['no_of_seat_at_last']=$request->last_row_seat;
                $params['seat_type']=$request->seat_type;
                $params['bus_bath']=$request->bus_bath;
                $params['created_by']=Auth::guard('admin')->user()->id;

                $Save=SeatLayout::create($params);

                return redirect()->route('seat-layout');

        // }else{
        //     return "all ready exiest";
        // }

    }
}
