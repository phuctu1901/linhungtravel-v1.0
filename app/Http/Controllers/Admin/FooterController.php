<?php

namespace App\Http\Controllers\Admin;

use App\Footer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FooterController extends Controller
{
    //
    public  function getAll(){
        $footer = Footer::all()->first();
        return view('admin.footer.index', ['footer' => $footer]);
    }

    public  function  update(Request $request)
    {
        $id = $request->id;
        $footer = Footer::find($id);
        $footer->content = json_encode($request->web_footer);
        $footer->save();
        return redirect()->back()->with('alert', 'Updated!');
    }

}
