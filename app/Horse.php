<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{
    public function tack()
    {
        return $this->hasMany(Tack::class);
    }
}
