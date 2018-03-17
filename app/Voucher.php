<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = "voucher";

    protected $fillable = [
        'code',
        'name',
        'restaurant_id',
        'description',
        'valid_from',
        'valid_until',
        'img_url'
    ];
}
