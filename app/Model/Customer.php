<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";
    protected $fillable=[ 'id', 'customer_name', 'age', 'mobile', 'email', 'gender', 'booking_id', 'order_id', 'seat_no'];
    public $timestamps = true;

}
