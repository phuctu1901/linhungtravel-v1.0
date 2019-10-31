<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Session;
use App\Service;
use App\ServiceType;
use App\ContactForm;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    //
    public  function done(){
        $requests = ContactForm::where('isRep','=',1)->get();
        return view('admin.request.done', ['requests'=>$requests]);
    }

    public  function do(){
        $requests = ContactForm::where('isRep','=',0)->get();
        return view('admin.request.do', ['requests'=>$requests]);
    }


    public function editView($request_id)
    {
        $request= ContactForm::find($request_id);
        return view('admin.request.detail', ['request'=>$request]);
    }

    public function editRequest(Request $r)
    {

//        'title' => $data['title'],
//            'giasaukhigiam' => $data['giasaukhigiam'],
//            'giagoc' => $data['giagoc'],
//            'servicetype_id' => $data['parent_id'],
//            'isActive'=> (int) $data['isActive'],
//            'isPr'=>1,
//            'content'=>json_encode($data['content']),
//            'thumb'=>$data['thumb_data']
        $id = $r->id;
        $request= ContactForm::find($id);
        $request->isRep=(int) $r->isRep;


//        $service->metaTitle=$request->meta_title;
//        $service->metaDesc=$request->meta_desc;
//        $service->metaKeyword=$request->meta_kw;



        $request->save();
        return redirect('/admin/request/done');
    }
}
