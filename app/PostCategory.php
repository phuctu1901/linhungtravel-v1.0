<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use Sluggable;

    protected $table = 'post_category';
    public $timestamps = false;
    protected $primaryKey = 'id'; // or null
    protected $fillable = ['title', 'slug', 'desc', 'displayOrder', 'isActive', 'metaTitle', 'metaKeyword', 'metaDesc'];

//    public $incrementing = false;
//    protected $dateFormat = 'd-m-Y';
//    protected $fillable = ['name','parent_id'];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
