<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" class="dark-mode">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="keywords" content="AOD world, AOD, avatar world, NRO AOD, NRO">
    <meta name="description" content="Trang chủ chính thức của NRO AOD">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('client/img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('client/img/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('client/img/logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('client/img/logo.png') }}">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen"
        href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css">
    <link rel="stylesheet" media="screen"
        href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.css">
    <link rel="stylesheet" media="screen"
        href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lightgallery-bundle.min.css">

    {{-- <link rel="stylesheet" href="{{ asset('/client/fb.css') }}"> --}}

    {{-- boxicons icon --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('style')

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" href="{{ asset('client/style.css') }}">
</head>

<body cz-shortcut-listen="true" style="">

    {{-- <div class="page-loading"></div> --}}
