@extends('client.app')
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
    <!-- Breadcrumb -->
    <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item active">
                <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Trang Chủ</a>
            </li>

            <li class="breadcrumb-item active" aria-current="page">Post</li>
        </ol>
    </nav>
    <section class="container">
        <!-- Item -->
        <article>
            <form onsubmit="return CheckCreate()" name="create" action="{{ route('client.Posts.store') }}" method="post">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="title">Tiêu Đề: </label>
                    <input type="text" minlength="10" class="form-control" name="title"
                        placeholder="Nhập Tiêu Đề Bài Viết">
                </div>
                <div class="form-group">
                    <label>Nội Dung: </label>
                    <textarea  name="body" id="compose-textarea" class="form-control">
                    </textarea>
                </div>
                <div class="mt-2 d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="submit">Gửi</button>
                </div>
            </form>
        </article>
    </section>
    <script>
        function CheckCreate() {
            var u = document.create.name.value;
            var p = document.create.body.value;
            if (u == "" || p == "") {
                toastr.warning('Dữ Liệu Không Được Bỏ Trống');
                return false;
            }
            return true;
        }
    </script>
    <br>
@endsection
