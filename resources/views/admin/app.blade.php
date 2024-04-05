@include('admin.layout.header')

<main class="page-wrapper">
    @include('admin.layout.nav')
    <div class="content-wrapper">
        @yield('content')
    </div>
</main>

@include('admin.layout.footer')
