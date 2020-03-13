<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "citys";
    protected $fillable=['id', 'city_name', 'state_id', 'status'];
    public $timestamps = true;
}
