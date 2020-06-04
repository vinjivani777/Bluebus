<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = "ratings";
    protected $fillable=[  'id', 'user_id', 'bus_id', 'rate', 'description','type'];
    public $timestamps = true;

    public function bus()
    {
        return $this->belongsTo('App\Model\Bus', 'bus_id',);
    }
}
