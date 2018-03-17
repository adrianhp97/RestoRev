<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = "restaurant";
    protected $primaryKey = "restaurant_id";

    protected $fillable = [
        'restaurant_id',
        'name',
        'address',
        'city',
        'phone_number',
        'price_bottom',
        'price_top',
        'img_url'
    ];
}
