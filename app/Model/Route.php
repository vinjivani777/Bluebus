<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $table = "routes";
    public $timestamps = false;

    public function source()
    {
        return $this->belongsTo('App\Model\City', 'source_point');
    }
    public function destination()
    {
        return $this->belongsTo('App\Model\city', 'destination_point');
    }

}
