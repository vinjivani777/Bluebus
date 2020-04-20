<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PageDescription extends Model
{
    protected $table="pages_description";
    protected $fillable=['id','name','description','page_id'];
    public $timestamps=true;
}
