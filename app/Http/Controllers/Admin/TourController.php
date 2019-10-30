<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TourCategory;
use App\TourCategoryParent;
use App\TourType;
use Illuminate\Http\Request;
use App\Tour;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
//        return $tours;
        return view('admin.tour.index', ['tours' => $tours]);
    }

    public function addview()
    {
        $tourtype = TourType::all();
        $tourparents=TourCategoryParent::all();
        return view('admin.tour.add', ['tourtype' => $tourtype, 'tourparents'=>$tourparents]);
    }

    public function getCategoryByParentId($parent_id){
        $tour_categories=TourCategory::where('parent_id','=',$parent_id)->get();
        return ['tour_categories'=>$tour_categories];
    }

    public function editview($tour_id)
    {
        $tour = Tour::find($tour_id);
        $tourtype = TourType::all();
        $itinerary = json_decode($tour->itinerary);
        $images = json_decode($tour->images);
        return view('admin.tour.edit', ['tour' => $tour, 'tourtype' => $tourtype, 'itineraries' => $itinerary, 'images' => $images]);
    }

    public function deleteTour($tour_id)
    {
        $tour = Tour::find($tour_id);
        $tour->delete();
        return redirect()->back()->with('alert', 'Updated!');
    }

    public function addRequest(Request $request)
    {

        $title = $request->tour_name;
        $category_id = $request->tourcategory_id;
        $location = $request->location;
        $highlights = json_encode($request->highlights);
        $itinerary_name = $request->itinerary_name;
        $itinerary_desc = $request->itinerary_desc;
        $itinerary_image = $request->itinerary_image;
        $thumb = $request->thumb;
        $adult_price = $request->adult_price;
        $overview = $request->overview;
        $images = $request->images;
        $days = $request->days;
        $nights = $request->nights;
        $tourtype_id = $request->tourtype_id;
        $price_include = json_encode($request->price_include);
        $price_exclude = json_encode($request->price_exclude);
        $tour_policy=json_encode($request->tour_policy);
        $index = 0;
        $itinerary = '[';

        foreach ($itinerary_image as $image) {
            if ($index > 0) {
                $itinerary = $itinerary . ',';
            }

            $itinerary = $itinerary . '{"image": "' . $image . '","name":"' . $itinerary_name[$index] . '", "description":' . json_encode($itinerary_desc[$index]) . '}';
            $index++;

        }
        $itinerary = $itinerary . ']';

        $str_images = '[';
        $count_images = 0;
        foreach ($images as $image) {
            if ($count_images > 0) {
                $str_images = $str_images . ',';
            }

            $str_images = $str_images . '"' . $image . '"';
            $count_images++;
        }
        $str_images = $str_images . ']';
        $tour = new Tour([
            'title' => $title,
            'thumb' => $thumb,
            'overview' => $overview,
            'adult_price' => $adult_price,
            'images' => $str_images,
            'days' => $days,
            'nights' => $nights,
            'price_included'=>$price_exclude,
            'price_excluded'=>$price_exclude,
            'notes'=>$tour_policy,
            'tourtype_id' => $tourtype_id,
            'location' => $location,
            'itinerary' => $itinerary,
            'highlights' => $highlights,
            'category_id'=>$category_id
        ]);
//        return ['tour'=>$tour,'image'=> $str_images, 'itinerary'=>$itinerary];
        $tour->save();
//        echo $tour;
        return redirect()->back()->with('alert', 'Updated!');
//        return $tour;
//        return view('admin.index', ['result' => $result]);

    }

    public function editRequest(Request $request)
    {
        $id = $request->id;
        $tour = Tour::find($id);
        $title = $request->tour_name;
        $location = $request->location;
        $highlights = json_encode($request->highlights);
        $itinerary_name = $request->itinerary_name;
        $itinerary_desc = $request->itinerary_desc;
        $itinerary_image = $request->itinerary_image;
        $thumb = $request->thumb;
        $adult_price = $request->adult_price;
        $overview = $request->overview;
        $images = $request->images;
        $days = $request->days;
        $nights = $request->nights;
        $tourtype_id = $request->tourtype_id;
        $index = 0;
        $itinerary = '[';

        foreach ($itinerary_image as $image) {
            if ($index > 0) {
                $itinerary = $itinerary . ',';
            }

            $itinerary = $itinerary . '{"image": "' . $image . '","name":"' . $itinerary_name[$index] . '", "description":' . json_encode($itinerary_desc[$index]) . '}';
            $index++;

        }
        $itinerary = $itinerary . ']';

        $str_images = '[';
        $count_images = 0;
        foreach ($images as $image) {
            if ($count_images > 0) {
                $str_images = $str_images . ',';
            }

            $str_images = $str_images . '"' . $image . '"';
            $count_images++;
        }
        $str_images = $str_images . ']';

        $tour->title = $title;
        $tour->thumb = $thumb;
        $tour->overview = $overview;

        $tour->adult_price = $adult_price;
        $tour->images = $str_images;
        $tour->days = $days;
        $tour->nights = $nights;
        $tour->tourtype_id = $tourtype_id;
        $tour->location = $location;
        $tour->itinerary = $itinerary;
        $tour->highlights = $highlights;;
//        return ['tour'=>$tour,'image'=> $str_images, 'itinerary'=>$itinerary];
        $tour->save();
//        echo $tour;
        return redirect()->back()->with('alert', 'Updated!');
//        return $tour;
//        return view('admin.index', ['result' => $result]);

    }
}
