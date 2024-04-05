@extends('client.app')
@section('content')
    <!-- Breadcrumb -->
    <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item active">
                <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Trang Chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Tin Tức</li>
        </ol>
    </nav>
    <section class="container">
        <!-- Item -->
        @foreach ($post as $item)
            <article class="d-flex">
                <div class="mt-5 ps-0 d-flex justify-content-between" style="width: 130px;">
                    <div class="text-center"><img src="{{ asset('client/gif/logo-light.gif') }}" class="rounded-circle"
                            width="60" alt="Image"></div>
                    <i class='mt-3 bx bxs-left-arrow'></i>
                </div>

                <div style="width: 100%;" class="ms-2 mt-3 mb-5 me-3 border bg-white card text-dark">
                    <div class="card-head">
                        <p class="ms-4 mt-4 h4">
                            <a href="#" class="text-primary">{{ $item->title }}</a>
                        </p>
                        <hr>
                    </div>
                    <div class="card-body">
                        {!! $item->body !!}
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="#"
                            class="badge fs-sm text-white bg-info shadow-info text-decoration-none m-1">Chú Bé
                            Rồng</a>
                        <p> </p>
                        <a href="#"
                            class="badge fs-sm text-white bg-success shadow-success text-decoration-none m-1">Khuyến
                            Mãi</a>
                    </div>
                </div>

            </article>
        @endforeach
    </section>
    <br>
@endsection
