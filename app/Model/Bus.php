<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table = "buses";
    public $timestamps = false;

    public function Bus_Type()
    {
        return $this->belongsTo('App\Model\BusType', 'bus_type_id');
    }

    public function Source()
    {
        return $this->belongsTo('App\Model\City', 'source_point');

    }

    public function Destination()
    {
        return $this->belongsTo('App\Model\City', 'destination_point');

    }

}
