<?php

namespace App\Http\Controllers\Admin;
use App\Calendar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public  function  index(){
        $calendar = Calendar::all()->first();
        return view('admin.dashboard.index',['calendar'=>$calendar]);
    }
}
