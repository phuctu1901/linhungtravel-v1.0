<?php

namespace App\Http\Controllers\Admin;

use App\TourCategoryParent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourParentController extends Controller
{
    public function getAll()
    {
        $tourparents = TourCategoryParent::all();
//        return $tours;
        return view('admin.tour-parent.index',['tourparents' =>  $tourparents]);
    }
}
