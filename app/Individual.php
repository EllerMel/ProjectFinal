<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    protected $fillable = [
        'displayName', 'user_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
