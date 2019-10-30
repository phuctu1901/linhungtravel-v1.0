<?php

namespace App\Http\Controllers\Client;

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
            'email' => 'required|string|email|max:255',
            'message' => 'required|string|max:255',
            'g-recaptcha-response' => ['required', new \App\Rules\ValidRecaptcha]
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
                Session::flash('success', 'Đăng ký thành viên thành công!');
                return redirect('admin');
            } else {
                // Insert thất bại sẽ hiển thị thông báo lỗi
                Session::flash('error', 'Đăng ký thành viên thất bại!');
                return redirect('admin/register');
            }
        }
    }
}
