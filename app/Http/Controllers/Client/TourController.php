<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use App\TourCategoryParent;
use App\TourType;
use Illuminate\Http\Request;
use App\Tour;
use App\Http\Resources\Tour as TourResource;

class TourController extends Controller
{


    public function show($tour_slug)
    {
        $tour = Tour::Where('slug', $tour_slug)
            ->firstOrFail();

        $images =  json_decode($tour->images);
        $highlights =  json_decode($tour->highlights);
        $tour->highlights=$highlights;
        $itinerary =  json_decode($tour->itinerary);
        $tour->tourtype;
        $tourtype = TourType::all();
//        $itinerary =  $tour->itinerary;
//        return $itinerary;
        if ($tour->nights==0){
            return view('client.tour-detail.oneday',['tour'=>$tour, 'images'=>$images, 'itineraries'=>$itinerary, 'tourtype'=>$tourtype]);

        }else{
            return view('client.tour-detail.multiday',['tour'=>$tour, 'images'=>$images, 'itineraries'=>$itinerary, 'tourtype'=>$tourtype]);

        }
    }


    public function detail($tour_slug)
    {
        $tour = Tour::Where('slug', $tour_slug)
            ->firstOrFail();
        $images =  json_decode($tour->images);
        $highlights =  json_decode($tour->highlights);
        $tour->highlights=$highlights;
        $itinerary =  json_decode($tour->itinerary);
        $tour->tourtype;
        return ['tour'=>$tour,  'images'=>$images, 'itineraries'=>$itinerary];
    }


}
