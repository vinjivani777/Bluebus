<?php

namespace App\Http\Controllers\Web;

use App\Model\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BusFindController extends Controller
{
    public function busimage(Request $id)
    {
        $find_bus_image=Gallery::select('id','image')->whereBus_id($id->id)->first();

        $html="";
        $html.='<div id="carouselExample" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExample" data-slide-to="0" class=""></li>
                        <li data-target="#carouselExample" data-slide-to="1" class=""></li>
                        <li data-target="#carouselExample" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item  carousel-item-center">
                            <img class="d-block img-fluid" src='.asset('/'.$find_bus_image->image).' alt="First slide">
                        </div>
                        <div class="carousel-item carousel-item-center">
                            <img class="d-block img-fluid" src='.asset('/'.$find_bus_image->image).' alt="Third slide">
                        </div>
                        <div class="carousel-item carousel-item-center">
                            <img class="d-block img-fluid" src='.asset('/'.$find_bus_image->image).' alt="Third slide">
                        </div>
                    </div>
                </div>';

        return $html;
    }
}
