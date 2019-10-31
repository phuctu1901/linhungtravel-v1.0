<?php

namespace App\Http\Controllers\Client;

use App\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public  function  index(){
        $car = Car::all()->first();
        return view('client.car.index',['car'=>$car]);
    }
}
