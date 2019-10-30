<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Page;

class PageController extends Controller
{
    public function show($page_slug)
    {
        $page = Page::where('slug', $page_slug)->where('isActive', 1)->firstOrFail();
//        return['page'=>$page];
        return view('client.page.index', ['page' => $page]);
    }
}
