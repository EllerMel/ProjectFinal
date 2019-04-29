<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{
    protected $fillable = [
        'name', 'gender', 'color',
    ];
}
