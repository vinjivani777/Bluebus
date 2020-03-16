<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DropPoint extends Model
{
    protected $table = "drop_points";
    public $timestamps = true;

    public function Bus_Name()
    {
        return $this->belongsTo('App\Model\Bus', 'bus_id');
    }

    public function Route_Name()
    {
        return $this->belongsTo('App\Model\Route', 'route_id');
    }
}
