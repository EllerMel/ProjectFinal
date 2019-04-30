<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{
    protected $fillable = [
        'name', 'gender', 'color',
    ];

    public function pasture(){
        return $this->belongsTo('App\Location', 'pastureID', 'id');
    }
}
