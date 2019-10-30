<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use Sluggable;

    protected $table='tours';
    protected $primaryKey = 'id'; // or null
    public $incrementing = false;
    protected $dateFormat = 'd-m-Y';
    protected $fillable = ['title', 'highlights','thumb', 'overview','adult_price', 'images', 'tourtype_id', 'itinerary','days', 'nights','location','category_id', 'price_included', 'price_excluded', 'notes'];

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

    public function tourtype()
    {
        return $this->hasOne(TourType::class, 'id', 'tourtype_id');
    }

    public function tourcategory()
    {
        return $this->hasOne(TourCategory::class, 'id', 'category_id');
    }
}
