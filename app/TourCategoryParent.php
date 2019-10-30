<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class TourCategoryParent extends Model
{
    //
    use Sluggable;

    protected $table='tour_parent';
    protected $primaryKey = 'id'; // or null
//    public $incrementing = false;
//    protected $dateFormat = 'd-m-Y';
//    protected $fillable = ['title', 'highlights','thumb', 'overview','adult_price', 'images', 'tourtype_id', 'itinerary','days', 'nights','location',];

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

    public function tourcategory()
    {
        return $this->belongsTo('App\TourCategory');
    }

}
