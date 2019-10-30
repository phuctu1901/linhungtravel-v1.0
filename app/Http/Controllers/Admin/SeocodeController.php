<?php

namespace App\Http\Controllers\Admin;

use App\Footer;
use App\Info;
use App\Seocode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeocodeController extends Controller
{
    //
    public  function getAll(){
        $seocode = Seocode::all()->first();
        return view('admin.seocode.index', ['seocode' => $seocode]);
    }

    public  function  update(Request $request)
    {
        $id = $request->id;
        $seocode = Seocode::find($id);
        $seocode->bing=$request->bing;
        $seocode->alexa=$request->alexa;
        $seocode->gac=$request->gac;
        $seocode->gwc=$request->gwc;

        $seocode->save();
        return redirect()->back()->with('alert', 'Updated!');
    }

}
