<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Service;
use App\ServiceType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceTypeController extends Controller
{
    //
    public  function index(){
        $servicetypes = ServiceType::all();
        return view('admin.servicetype.index', ['servicetypes'=>$servicetypes]);
    }
//
    public function addview()
    {
        return view('admin.servicetype.add');
    }

    protected function create(array $data)
    {
        return ServiceType::create([
            'title' => $data['title'],
        ]);
    }

    public function addRequest(Request $request)
    {
        $allRequest = $request->all();
        if ($this->create($allRequest)) {
            // Insert thành công sẽ hiển thị thông báo
            Session::flash('success', 'Thêm danh mục dịch vụ thành công!');
            return redirect('/admin/servicetype');
        } else {
            // Insert thất bại sẽ hiển thị thông báo lỗi
            Session::flash('error', 'Lỗi, thêm danh mục dịch vụ thất bại!');
            return redirect('/admin/servicetype/add');
        }
    }

    public function editView($servicetype_id)
    {
        $servicetype= ServiceType::find($servicetype_id);
        return view('admin.servicetype.edit', ['servicetype'=>$servicetype]);
    }

    public function editRequest(Request $request)
    {

//        'title' => $data['title'],
//            'giasaukhigiam' => $data['giasaukhigiam'],
//            'giagoc' => $data['giagoc'],
//            'servicetype_id' => $data['parent_id'],
//            'isActive'=> (int) $data['isActive'],
//            'isPr'=>1,
//            'content'=>json_encode($data['content']),
//            'thumb'=>$data['thumb_data']
        $id = $request->id;
        $servicetype= ServiceType::find($id);
        $servicetype->title=$request->title;


//        $service->metaTitle=$request->meta_title;
//        $service->metaDesc=$request->meta_desc;
//        $service->metaKeyword=$request->meta_kw;



        $servicetype->save();
        return redirect('/admin/servicetype');
    }
}
