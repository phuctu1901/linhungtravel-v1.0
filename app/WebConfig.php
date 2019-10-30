<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebConfig extends Model
{
    protected $table = 'web_config';
    public $timestamps = false;
    protected $primaryKey = 'id'; // or null
}
