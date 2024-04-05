@extends('client.app')
@section('content')
    <!-- Breadcrumb -->
    <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item active">
                <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Trang Chủ</a>
            </li>

            <li class="breadcrumb-item active" aria-current="page">Diễn Đàn</li>
        </ol>
    </nav>

    <section class="container">
        <table cellspacing="0" class="table">
            <thead>
                <tr>
                    <th>
                        <h2>Bài viết mới</h2>
                        @if (\Auth::check())
                            <div class="mt-2 d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn" type="submit">
                                    <a href="{{ route('client.Posts.create') }}">Thêm Mới</a></button>
                            </div>
                        @endif
                    </th>
                </tr>
            </thead>
            <tbody style="background: #f38500;">
                <tr>
                    <td>
                        @foreach ($posts_admin as $post)
                            <div>
                                <div class="float-start me-2" style="width: 24px;">
                                    <img style="max-width:100%;max-height:100%;"
                                        src="https://forum.ngocrongonline.com/avatar/9077.png" alt="Lý Tiểu Nương">
                                </div>
                                <div style="height:35px;display: table-cell; vertical-align: middle;">
                                    <a style="color:white; text-decoration-line: none"
                                        href="{{ route('client.Posts.show', $post->id) }}"><b>{{ $post->title }}</b></a>
                                    <img src="http://my.teamobi.com/images/hot.gif" border="0">
                                </div>
                            </div>
                        @endforeach
                    </td>
                </tr>
                <tr style="background-color: #FFAF4D;">
                    <td>
                        @foreach ($posts_member as $post)
                            <div>
                                <div class="float-start me-2" style="width: 24px;">
                                    <img style="max-width:100%;max-height:100%;"
                                        src="https://forum.ngocrongonline.com/avatar/9077.png" alt="Lý Tiểu Nương">
                                </div>
                                <div style="height:35px;display: table-cell; vertical-align: middle;">
                                    <a style="color:white; text-decoration-line: none"
                                        href="{{ route('client.Posts.show', $post->id) }}"><b>{{ $post->title }}</b></a>
                                    <img src="http://my.teamobi.com/images/hot.gif" border="0">
                                </div>
                            </div>
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
@endsection
