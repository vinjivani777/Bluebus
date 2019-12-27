<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";
    protected $fillable=[ 'id','user_id','username','password','name','dob','image','gender','mob','reset_key'];
    public $timestamps = false;
}
