<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table="pages";
    protected $fillable=['id', 'slug', 'sortorder', 'status'];
    public $timestamps=true;
}
