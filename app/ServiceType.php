<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{

    protected $table = 'servicetypes';
    public $timestamps = true;
    protected $primaryKey = 'id'; // or null
    protected $fillable = ['title'];
}