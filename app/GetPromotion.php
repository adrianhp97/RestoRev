<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GetPromotion extends Model
{
    protected $table = "get_promotion";
    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'restaurant_id'
    ];
}
