<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PromoCode extends Model
{
    public $timestamps=true;
    protected $table="promocodes";
    protected $fillable=[ 'id', 'promocode', 'start_date', 'expiry_date', 'description', 'discount_type', 'amount', 'max_amount', 'usage_count', 'indivisual_use', 'exclude_bus_id', 'include_bus_id', 'min_order_amount', 'promocode_image', 'created_by', 'status'];

    public function Bus_Name1()
    {
        return $this->belongsTo('App\Model\Bus', 'include_bus_id');
    }
    public function Bus_Name2()
    {
        return $this->belongsTo('App\Model\Bus', 'exclude_bus_id');
    }
}

