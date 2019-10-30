<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class TourCategory extends Model
{
    use Sluggable;

    protected $table = 'tour_category';
    public $timestamps = false;
    protected $primaryKey = 'id'; // or null
    protected $fillable = ['title', 'thumb', 'desc', 'parent_id', 'isActive'];

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
    public function tourcategoryparent()
    {
        return $this->hasOne(TourCategoryParent::class, 'id', 'parent_id');
    }


}
