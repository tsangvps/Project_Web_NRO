<?php
namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\account;
use Illuminate\Http\Request;
use \DB;
use \Hash;
use \Str;
use App\Models\account as User;
use \Session;


class UsersController extends Controller
{
    public function login()
    {
        if (\Auth::check()) {
            return redirect()->route('client.index');
        }
        return view('client.users.login');
    }

    public function CheckLogin(request $request)
    {
        $login = [
            'username' => $request->Name,
            'password' => $request->password,
        ];
        if (\Auth::attempt($login)) {
            return redirect()->route('client.index');
        } else {
            Session::flash('error', 'Tài Khoản Hoặc Mật Khẩu Không Chính Xác');
            return redirect()->route('client.users.login');
        }
    }

    public function register()
    {
        if (\Auth::check()) {
            return redirect()->route('client.index');
        }
        return view('client.users.register');
    }


    public function CheckRegister(Request $account)
    {
        if (!isset($account->email) || !isset($account->accounts) || !isset($account->password) || !isset($account->re_password)) {
            Session::flash('error', 'Vui lòng nhập đầy đủ dữ liệu!');
            return redirect()->route('client.users.register');
        } else if (Str::length($account->password) < 6 || Str::length($account->accounts) < 6 || Str::length($account->password) > 20 || Str::length($account->accounts) > 12) {
            Session::flash('error', 'Độ Dài không hợp lệ. vui lòng nhập lại!');
            return redirect()->route('client.users.register');
        } else if ($account->password != $account->re_password) {
            Session::flash('error', 'Mật khẩu xác nhận khống chính xác!');
            return redirect()->route('client.users.register');
        }

        $data_user = [
            'username' => $account->accounts,
            'password' => hash::make($account->password),
            'ip_address' => $this->getIp(),
            'gmail' => $account->email,
            'isonline' => '0',
        ];

        $CheckUsers = account::where('username', $data_user['username'])->get()->count();
        // dd($CheckUsers);
        if ($CheckUsers >= 1) {
            Session::flash('error', 'Người Dùng Này Đã Tồn Tại. Vui Lòng Thử Lại Sau!');
            return redirect()->route('client.users.register');
        }
        DB::table("account")->insert($data_user);
        return redirect()->route('client.users.login');
    }

    public function logout(request $request)
    {
        if (\Auth::check()) {
            \Auth::logout();
            return redirect()->route('client.users.login')->with('success', 'Đăng Xuất Thành Công');
        }
        return redirect()->route('client.users.login');
    }
}
