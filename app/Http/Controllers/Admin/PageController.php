<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    //
    public  function getAll(){
        $pages = Page::all();
        return view('admin.page.index', ['pages' => $pages]);
    }

    public function addview()
    {
        return view('admin.page.add');
    }


    public function addRequest(Request $request)
    {
        $title = $request->page_title;
        $content = json_encode($request->page_content);
        $isActive = (int) $request->isActive;
        $metaTitle = $request->meta_title;
        $metaDesc = $request->meta_desc;
        $metaKeyword = $request->meta_kw;

        $page = new Page([
            'title' => $title,
            'content'=>$content,
            'metaTitle'=>$metaTitle,
            'metaDesc'=>$metaDesc,
            'metaKeyword'=>$metaKeyword,
            'isActive' => $isActive,
        ]);
        $page->save();
        return redirect('/admin/page');
    }

    public function editView($page_id)
    {
        $page= Page::find($page_id);
        return view('admin.page.edit', ['page' =>  $page]);
    }

    public function editRequest(Request $request)
    {
        $id = $request->id;
        $page= Page::find($id);
        $page->title=$request->page_title;
        $page->content=json_encode($request->page_content);
        $page->slug=$request->slug;
        $page->isActive=(int) $request->isActive;
        $page->metaTitle=$request->meta_title;
        $page->metaDesc=$request->meta_desc;
        $page->metaKeyword=$request->meta_kw;



        $page->save();
        return redirect('/admin/page');
    }
    public function delete($page_id)
    {
        $page= Page::find($page_id);
        $page->delete();
        return redirect()->back()->with('alert', 'Updated!');
    }

}
