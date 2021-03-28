<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $guarded = [];
    protected $casts = [
        'img' => 'array'
    ];

}
