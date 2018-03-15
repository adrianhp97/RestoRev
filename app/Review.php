<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = "review";

    protected $fillable = [
        'restaurant_id',
        'name',
        'email',
        'review',
        'rating'
    ];
}
