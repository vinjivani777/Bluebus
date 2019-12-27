<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admin";
    protected $fillable=[ 'id', 'username','email','mobile_no','password', 'profile_picture', 'status', 'user_type'];
    public $timestamps = false;

}
