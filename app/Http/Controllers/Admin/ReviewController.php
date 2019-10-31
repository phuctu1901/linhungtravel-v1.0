<?php

namespace App\Http\Controllers\Admin;

use App\Review;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    //
    public  function index(){
        $reviews = Review::all();
        return view('admin.review.index', ['reviews'=>$reviews]);
    }
//
    public function addview()
    {
        return view('admin.review.add');
    }

    protected function create(array $data)
    {
        return Review::create([
            'author' => $data['author'],
            'job' => $data['job'],
            'content' => $data['review_content'],
            'avatar'=>$data['category_thumb_data']

        ]);
    }

    public function addRequest(Request $request)
    {
        $allRequest = $request->all();
        if ($this->create($allRequest)) {
            // Insert thành công sẽ hiển thị thông báo
            Session::flash('success', 'Thêm danh mục dịch vụ thành công!');
            return redirect('/admin/review');
        } else {
            // Insert thất bại sẽ hiển thị thông báo lỗi
            Session::flash('error', 'Lỗi, thêm danh mục dịch vụ thất bại!');
            return redirect('/admin/review/add');
        }
    }

    public function editView($review_id)
    {
        $review= Review::find($review_id);
        return view('admin.review.edit', ['review'=>$review]);
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
        $review= Review::find($id);
        $review->author=$request->author;
        $review->job=$request->job;
        $review->content=$request->review_content;
        $review->avatar=$request->category_thumb_data;



//        $service->metaTitle=$request->meta_title;
//        $service->metaDesc=$request->meta_desc;
//        $service->metaKeyword=$request->meta_kw;



        $review->save();
        return redirect('/admin/review');
    }

    public function delete($review_id)
    {
        $review= Review::find($review_id);
        $review->delete();
        return redirect()->back()->with('delete_success', 'Đã xóa dịch vụ thành công!');
    }
}
