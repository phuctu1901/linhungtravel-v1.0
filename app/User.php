<?php

namespace App;

use Laravel\Passport\HasApiTokens;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use HasApiTokens, Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'id'; // or null
    public $incrementing = true;
/**
* The attributes that are mass assignable.
*
* @var array
*/
    protected $fillable = [
        'name', 'email', 'password', 'username','isActive',
    ];

/**
* The attributes that should be hidden for arrays.
*
* @var array
*/

protected $hidden = [
'password', 'remember_token',
];

}
