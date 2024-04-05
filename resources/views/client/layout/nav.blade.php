<header class="header navbar navbar-expand-lg bg-light mb-3">
    <div class="container px-3">

        <a href={{ route('client.index') }} class="navbar-brand pe-3">
            <img src="{{ asset('client/gif/logo-light.gif') }}" class="light-mode-img" width="90" alt="NRO AOD">
            <img src="{{ asset('client/gif/logo-dark.gif') }}" class="dark-mode-img" width="90" alt="NRO AOD">
        </a>
        <div id="navbarNav" class="offcanvas offcanvas-end">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item "><a href="{{ route('client.index') }}" class="nav-link">Trang
                            Chủ</a></li>
                    <li class="nav-item"><a href="{{ route('client.download') }}" class="nav-link">Trò
                            Chơi</a></li>
                    <li class="nav-item "><a href="{{ route('client.tintuc') }}" class="nav-link">Tin
                            Games</a></li>
                    <li class="nav-item"> <a href="{{ route('client.Posts.index') }}" class="nav-link">Diễn Đàn</a></li>

                    <li class="nav-item"> <a target="_blank" href="https://www.facebook.com/tsangvps"
                            class="nav-link">Facebook</a></li>
                </ul>
            </div>
        </div>
        <div class="form-check form-switch mode-switch pe-lg-1 ms-auto ps-2 pe-2" data-bs-toggle="mode">
            <input type="checkbox" class="form-check-input" id="theme-mode">
            <label class="form-check-label d-none d-sm-block" for="theme-mode"></label>
            <label class="form-check-label d-none d-sm-block" for="theme-mode"></label>
        </div>
        <div class="dropdown ps-2 pe-2 d-none d-lg-block">
            <div id="MenuUsers">
                <img src="{{ asset('client/img/users.jpg') }}" class="rounded-circle border" width="50"
                    alt="Image">
            </div>
            <div class="dropdown-menu dropdown-transfrom" aria-labelledby="MenuUsers">
                @if (!\Auth::check())
                    <a href="{{ route('client.users.login') }}" class="dropdown-item"> Đăng Nhập</a>
                    <a href="{{ route('client.users.register') }}" class="dropdown-item"> Đăng Ký</a>
                @else
                    @if (\Auth::user()->is_admin == 1)
                    <a href="{{ route('admin.index') }}" class="dropdown-item"> Quản Lý Website</a>
                    @endif
                    <a href="{{ route('client.users.logout') }}" class="dropdown-item"> Đăng Xuất</a>
                @endif
            </div>
        </div>
        <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</header>
