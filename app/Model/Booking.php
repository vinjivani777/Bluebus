<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = "booking_details";
    protected $fillable=['id','booking_id','amount', 'bus_id', 'rout_id', 'boarding_point_id', 'user_id', 'seat_no', 'payment_status', 'payment_option', 'booking_date', 'status'];
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo('App\Model\Customer','booking_id');
    }

    public function bus()
    {
        return $this->belongsTo('App\Model\Bus','bus_id');
    }
}
