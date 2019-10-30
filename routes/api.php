<?php

use Illuminate\Http\Request;
use App\Tour;
use App\Http\Resources\Tour as TourResource;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Auth::routes();

Route::get('/tour', function () {
    $tours = Tour::where('isActive',1)->get();
    return $tours;
});

Route::get('/tourcategory', function () {
    $tours = \App\TourCategory::where('isActive',1)->get();
    return $tours;
});



Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::post('/sum','Test\TestController@sum');


Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'API\UserController@details');

});


