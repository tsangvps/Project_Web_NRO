<?php

namespace App\Http\Controllers\Admin\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use Session;

class PostsController extends Controller
{
    public function index()
    {
        $post = post::whereType('0')->orderBy("id", "desc")->paginate(10);
        return view('admin.client.posts.List', ['post' => $post]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $status = ($request->tt)?$request->tt:'0';
        post::where('id', $id)->update([
            'status' => $status
        ]);

        session::flash('success', 'Thao Tác Thành Công!');
        return redirect()->route('admin.post.index');
    }

    public function destroy(string $id)
    {
        //
    }
}
