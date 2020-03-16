<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cancellation extends Model
{
    protected $table = "cancellations";
    protected $fillable=[ 'id', 'bus_id', 'advertisement_status', 'cancel_time', 'percentage', 'flat', 'type'];
    public $timestamps = true;

    public function bus()
    {
        return $this->belongsTo('App\Model\Bus', 'bus_id');
    }
}
