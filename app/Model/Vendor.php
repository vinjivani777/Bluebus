<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table="vendor";
    protected $fillable=['id', 'username', 'password', 'first_name', 'last_name', 'email', 'phone_number', 'company_name', 'profile_picture', 'logo', 'address', 'city', 'state', 'status','remember_token'];
    public $timestamps=false;
}
