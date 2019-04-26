<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tack extends Model
{
    public function horse()
    {
        return $this->belongsTo(Horse::class);
    }
}
