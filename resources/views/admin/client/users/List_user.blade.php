@extends('admin.app')
@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('script')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Accounts<a class="btn btn-primary btn-sm"
                                href="{{ route('admin.users.create') }}">
                                <i class="fas fa-edit">
                                </i>
                            </a></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th style="width: 60px; text-align: center;">ID</th>
                                            <th>Account</th>
                                            <th>Trạng Thái</th>
                                            <th>balance</th>
                                            <th>Created_at</th>
                                            <th>Settings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $value)
                                            <tr>
                                                <td style="width: 60px; text-align: center;">{{ $value->id }}</td>
                                                <td>{{ $value->username }}
                                                    @if (isset($value->player()->first()->name))
                                                        (<sup style="color: green";>name:
                                                            {{ $value->player()->first()->name }}</sup>)
                                                    @endif
                                                    @if ($value->is_admin == 1)
                                                         ~ <b style="color: green";>Admin</b>
                                                    @endif
                                                </td>
                                                @if ($value->isonline == 1)
                                                    <td style="color: green">Online</td>
                                                @else
                                                    <td style="color: red">Offline</td>
                                                @endif
                                                <td><b style="color: blue">{{ number_format($value->balance) }}<b>
                                                            <sup>VNĐ<sup></td>
                                                <td><small><b style="color: green">{{ $value->create_time }}</b></small>
                                                </td>
                                                <td class="project-actions text-right row">
                                                    <div class="mr-2"><a class="btn btn-info btn-sm" href="{{ route('admin.users.edit', $value->id) }}">
                                                            <i class="fas fa-pencil-alt">
                                                            </i>
                                                            Edit
                                                        </a></div>
                                                    <div>
                                                        <form action="{{ route('admin.users.destroy', $value->id) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button
                                                                onclick="return CheckConfirm('Bạn Có muốn xóa bài viết này không!')"
                                                                class="btn btn-danger btn-sm">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Account</th>
                                            <th>Trạng Thái</th>
                                            <th>Amounts</th>
                                            <th>Settings</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div style="margin-top: 10px;">
                                {{ $users->links() }}
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
