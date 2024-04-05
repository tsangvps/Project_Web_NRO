@extends('admin.app')
@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
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
                    <h1>Quản Lý Tài Khoản<h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Accounts</li>
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
                    <h3 class="card-title">Sửa Tài Khoản #{{ $acc->id }}</h3>
                </div>

                <form action="{{ route('admin.users.update', $acc->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="account">Tài Khoản</label>
                            <input type="text" class="form-control" name="account" value="{{ $acc->username }}" placeholder="Nhập Tài Khoản">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật Khẩu</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="email">Gmail</label>
                            <input type="email" class="form-control" name="email" value="{{ $acc->email }}" placeholder="Nhập Email">
                        </div>
                        <div class="form-group">
                            <label for="balance">Số Dư</label>
                            <input type="number" class="form-control" name="balance" value="{{ $acc->balance }}" placeholder="Nhập Số Dư">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thông tin</h3>
                </div>
                <div class="card-body">
                    {{-- <p><b>Tác Giả</b>: {{ $post->user()->first()->username }}</p>
                <p><b>Ngày Đăng</b>: {{ $post->created_at }}</p>
                <p><b>Ngày sửa gần nhất</b>: {{ $post->updated_at }}</p> --}}
                </div>

            </div>
        </div>

    </section>
@endsection
