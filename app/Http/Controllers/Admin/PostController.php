<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\PostCategory;
use App\TourCategory;
use App\TourCategoryParent;
use App\TourType;
use Illuminate\Http\Request;
use App\Tour;

class PostController extends Controller
{
    public function getAll()
    {
        $posts = Post::all();
        $posts->each->postcategory;

        return view('admin.post.index', ['posts' => $posts]);
    }

    public function addview()
    {
        $postcategories=PostCategory::all();
        return view('admin.post.add', ['postcategories'=>$postcategories]);
    }

    public function addRequest(Request $request)
    {

        $title = $request->title;
        $category_id = $request->category_id;
        $content = json_encode($request->post_content);
        $thumb=$request->thumb_data;
        $metaTitle = $request->meta_title;
        $metaDesc = $request->meta_desc;
        $metaKeyword = $request->meta_kw;
        $isActive = (int) $request->isActive;

        $post = new Post([
            'title' => $title,
            'thumb' => $thumb,
            'category_id'=>$category_id,
            'content'=>$content,
            'metaTitle'=>$metaTitle,
            'metaDesc'=>$metaDesc,
            'metaKeyword'=>$metaKeyword,
            'isActive' => $isActive,
        ]);
        $post->save();
//
        return redirect('/admin/post');

    }

    public function editview($post_id)
    {
        $post = Post::find($post_id);
        $postcategories=PostCategory::all();
        return view('admin.post.edit', ['post' => $post, 'postcategories'=>$postcategories]);
    }





    public function editRequest(Request $request)
    {
        $id=$request->id;
        $post=Post::find($id);
        $post->title=$request->title;
        $post->content=json_encode($request->post_content);
        $post->slug=$request->slug;
        $post->category_id=$request->category_id;
        $post->thumb=$request->thumb_data;
        $post->isActive=(int) $request->isActive;
        $post->metaTitle=$request->meta_title;
        $post->metaDesc=$request->meta_desc;
        $post->metaKeyword=$request->meta_kw;
        $post->save();
       return redirect('/admin/post');

    }

    public function delete($post_id)
    {
        $post = Post::find($post_id);
        $post->delete();
        return redirect()->back()->with('alert', 'Updated!');
    }
}
