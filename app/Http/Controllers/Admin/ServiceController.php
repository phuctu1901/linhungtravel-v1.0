<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Service;
use App\ServiceType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    //
    public  function index(){
        $services = Service::all();
        $servicetypes = ServiceType::all();
        return view('admin.service.index', ['services' => $services, 'servicetypes'=>$servicetypes]);
    }
//
    public function addview()
    {
        $servicetypes = ServiceType::all();
        return view('admin.service.add', ['servicetypes'=>$servicetypes]);
    }

    protected function create(array $data)
    {
        return Service::create([
            'title' => $data['title'],
            'giasaukhigiam' => $data['giasaukhigiam'],
            'giagoc' => $data['giagoc'],
            'servicetype_id' => $data['parent_id'],
            'isActive'=> (int) $data['isActive'],
            'isPr'=>1,
            'content'=>json_encode($data['content']),
            'thumb'=>$data['thumb_data']
        ]);
    }

    public function addRequest(Request $request)
    {
        $allRequest = $request->all();
        if ($this->create($allRequest)) {
            // Insert thành công sẽ hiển thị thông báo
            Session::flash('success', 'Thêm dịch vụ thành công!');
            return redirect('/admin/service');
        } else {
            // Insert thất bại sẽ hiển thị thông báo lỗi
            Session::flash('error', 'Lỗi, thêm dịch vụ thất bại!');
            return redirect('/admin/service/add');
        }
    }
//
//    public function editView($page_id)
//    {
//        $page= Page::find($page_id);
//        return view('admin.page.edit', ['page' =>  $page]);
//    }
//
//    public function editRequest(Request $request)
//    {
//        $id = $request->id;
//        $page= Page::find($id);
//        $page->title=$request->page_title;
//        $page->content=json_encode($request->page_content);
//        $page->slug=$request->slug;
//        $page->isActive=(int) $request->isActive;
//        $page->metaTitle=$request->meta_title;
//        $page->metaDesc=$request->meta_desc;
//        $page->metaKeyword=$request->meta_kw;
//
//
//
//        $page->save();
//        return redirect('/admin/page');
//    }
    public function delete($service_id)
    {
        $service= Service::find($service_id);
        $service->delete();
        return redirect()->back()->with('delete_success', 'Đã xóa dịch vụ thành công!');
    }

}
