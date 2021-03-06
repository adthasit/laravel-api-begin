<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    protected $fillable = [
        'brand',
        'gene',
        'year',
        'description',
        'vote',
        'image'
    ];

    public $timestamps = true;
}
