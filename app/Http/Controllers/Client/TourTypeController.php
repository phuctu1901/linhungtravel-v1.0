<?php

namespace App\Http\Controllers\Client;

use App\TourType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourTypeController extends Controller
{
    public function all()
    {
        $tourtype = TourType::all();
        return ['tourtype'=>$tourtype];
    }
}
