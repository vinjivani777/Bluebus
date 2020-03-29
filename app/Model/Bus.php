<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table = "buses";
    protected $fillable=['id', 'route_id', 'bus_type_id', 'amenities_id', 'bus_name', 'bus_reg_no', 'starting_point', 'start_time', 'ending_point', 'ending_time', 'max_seats','total_fare', 'status','vendor_id', 'created_by','created_id','dates'];
    public $timestamps = true;

    public function Bus_Type()
    {
        return $this->belongsTo('App\Model\BusType', 'bus_type_id');
    }

    public function Source()
    {
        return $this->belongsTo('App\Model\City', 'starting_point');

    }

    public function Destination()
    {
        return $this->belongsTo('App\Model\City', 'ending_point');

    }

}
