<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table='banners';
    protected $fillable=['id', 'banner_title', 'banners_url', 'banners_image', 'banners_group', 'banners_slug', 'type', 'expires_date', 'status'];
    public $timestamps=true;

}
