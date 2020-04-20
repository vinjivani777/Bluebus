<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BannerHistory extends Model
{
    protected $table='banner_historys';
    protected $fillable=['id', 'banners_id', 'banners_clicked'];
    public $timestamps=true;
}
