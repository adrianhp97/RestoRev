<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = "review";
    protected $primaryKey = "review_id";

    protected $fillable = [
        'restaurant_id',
        'name',
        'email',
        'review',
        'rating'
    ];
}
