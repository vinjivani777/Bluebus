<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contect_Diary extends Model
{
    protected $table = "contect_diarys";
    protected $fillable=['id', 'ticket_no', 'country_code', 'mobile_no', 'email' ,'customer_id'];
    public $timestamps = true;
}
