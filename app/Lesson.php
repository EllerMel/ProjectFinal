<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function student(){
        return $this->belongsTo('App\Individual', 'studentID', 'id');
    }

    public function instructor(){
        return $this->belongsTo('App\Individual', 'instructorID', 'id');
    }

    public function horse(){
        return $this->belongsTo('App\Horse', 'horseID', 'id');
    }

    public function location(){
        return $this->belongsTo('App\Location', 'locationID', 'id');
    }
}
