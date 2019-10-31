<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';
    public $timestamps = false;
    public  $incrementing = true;
    protected $primaryKey = 'id'; // or null
    public  $fillable=['quytrinh', 'lienhe','phuluc'];
}
