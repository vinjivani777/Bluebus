<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table="vendors";
    protected $fillable=['id', 'username', 'first_name', 'last_name', 'gender', 'email', 'mobile_no', 'password', 'avatar', 'status', 'remember_token', 'token', 'otp', 'forget_token', 'referral_code', 'parent_id'];
    public $timestamps=true;

    protected $hidden = [
        'password', 'remember_token',
    ];
}
