<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact_us_request extends Model
{
    protected $table="contact_us_request";
    protected $fillable=[ 'id', 'firstname', 'lastname', 'email', 'message'];
    public $timestamps=true;
}
