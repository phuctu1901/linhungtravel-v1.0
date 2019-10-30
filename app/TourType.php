<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourType extends Model
{
    protected $table='tourtype';
    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }
}
