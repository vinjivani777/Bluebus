<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = "booking_details";
    protected $fillable=['id','booking_id','amount', 'bus_id', 'route_id', 'boarding_point_id', 'vendor_id','customer_id','ticket_no', 'total_fare','note','insurance_policy','payment_status','seat_no', 'payment_status', 'payment_methos', 'booking_date', 'booking_status','created_by'];
    public $timestamps = true;

    public function customer()
    {
        return $this->belongsTo('App\Model\Customer','booking_id');
    }

    public function bus()
    {
        return $this->belongsTo('App\Model\Bus','bus_id');
    }

    public function vendor()
    {
        return $this->belongsTo('App\Model\Vendor','vendor_id');
    }

    public function route()
    {
        return $this->belongsTo('App\Model\Route','route_id');
    }

    public function start()
    {
        return $this->belongsTo('App\Model\BoardPoint','board_point_id');
    }

    public function end()
    {
        return $this->belongsTo('App\Model\DropPoint','drop_point_id');
    }
}
