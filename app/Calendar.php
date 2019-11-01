<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $table = 'calendar';
    public $timestamps = false;
    protected $primaryKey = 'id'; // or null
    protected $fillable =['content'];
}
