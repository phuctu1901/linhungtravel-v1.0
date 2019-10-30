<?php

namespace App\Http\Controllers\Admin;

use App\TourCategory;
use App\TourCategoryParent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourCategoryController extends Controller
{
    public function getAll()
    {
        $tourcategories = TourCategory::all();
        $tourcategories->each->tourcategoryparent;
//        return $tourcategories;
        return view('admin.tour-category.index', ['tourcategories' => $tourcategories]);
    }

    public function addView()
    {
        $tourparents = TourCategoryParent::all();
        return view('admin.tour-category.add', ['tourparents' => $tourparents]);
    }

    public function addRequest(Request $request)
    {
        $title = $request->category_title;
        $desc = $request->desc;
        $isActive = (int) $request->isActive;
        $thumb = $request->category_thumb_data;
        $parent_id = $request->parent_id;
        $tour_category = new TourCategory([
            'title' => $title,
            'thumb' => $thumb,
            'desc' => $desc,
            'isActive' => $isActive,
            'parent_id' => $parent_id
        ]);
        $tour_category->save();
        $tourcategories = TourCategory::all();
        $tourcategories->each->tourcategoryparent;
        return view('admin.tour-category.index', ['tourcategories' => $tourcategories]);

    }

    public function editView($tour_category_id)
    {
        $tour_category = TourCategory::find($tour_category_id);
        $tourparents = TourCategoryParent::all();
        return view('admin.tour-category.edit', ['tour_category' =>  $tour_category,'tourparents' => $tourparents]);
    }

    public function editRequest(Request $request)
    {
        $id = $request->id;
        $tour_category = TourCategory::find($id);
        $tour_category->title = $request->category_title;
        $tour_category->thumb =  $request->category_thumb_data;
        $tour_category->desc =$request->desc;
        $tour_category->isActive = (int) $request->isActive;
        $tour_category->parent_id = $request->parent_id;

        $tour_category->save();
        $tourcategories = TourCategory::all();
        $tourcategories->each->tourcategoryparent;
        return view('admin.tour-category.index', ['tourcategories' => $tourcategories]);
    }
    public function delete($tour_category_id)
    {
        $tour_category = TourCategory::find($tour_category_id);
        $tour_category->delete();
        return redirect()->back()->with('alert', 'Updated!');
    }
}
