<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;

use App\Review;
use App\Tour;
use App\TourCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function  index(){
        $reviews = Review::all();
        $tours_trending = Tour::where('isTrending',1)->where('isActive',1)->get();
//        return $tours_trending;
        $tours_top_destinations = TourCategory::where('isActive',1)->orderBy('count', 'DESC')->limit(5)->get();
//        return $tours_top_destinations;
        $tours_latest = Tour::where('isActive',1)->orderBy('updated_at','DESC')->limit(10)->get();
        return view('client.home.index',['trendingTours'=> $tours_trending,'top_destinations'=>$tours_top_destinations,'latest_tours'=>$tours_latest, 'reviews'=>$reviews]);
    }
}
