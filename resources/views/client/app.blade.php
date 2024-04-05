@include('client.layout.header')

<main class="page-wrapper">
    @include('client.layout.nav')

    @yield('content')

</main>

@include('client.layout.footer')