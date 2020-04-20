<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "countrys";
    protected $fillable=['id', 'country_code', 'country_name', 'phone_code', 'status'];
    public $timestamps = true;
}

