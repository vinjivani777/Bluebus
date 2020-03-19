<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table="menus";
    protected $fillable=['id', 'name', 'sort_order', 'sub_sort_order', 'parant_id', 'link', 'page_id', 'type', 'status'];
    public $timestamps=true;
}
