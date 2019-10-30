<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable;

    protected $table='posts';
    protected $primaryKey = 'id'; // or null
    protected $dateFormat = 'd-m-Y';
    protected $fillable = ['title', 'category_id','slug','thumb', 'content','metaTitle','metaKeyword','metaDesc', 'isActive'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public function postcategory()
    {
        return $this->hasOne(PostCategory::class, 'id', 'category_id');
    }
}
