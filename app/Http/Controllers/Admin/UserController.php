<?php

namespace App\Http\Controllers\Admin;

use Session;
use Hash;
use Auth;
use Validator, Input, Redirect;
use App\TourCategory;
use App\TourCategoryParent;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'isActive'=>$data['isActive']
        ]);
    }

    public function showChangePasswordForm()
    {
        return view('admin.auth.changepassword');
    }

    public function changePassword(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Mật khẩu cũ bạn nhập không chính xác");
        }
        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->with("error", "Mật khẩu cũ và mật khẩu mới giống nhau, đổi mật khẩu khác");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',

        ], ['new-password.confirmed' => "Mật khẩu và mật khẩu xác nhận không giống nhau", 'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',],
            );
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success", "Đổi mật khẩu thành công!");
    }


    public function addView()
    {
        return view('admin.user.add');
    }

    public function addRequest(Request $request)
    {
        // Kiểm tra dữ liệu vào
        $allRequest = $request->all();
        $validator = $this->validator($allRequest);

        if ($validator->fails()) {
            // Dữ liệu vào không thỏa điều kiện sẽ thông báo lỗi
            return redirect('/admin/user/add')->withErrors($validator)->withInput();
        } else {
            // Dữ liệu vào hợp lệ sẽ thực hiện tạo người dùng dưới csdl
            if ($this->create($allRequest)) {
                // Insert thành công sẽ hiển thị thông báo
                Session::flash('success', 'Đăng ký thành viên thành công!');
                return redirect('/admin/user');
            } else {
                // Insert thất bại sẽ hiển thị thông báo lỗi
                Session::flash('error', 'Đăng ký thành viên thất bại!');
                return redirect('/admin/user/add');
            }
        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data,
            [
                'name' => 'required|string|max:255',
                'username' => 'required|string|max:255|unique:users|regex:/^[A-Za-z][A-Za-z0-9]*$/',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ],
            [
                'username.unique' => 'Tên đăng nhập đã tồn tại',
                'username.regex' => 'Tên đăng nhập chỉ chứa các ký tự, số, "." và "_" ',
                'name.required' => 'Họ và tên là trường bắt buộc',
                'name.max' => 'Họ và tên không quá 255 ký tự',
                'email.required' => 'Email là trường bắt buộc',
                'email.email' => 'Email không đúng định dạng',
                'email.max' => 'Email không quá 255 ký tự',
                'email.unique' => 'Email đã tồn tại',
                'password.required' => 'Mật khẩu là trường bắt buộc',
                'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
                'password.confirmed' => 'Xác nhận mật khẩu không đúng',
            ]
        );
    }

    public function index()
    {
        $users = User::all();
        return view('admin.user.index', ['users' => $users]);
    }


    public function editView($user_id)
    {
        $user = User::find($user_id);
        return view('admin.user.edit', ['user' => $user]);
    }

    public function editRequest(Request $request)
    {
        $id = $request->id;

        $user = User::find($id);
//        $slider->title = $request->slider_title;
//        $slider->desc = $request->slider_desc;
//        $slider->thumb= $request->slider_thumb_data;
//        $slider->link=$request->slider_link;
//        $slider->isActive = (int) $request->isActive;
//
//
//        $slider->save();
        $users = User::all();
        return view('admin.user.index', ['users' => $users]);
    }

    public function delete($user_id)
    {
        $user = User::find($user_id);
        $user->delete();
        return redirect()->back()->with('delete_success', 'Đã xóa tài khoản thành công!');
    }

    public function detail($user_id)
    {
        $user = User::find($user_id);
        return view('admin.user.detail', ['user' => $user]);
    }

}
