<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;
use \DB;
use \Str;
use \Session;


class PostController extends Controller
{
    /**
     * Hiển Thị Bài Viết
     */
    public function index()
    {
        $post_admin = post::whereType('1')->orderBy("id", "desc")->limit(5)->get();
        $post_member = post::whereType('0')->whereStatus('1')->orderBy("id", "desc")->paginate(10);
        return view('client.Posts.post', ['posts_admin' => $post_admin, 'posts_member' => $post_member]);
    }

    /**
     * Tạo Bài Viết Mới
     */
    public function create()
    {
        if (\Auth::check()) {
            return view('client.Posts.new-post');
        }
        return redirect()->route('client.users.login');
    }

    /**
     * Tạo Bài Viết Mới
     */
    public function store(Request $request)
    {
        if (!isset($request->title) || !isset($request->body)) {
            Session::flash('error', 'Vui lòng nhập đầy đủ dữ liệu!');
            return redirect()->route('client.Posts.create');
        } else if (Str::length($request->title) < 10) {
            Session::flash('error', 'Độ Dài không hợp lệ. vui lòng nhập lại!');
            return redirect()->route('client.Posts.create');
        }
        $data = [
            "account_id" => \Auth::user()->id,
            "title" => $request->title,
            "body" => $request->body,
            "created_at" => now(),
            "updated_at" => now(),
        ];
        DB::table('web_posts')->insert($data);
        return redirect()->route('client.Posts.index');
    }

    /**
     * Xem Bài Viết
     */
    public function show(string $id)
    {
        $post = post::where('id', '=', $id)->first();
        if(!$post){
            return view('404');
        }
        // dd($post->toArray());
        return view('client.Posts.baiviet', ['posts' => $post]);
    }

    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!isset($request->comment)) {
            Session::flash('error', 'Vui lòng nhập đầy đủ dữ liệu!');
            return redirect()->route('client.Posts.show', $id);
        } else if (Str::length($request->comment) < 5 || Str::length($request->comment) > 80) {
            Session::flash('error', 'Độ Dài không hợp lệ. vui lòng nhập lại!');
            return redirect()->route('client.Posts.show', $id);
        }
        if ($request->type == 0) {
            $data = [
                "account_id" => \Auth::user()->id,
                "post_id" => $id,
                "noidung" => $request->comment,
                "created_at" => now(),
                "updated_at" => now(),
            ];
        }else{
            $data = [
                "account_id" => \Auth::user()->id,
                "cmt_id" => $id,
                "noidung" => $request->comment,
                "created_at" => now(),
                "updated_at" => now(),
            ];
        }

        DB::table('web_cmt')->insert($data);
        return redirect()->route('client.Posts.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}