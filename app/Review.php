<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    public $timestamps = false;
    protected $primaryKey = 'id'; // or null

    protected $fillable = ['author', 'content', 'job', 'avatar'];
}
