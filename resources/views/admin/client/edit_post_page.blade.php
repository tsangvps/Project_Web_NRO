@extends('admin.app')
@section('style')
    <!-- summernote -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

    <!-- Summernote -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>

    <script>
        $(function() {
            //Add text editor
            $('#compose-textarea').summernote()
        })
    </script>
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tin Game<h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Post_news</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Sửa Bài Viết #{{ $post->id }}</h3>
                </div>
                <div class="card-body">
                    <form onsubmit="return CheckCreate()" name="create"
                        action="{{ route('admin.post-page.update', $post->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="title">Tiêu Đề: </label>
                            <input type="text" minlength="10" class="form-control" name="title"
                                value="{{ $post->title }}">
                        </div>
                        <div class="form-group">
                            <label>Nội Dung: </label>
                            <textarea name="body" id="compose-textarea" class="form-control">
                        {{ $post->body }}
                    </textarea>
                        </div>
                        <div class="mt-2 d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary" type="submit">Gửi</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thông tin</h3>
                </div>
                <div class="card-body">
                    <p><b>Tác Giả</b>: {{ $post->user()->first()->username }}</p>
                    <p><b>Ngày Đăng</b>: {{ $post->created_at }}</p>
                    <p><b>Ngày sửa gần nhất</b>: {{ $post->updated_at }}</p>
                </div>

            </div>
        </div>

    </section>
@endsection
