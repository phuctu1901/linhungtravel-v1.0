<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'contact_info';
    public $timestamps = false;
    protected $primaryKey = 'id'; // or null
}
