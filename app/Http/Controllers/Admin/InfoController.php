<?php

namespace App\Http\Controllers\Admin;

use App\Footer;
use App\Info;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    //
    public  function getAll(){
        $info = Info::all()->first();
        return view('admin.info.index', ['info' => $info]);
    }

    public  function  update(Request $request)
    {
        $id = $request->id;
        $info = Info::find($id);
        $info->address = $request->address;
        $info->title = $request->title;
        $info->tel = $request->tel;
        $info->email = $request->email;
        $info->save();
        return redirect()->back()->with('alert', 'Updated!');
    }

}
