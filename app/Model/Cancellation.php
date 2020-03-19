<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cancellation extends Model
{
    protected $table = "bus_cancellations";
    protected $fillable=[ 'id', 'bus_id', 'route_id', 'cancellation_date','cancellation_time', 'compensation_amount','refund_amount', 'note'];
    public $timestamps = true;

    public function bus()
    {
        return $this->belongsTo('App\Model\Bus', 'bus_id');
    }
    public function route()
    {
        return $this->belongsTo('App\Model\Route', 'route_id');
    }
}
