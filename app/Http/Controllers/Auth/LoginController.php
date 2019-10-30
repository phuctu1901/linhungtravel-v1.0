<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Validator, Input, Redirect;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin() {
        return view('admin.auth.login');
    }

    public function postLogin(Request $request) {
        // Kiểm tra dữ liệu nhập vào
//        $rules = [
//            'email' =>'required|email',
//            'password' => 'required|min:5'
//        ];
//        $messages = [
//            'email.required' => 'Email là trường bắt buộc',
//            'email.email' => 'Email không đúng định dạng',
//            'password.required' => 'Mật khẩu là trường bắt buộc',
//            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
//        ];
//        $validator = Validator::make($request->all(), $rules, $messages);
//
//
//        if ($validator->fails()) {
//            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
//            return redirect('admin/login')->withErrors($validator)->withInput();
//        } else {
//            // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
//            $email = $request->input('email');
//            $password = $request->input('password');
//
//            if( Auth::attempt(['email' => $email, 'password' =>$password])) {
//                // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
//                return redirect('admin');
//            } else {
//                // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
//                Session::flash('error', 'Email hoặc mật khẩu không đúng!');
//                return redirect('admin/login');
//            }
//        }
        $request['isActive'] = 1;

        $this->validate($request, [
            'login'    => 'required',
            'password' => 'required',
        ]);

        $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL )
            ? 'email'
            : 'username';

        $request->merge([
            $login_type => $request->input('login')
        ]);

        if (Auth::attempt($request->only($login_type, 'password','isActive'))) {
            return redirect()->intended($this->redirectPath());
        }

        return redirect()->back()
            ->withInput()
            ->withErrors([
                'login' => 'Thông tin đăng nhập không chính xác',
            ]);
    }


}

//ref https://laraveldaily.com/laravel-login-email-username-one-field/
