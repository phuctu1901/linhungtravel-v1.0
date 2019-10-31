<?php

namespace App\Http\Controllers\Client;
use Session;
use App\ContactForm;
use App\Http\Controllers\Controller;
use App\Info;
use Illuminate\Http\Request;
use Validator, Input, Redirect;


class ContactController extends Controller
{
    public  function  index(){
        $info=Info::all()->first();
        return view('client.contact.index',['info'=>$info]);
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:2000',
            'g-recaptcha-response' => ['required', new \App\Rules\ValidRecaptcha]
        ]);
    }

    protected function create(array $data)
    {
        return ContactForm::create([
            'name' => $data['name'],
            'title' => $data['title'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'content'=>json_encode($data['message']),
        ]);
    }


    public function addrequest(Request $request) {
        // Kiểm tra dữ liệu vào
        $allRequest  = $request->all();
        $validator = $this->validator($allRequest);

        if ($validator->fails()) {
            // Dữ liệu vào không thỏa điều kiện sẽ thông báo lỗi
            return redirect('lien-he')->withErrors($validator)->withInput();
        } else {
            // Dữ liệu vào hợp lệ sẽ thực hiện tạo người dùng dưới csdl
            if( $this->create($allRequest)) {
                // Insert thành công sẽ hiển thị thông báo
                Session::flash('success', 'Đã gởi tin yêu cầu, chúng tôi sẽ sớm hỗ trợ bạn');
                return redirect('/lien-he');
            } else {
                // Insert thất bại sẽ hiển thị thông báo lỗi
                Session::flash('error', 'Đăng ký thành viên thất bại!');
                return redirect('/lien-he');
            }
        }
    }
}
