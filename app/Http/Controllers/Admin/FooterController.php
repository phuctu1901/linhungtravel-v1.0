<?php

namespace App\Http\Controllers\Admin;

use App\Footer;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FooterController extends Controller
{
    //
    public  function index(){
        $footers = Footer::all();
        return view('admin.footer.index', ['footers' => $footers]);
    }

    public function addview()
    {
        return view('admin.footer.add');
    }

    protected function create(array $data)
    {
        return Footer::create([
            'title' => $data['title'],
            'pnumber' => $data['pnumber']
        ]);
    }

    public function addRequest(Request $request)
    {
        $allRequest = $request->all();
        if ($this->create($allRequest)) {
            // Insert thành công sẽ hiển thị thông báo
            Session::flash('success', 'Thêm danh mục liên hệ ở footer thành công!');
            return redirect('/admin/footer');
        } else {
            // Insert thất bại sẽ hiển thị thông báo lỗi
            Session::flash('error', 'Lỗi, thêm  danh mục liên hệ ở footer thất bại!');
            return redirect('/admin/footer/add');
        }
    }

    public function editView($footer_id)
    {
        $footer= Footer::find($footer_id);
        return view('admin.footer.edit', ['footer'=>$footer]);
    }

    public function editRequest(Request $request)
    {

//        'title' => $data['title'],
//            'giasaukhigiam' => $data['giasaukhigiam'],
//            'giagoc' => $data['giagoc'],
//            'footer_id' => $data['parent_id'],
//            'isActive'=> (int) $data['isActive'],
//            'isPr'=>1,
//            'content'=>json_encode($data['content']),
//            'thumb'=>$data['thumb_data']
        $id = $request->id;
        $footer= Footer::find($id);
        $footer->title=$request->title;
        $footer->pnumber=$request->pnumber;


//        $service->metaTitle=$request->meta_title;
//        $service->metaDesc=$request->meta_desc;
//        $service->metaKeyword=$request->meta_kw;



        $footer->save();
        return redirect('/admin/footer');
    }

    public function delete($footer_id)
    {
        $footer= Footer::find($footer_id);
        $footer->delete();
        return redirect()->back()->with('delete_success', 'Đã xóa dịch vụ thành công!');
    }

}
