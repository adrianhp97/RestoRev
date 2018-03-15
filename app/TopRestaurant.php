<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopRestaurant extends Model
{
    protected $table = "top_restaurant";

    protected $fillable = [
        'restaurant_id'
    ];
}
