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
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects <a class="btn btn-primary btn-sm"
                        href="{{ route('admin.post-page.create') }}">
                        <i class="fas fa-edit">
                        </i>
                    </a></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 45%">
                                Name
                            </th>
                            <th>
                                tác giả
                            </th>
                            <th style="width: 15%" class="text-center">
                                Status
                            </th>
                            <th style="width: 25%">
                                Settings
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($post as $type)
                            <tr>
                                <td>
                                    {{ $type->id }}
                                </td>
                                <td>
                                    <a>{{ $type->title }}</a>
                                </td>
                                <td>
                                    {{ $type->user()->first()->username }}
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-success">Success</span>
                                </td>
                                <td class="project-actions text-right row">
                                    <div class="mr-2"><a class="btn btn-info btn-sm"
                                            href="{{ route('admin.post-page.show', $type->id) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a></div>
                                    <div>
                                        <form action="{{ route('admin.post-page.destroy', $type->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return CheckConfirm('Bạn Có muốn xóa bài viết này không!')"
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
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
@endsection
