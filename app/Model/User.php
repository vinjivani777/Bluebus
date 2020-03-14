<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";
    protected $fillable=[ 'id', 'role_id', 'username', 'first_name', 'last_name', 'gender', 'email', 'mobile_no', 'password', 'avatar', 'status', 'remember_token', 'dob', 'token', 'otp', 'forget_token', 'referral_code', 'parent_id'];
    public $timestamps = true;


    public function UserRole()
    {
        return $this->belongsTo('App\Model\UserRole', 'role_id');
    }
}
