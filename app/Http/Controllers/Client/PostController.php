<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Post;
use App\PostCategory;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::where('isActive', 1)->paginate(1);
        $post_categories = PostCategory::where('isActive', 1)->get(['id', 'title']);
//        return $posts;

        return view('client.post.index', ['posts' => $posts, 'post_categories' => $post_categories]);
    }

    public function getPostByCategorySlug($post_category_slug)
    {
        $post_category = PostCategory::Where('slug', $post_category_slug)->firstOrFail();
        $post_categories = PostCategory::where('isActive', 1)->get(['id', 'slug', 'title']);
        $posts = Post::Where('category_id', $post_category->id)->where('isActive', 1)->paginate(1);
        $recent_posts=Post::where('isActive',1)->orderBy('updated_at', 'DESC')->limit(4)->get();
        $recent_posts->each->postcategory;
//        return $recent_posts;
        return view('client.post.index', ['posts' => $posts, 'post_categories' => $post_categories,'recent_posts'=>$recent_posts]);
    }

    public function detail($post_slug)
    {
        $post = Post::Where('slug', $post_slug)
            ->firstOrFail();
        $category=PostCategory::where('id', $post->category_id)->firstOrFail();

        return view('client.post.detail',['post'=>$post, 'category'=>$category]);
    }
}
