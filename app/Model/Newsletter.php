<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $table="newsletters";
    protected $fillable=['id','email'];
    public $timestamps=true;
}
