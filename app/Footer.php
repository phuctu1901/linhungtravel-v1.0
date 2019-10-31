<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $table = 'footer';
    public $timestamps = false;
    public  $incrementing = true;
    protected $primaryKey = 'id'; // or null
    public  $fillable=['title', 'pnumber'];
}
