<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $table = "route";
    public $timestamps = false;

    public function Bus_Name()
    {
        return $this->belongsTo('App\Model\Bus', 'bus_id');
    }

}
