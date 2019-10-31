<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $table = 'contactforms';
    public $timestamps = true;
    public  $incrementing = false;
    protected $dateFormat = 'd-m-Y';
    protected $primaryKey = 'id'; // or null
    public  $fillable=['name','title', 'email','phone','content','created_at','updated_at','isRep'];
}
