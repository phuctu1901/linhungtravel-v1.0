<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use App\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostCategoryController extends Controller
{
    //
    public  function getAll(){
        $post_categories = PostCategory::all();
        return view('admin.post-category.index', ['post_categories' => $post_categories]);
    }

    public function addview()
    {
        return view('admin.post-category.add');
    }


    public function addRequest(Request $request)
    {
        $title = $request->title;
        $desc = $request->desc;
        $isActive = (int) $request->isActive;
        $displayOrder=$request->displayOrder;
        $metaTitle = $request->meta_title;
        $metaDesc = $request->meta_desc;
        $metaKeyword = $request->meta_kw;

        $post_category = new PostCategory([
            'title' => $title,
            'desc'=>$desc,
            'displayOrder'=>$displayOrder,
            'metaTitle'=>$metaTitle,
            'metaDesc'=>$metaDesc,
            'metaKeyword'=>$metaKeyword,
            'isActive' => $isActive,
        ]);
        $post_category->save();
        return redirect('/admin/postcategory');
    }

    public function editView($post_category_id)
    {
        $post_category= PostCategory::find($post_category_id);
        return view('admin.post-category.edit', ['post_category' =>  $post_category]);
    }

    public function editRequest(Request $request)
    {
        $id = $request->id;
        $post_category= PostCategory::find($id);
        $post_category->title=$request->title;
        $post_category->desc=$request->desc;
        $post_category->displayOrder=$request->displayOrder;
        $post_category->slug=$request->slug;
        $post_category->isActive=(int) $request->isActive;
        $post_category->metaTitle=$request->meta_title;
        $post_category->metaDesc=$request->meta_desc;
        $post_category->metaKeyword=$request->meta_kw;



        $post_category->save();
        return redirect('/admin/postcategory');
    }
    public function delete($post_category_id)
    {
        $post_category= PostCategory::find($post_category_id);
        $post_category->delete();
        return redirect()->back()->with('alert', 'Updated!');
    }

}
