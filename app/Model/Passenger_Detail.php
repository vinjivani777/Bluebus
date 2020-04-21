<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Passenger_Detail extends Model
{
    protected $table="passenger_details";
    protected $fillable=['user_id', 'bus_id', 'ticket_id','name','age','gender','date_of_journey', 'insurance_status', 'status'];
    public $timestamps=true;
}
