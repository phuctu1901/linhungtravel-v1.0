<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliders';
    public $timestamps = false;
    protected $primaryKey = 'id'; // or null

    protected $fillable = ['title', 'desc', 'thumb', 'link', 'isActive'];

}
