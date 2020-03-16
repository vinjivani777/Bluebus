<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BusType extends Model
{
    protected $table = "bus_types";
    protected $fillable=['id', 'type_name', 'description', 'status'];
    public $timestamps = true;
}
