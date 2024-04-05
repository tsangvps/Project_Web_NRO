@extends('client.app')
@section('content')
    <!-- Breadcrumb -->
    <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item active">
                <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Trang Chủ</a>
            </li>

            <li class="breadcrumb-item active" aria-current="page">Posts</li>
        </ol>
    </nav>
    <section class="container">
        <!-- Item -->
        <article class="d-flex">
            <div class="mt-5 ps-0 d-flex justify-content-between">
                <div class="text-center"><img src="{{ asset('client/gif/logo-light.gif') }}" width="50"
                        class="rounded-circle"></div>
                <i class='mt-2 bx bxs-left-arrow'></i>
            </div>

            <div style="width: 90%;" class="mt-3 mb-5 me-3 bg-white card">
                <div class="card-head">
                    <p class="ms-4 mt-4 h4">
                        <a href="#" class="text-dark">{{ $posts->title }}</a>
                    </p>
                    <hr>
                </div>
                <div class="card-body text-dark">
                    {!! html_entity_decode($posts->body) !!}
                </div>
            </div>
        </article>
        {{-- @dd($posts->cmt()); --}}
        @foreach ($posts->cmt()->limit(10)->get() as $comment)
            <article class="d-flex">
                <div class="mt-5 ps-0 d-flex justify-content-between">
                    <div class="text-center"><img src="{{ asset('client/gif/logo-light.gif') }}" width="50"
                            class="rounded-circle"></div>
                    <i class='mt-2 bx bxs-left-arrow'></i>
                </div>

                <div style="width: 90%;" class="mt-4 mb-1 me-3 bg-white card">
                    <div class="card-head">
                        <p class="ms-3 mt-3 h5">
                            <a href="#" class="text-dark">{{ $comment->user()->first()->username }}</a>
                        </p>
                        <hr>
                    </div>
                    <div class="card-body text-dark">
                        {{ $comment->noidung }}
                    </div>
                </div>
            </article>
        @endforeach
        <article class="mt-3">
            @if (\Auth::check())
                <form action="{{ route('client.Posts.update', $posts->id) }}" method="post">
                    @csrf
                    @method('put')
                    <input type="text" name="type" value="0" hidden>
                    <div class="form-floating">
                        <textarea minlength="5" maxlength="80" name="comment" class="form-control" placeholder="Leave a comment here"
                            id="comments" style="height: 100px"></textarea>
                        <label for="comments">Comments</label>
                    </div>
                    <div class="mt-2 d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit">Gửi</button>
                    </div>
                </form>
            @endif
        </article>
    </section>
    <br>
@endsection
