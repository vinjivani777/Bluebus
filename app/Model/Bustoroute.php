<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bustoroute extends Model
{
    protected $table='bustoroutes';
    protected $fillable=['id','bus_id','route_id'];
    public $timestamps=true;
}
