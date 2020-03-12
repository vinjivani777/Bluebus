<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admins";
    protected $fillable=[ 'id', 'username', 'first_name', 'last_name', 'gender', 'email', 'mobile_no', 'password', 'avatar', 'status', 'remember_token', 'dob', 'token', 'otp', 'forget_token', 'referral_code'];
    public $timestamps = true;
}
