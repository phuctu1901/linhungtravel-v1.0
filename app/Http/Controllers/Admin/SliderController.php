<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use App\TourCategory;
use App\TourCategoryParent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public  function getAll(){
        $sliders = Slider::all();
        return view('admin.slider.index', ['sliders' => $sliders]);
    }

    public function addView()
    {
        return view('admin.slider.add');
    }

    public function addRequest(Request $request)
    {
        $title = $request->slider_title;
        $desc = $request->slider_desc;
        $isActive = (int) $request->isActive;
        $thumb = $request->slider_thumb_data;
        $link = $request->slider_link;
        $slider = new Slider([
            'title' => $title,
            'desc' => $desc,
            'link' => $link,
            'isActive' => $isActive,
            'thumb' => $thumb
        ]);
        $slider->save();
        $sliders = Slider::all();
        return view('admin.slider.index',['sliders'=>$sliders]);

    }

    public function editView($slider_id)
    {
        $slider = Slider::find($slider_id);
        return view('admin.slider.edit', ['slider' => $slider]);
    }

    public function editRequest(Request $request)
    {
        $id = $request->id;

        $slider = Slider::find($id);
        $slider->title = $request->slider_title;
        $slider->desc = $request->slider_desc;
        $slider->thumb= $request->slider_thumb_data;
        $slider->link=$request->slider_link;
        $slider->isActive = (int) $request->isActive;


        $slider->save();
        $sliders = Slider::all();
        return view('admin.slider.index', ['sliders' => $sliders]);
    }

    public function delete($slider_id)
    {
        $slider = Slider::find($slider_id);
        $slider->delete();
        return redirect()->back()->with('alert', 'Updated!');
    }

    public function detail($slider_id)
    {
        $slider = Slider::find($slider_id);
        return view('admin.slider.detail', ['slider' => $slider]);
    }


}
