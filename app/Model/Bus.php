<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table = "bus";
    public $timestamps = false;

    public function Bus_Type()
    {
        return $this->belongsTo('App\Model\BusType', 'bus_type_id');
    }

}
