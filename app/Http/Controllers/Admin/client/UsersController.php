<?php

namespace App\Http\Controllers\Admin\client;

use App\Http\Controllers\Controller;
use App\Models\account;
use Illuminate\Http\Request;
use \Hash;
use DB;
use Illuminate\Support\Str;
use Session;

class UsersController extends Controller
{
    public function index()
    {
        $users = account::paginate(10);
        return view('admin.client.users.List_user', ['users' => $users]);
    }

    public function create()
    {
        return view('admin.client.users.create');
    }

    public function store(Request $request)
    {
        if (!isset($request->account) || !isset($request->password)) {
            Session::flash('error', 'Vui lòng nhập đầy đủ dữ liệu!');
            return redirect()->route('admin.users.create');
        } else if (Str::length($request->password) < 6 || Str::length($request->password) > 15) {
            Session::flash('error', 'Mật Khẩu Phải Từ 6-15 kí tự!. Vui lòng nhập lại!');
            return redirect()->route('admin.users.create');
        }

        $data_user = [
            'username' => $request->account,
            'password' => hash::make($request->password),
            'ip_address' => $this->getIp(),
            'isonline' => '0',
        ];

        $CheckUsers = account::where('username', $data_user['username'])->get()->count();
        if ($CheckUsers >= 1) {
            Session::flash('error', 'Người Dùng Này Đã Tồn Tại. Vui Lòng Thử Lại Sau!');
            return redirect()->route('admin.client.users.create');
        }
        DB::table("account")->insert($data_user);

        $users = account::paginate(10);
        return view('admin.client.users.List_user', ['users' => $users]);
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $acc = account::where('id', $id)->first();
        return view('admin.client.users.edit', ['acc' => $acc]);
    }

    public function update(Request $request, string $id)
    {
        if (isset($request->password) && (Str::length($request->password) < 6 || Str::length($request->password) > 15)) {
            Session::flash('error', 'Mật Khẩu Phải Từ 6-15 kí tự!. Vui lòng nhập lại!');
            return redirect()->route('admin.users.edit', $id);
        } else if (isset($request->password)) {
            account::where('id', $id)->update([
                'password' => hash::make($request->password)
            ]);
        }
        if (isset($request->account) && isset($request->balance) && $request->balance >= 0) {
            account::where('id', $id)->update([
                'gmail' => $request->email,
                'username' => $request->account,
                'balance' => $request->balance
            ]);
        }

        session::flash('success', 'Edit Thành Công!');
        return redirect()->route('admin.users.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        account::where('id', $id)->delete();
        Session::flash('error', 'Xóa Bài Người Dùng ' . $id . ' Thành Công!');
        $users = account::paginate(10);
        return view('admin.client.users.List_user', ['users' => $users]);
    }
}
