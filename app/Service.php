<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use Sluggable;


    protected $table='services';
    protected $primaryKey = 'id'; // or null
    public $incrementing = true;
    public  $timestamps = false;
    protected $fillable = ['servicetype_id','title', 'giagoc','giasaukhigiam', 'thumb','isPr','isActive','slug', 'content'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */



    public function servicetype()
    {
        return $this->hasOne(ServiceType::class, 'id', 'servicetype_id');
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
