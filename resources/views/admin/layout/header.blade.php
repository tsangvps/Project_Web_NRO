<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">

    <!-- toastr -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/toastr/toastr.min.css') }}">

    <link rel="stylesheet" href="{{ asset('kilLove/style.css') }}">

    @yield('style')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="form-popup">
            <div class="form">
                <div class="form-header">
                    <h2 class="header">Account</h2>
                    <button class="close"></button>
                </div>
                <form class="form-body" onsubmit="return ()" name="create"
                    action="{{ route('admin.post-page.update', '1') }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">Name: </label>
                        <input type="text" minlength="6" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="title">Name: </label>
                        <input type="text" minlength="6" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="title">Password <Sup>new</Sup>: </label>
                        <input type="text" minlength="6" class="form-control" name="password">
                    </div>
                    <div class="mt-2 d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit">Gửi</button>
                    </div>
                </form>
            </div>

        </div>
