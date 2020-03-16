<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $table = "routes";
    public $timestamps = true;

    public function Bus_Name()
    {
        return $this->belongsTo('App\Model\Bus', 'bus_id');
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
