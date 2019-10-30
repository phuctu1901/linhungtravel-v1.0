<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use App\Service;
use App\TourCategory;
use App\TourType;
use Illuminate\Http\Request;
use App\Tour;
use App\Http\Resources\Tour as TourResource;

class ServiceController extends Controller
{

    public  function  index(){
        $services = Service::all();
//        $tours = new TourResource(Tour::all());
//        $tourtype = TourType::all();
//        $tours = Tour::Where('isActive',1)->paginate(6,['id', 'title', 'location', 'rate' , 'days','nights', 'thumb', 'adult_price', 'slug']);
//        $tours = json_encode($tours);
//        return $tours;
        return view('client.service.index',['services' => $services]);
    }

    public  function  detail(){
//        $tours = new TourResource(Tour::all());
//        $tourtype = TourType::all();
//        $tours = Tour::Where('isActive',1)->paginate(6,['id', 'title', 'location', 'rate' , 'days','nights', 'thumb', 'adult_price', 'slug']);
//        $tours = json_encode($tours);
//        return $tours;
        return view('client.service.detail');
    }

    public function getServiceBySlug($tour_cat_slug){
        $tour_category=TourCategory::Where('slug',$tour_cat_slug)->firstOrFail();
        $tourtype = TourType::all();
        $tours = Tour::Where('category_id', $tour_category->id)->where('isActive',1)->paginate(6,['id', 'title', 'location', 'rate' , 'days','nights', 'thumb', 'adult_price', 'slug']);
        return view('client.tour-list.index',['tours' => $tours,'tourtype'=>$tourtype, 'category'=>$tour_category]);
    }


    public  function  getTourInDay(){
//        $tours = new TourResource(Tour::all());
        $tourtype = TourType::all();
        $tours = Tour::Where('nights',0)->paginate(6,['id', 'title', 'location', 'rate' , 'days','nights', 'thumb', 'adult_price', 'slug']);
//        $tours = json_encode($tours);
//        return $tours;
        return view('client.tour-list.index',['tours' => $tours,'tourtype'=>$tourtype]);
    }

    public  function  getTourMultiDay(){
//        $tours = new TourResource(Tour::all());
        $tourtype = TourType::all();
        $tours = Tour::Where('nights','>',0)->paginate(6,['id', 'title', 'location', 'rate' , 'days','nights', 'thumb', 'adult_price', 'slug']);
//        $tours = json_encode($tours);
//        return $tours;
        return view('client.tour-list.index',['tours' => $tours,'tourtype'=>$tourtype]);
    }

    public function getTourInDayByCategory($tour_cat_slug){
        $tour_category=TourCategory::Where('slug',$tour_cat_slug)->firstOrFail();
        $tourtype = TourType::all();
        $tours = Tour::Where('category_id', $tour_category->id)->where('nights',0)->paginate(6,['id', 'title', 'location', 'rate' , 'days','nights', 'thumb', 'adult_price', 'slug']);
        return view('client.tour-list.index',['tours' => $tours,'tourtype'=>$tourtype, 'category'=>$tour_category]);
    }

    public function getTourMultiDayByCategory($tour_cat_slug){
        $tour_category=TourCategory::Where('slug',$tour_cat_slug)->firstOrFail();
        $tourtype = TourType::all();
        $tours = Tour::Where('category_id', $tour_category->id)->where('nights','>',0)->paginate(6,['id', 'title', 'location', 'rate' , 'days','nights', 'thumb', 'adult_price', 'slug']);
        return view('client.tour-list.index',['tours' => $tours,'tourtype'=>$tourtype, 'category'=>$tour_category]);
    }

//        public function detail($tour_slug)
//        {
//            $tour = Tour::Where('slug', $tour_slug)
//                ->firstOrFail();
//            $images =  json_decode($tour->images);
//            $highlights =  json_decode($tour->highlights);
//            $tour->highlights=$highlights;
//            $itinerary =  json_decode($tour->itinerary);
//            $tour->tourtype;
//            return ['tour'=>$tour,  'images'=>$images, 'itineraries'=>$itinerary];
//        }
}
