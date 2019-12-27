<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cancellation extends Model
{
    protected $table = "cancellation";
    protected $fillable=[ 'id', 'bus_id', 'advertisement_status', 'cancel_time', 'percentage', 'flat', 'type'];
    public $timestamps = false;

    public function bus()
    {
        return $this->belongsTo('App\Model\Bus', 'bus_id');
    }
}
