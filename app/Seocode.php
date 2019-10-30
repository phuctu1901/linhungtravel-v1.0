<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seocode extends Model
{
    protected $table = 'seocode';
    public $timestamps = false;
    protected $primaryKey = 'id'; // or null
}
