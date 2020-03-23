<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "bus_gallarys";
    protected $fillable=['id', 'bus_id', 'slug', 'image_path','created_by','created_id'];
    public $timestamps = true;

    public function bus()
    {
        return $this->belongsTo('App\Model\Bus','bus_id');
    }
}
