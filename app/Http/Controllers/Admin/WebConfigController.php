<?php

namespace App\Http\Controllers\Admin;

use App\Footer;
use App\Info;
use App\WebConfig;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebConfigController extends Controller
{
    //
    public  function getAll(){
        $config = WebConfig::all()->first();
        return view('admin.web-config.index', ['config' => $config]);
    }

    public  function  update(Request $request)
    {
        $id = $request->id;
        $config = WebConfig::find($id);
        $config->logo = $request->logo_data;
        $config->logo_2 = $request->logo_2_data;
        $config->logo_header = $request->logo_header_data;
        $config->metaTitle = $request->metaTitle;
        $config->metaDesc = $request->metaDesc;
        $config->metaKeyword = $request->metaKeyword;
        $config->save();
        return redirect()->back()->with('alert', 'Updated!');
    }

}
