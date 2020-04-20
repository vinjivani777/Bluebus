<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SeatLayout extends Model
{
    protected $table = "seat_layouts";
    protected $fillable=['id', 'bus_id', 'total_seat', 'seat_type', 'bus_bath', 'layout', 'layout_type', 'no_of_seat_at_last', 'created_by'];
    public $timestamps = true;

    public function Bus()
    {
        return $this->belongsTo('App\Model\Bus');
    }

}
