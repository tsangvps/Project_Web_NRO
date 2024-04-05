<?php

namespace App\Http\Controllers\Admin\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use Session;
use Str;

class Posts_page extends Controller
{
    
    public function index()
    {
        $post = post::whereType('1')->orderBy("id", "desc")->paginate(10);
        return view('admin.client.Post_Page', ['post' => $post]);
    }

    public function create()
    {
        return view('admin.client.create_post_page');
    }

    public function store(Request $request)
    {
        if (!isset($request->title) || !isset($request->body)) {
            Session::flash('error', 'Vui lòng nhập đầy đủ dữ liệu!');
            return redirect()->route('admin.post-page.create');
        } else if (Str::length($request->title) < 10) {
            Session::flash('error', 'Độ Dài không hợp lệ. vui lòng nhập lại!');
            return redirect()->route('admin.post-page.create');
        }
        $data = [
            "account_id" => \Auth::user()->id,
            "title" => $request->title,
            "type" => 1,
            "status" => 1,
            "body" => $request->body,
            "created_at" => now(),
            "updated_at" => now(),
        ];
        \DB::table('web_posts')->insert($data);
        return redirect()->route('admin.post-page.index');
    }

    public function show(string $id)
    {
        $post = post::where('id', '=' , $id)->first();
        if(isset($post)){
            return view('admin.client.edit_post_page', ['post' => $post]);
        }
        return redirect()->route('admin.post-page.index');
    }

    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!isset($request->title) || !isset($request->body)) {
            Session::flash('error', 'Vui lòng nhập đầy đủ dữ liệu!');
            return redirect()->route('admin.post-page.show', $id);
        } else if (Str::length($request->title) < 10) {
            Session::flash('error', 'Độ Dài không hợp lệ. vui lòng nhập lại!');
            return redirect()->route('admin.post-page.show', $id);
        } else {
            post::where('id', $id)->update([
                'title' => $request->title,
                'body' => $request->body
            ]);
            session::flash('success', 'Edit Thành Công!');
            return redirect()->route('admin.post-page.show', $id);

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        post::where('id', $id)->delete();
        Session::flash('error', 'Xóa Bài Viết '.$id.' Thành Công!');
        return redirect()->route('admin.post-page.index');
    }
}
