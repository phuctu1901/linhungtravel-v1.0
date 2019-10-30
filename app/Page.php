<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Sluggable;

    protected $table = 'pages';
    public $timestamps = false;
    protected $primaryKey = 'id'; // or null
    protected $fillable = ['title', 'content', 'isActive', 'metaTitle','metaKeyword','metaDesc','slug'];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
