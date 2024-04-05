<!-- Footer -->
<footer class="footer dark-mode bg-dark border-top border-light pt-5 pb-4 pb-lg-5">
    <div class="container pt-lg-4">
        <div class="row pb-5">
            <div class="col-lg-4 col-md-6">
                <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
                    <img src="{{ asset('client/img/logo.png') }}" width="47" alt="NRO AOD">
                    NRO AOD
                </div>
                <p class="fs-sm text-light opacity-70 pb-lg-3 mb-4">NRO AOD là Trò Chơi Trực Tuyến với cốt truyện xoay
                    quanh bộ truyện tranh 7 viên Ngọc Rồng. Người chơi sẽ hóa thân thành một trong những anh hùng của 3
                    hành tinh: Trái Đất, Xayda, Namếc. Cùng luyện tập, tăng cường sức mạnh và kỹ năng. Đoàn kết cùng
                    chiến đấu chống lại các thế lực hung ác. Cùng nhau tranh tài.
                </p>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-4 pt-md-1 pt-lg-0">
                <div id="footer-links" class="row">
                    <div class="col-lg-4">
                        <h6 class="mb-2">
                            <a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-2"
                                data-bs-toggle="collapse">Liên Kết</a>
                        </h6>
                        <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                            <ul class="nav flex-column pb-lg-1 mb-lg-3">
                                <li class="nav-item"><a href="{{ route('client.index') }}"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">Trang Chủ</a></li>
                                <li class="nav-item"><a href="{{ route('client.tintuc') }}"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">Tin Tức</a></li>
                                <li class="nav-item"><a href="{{ route('client.download')}}"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">Trò Chơi</a></li>
                                <li class="nav-item"><a href="https://facebook.com/tsangvps"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">Liên Hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3">
                        <h6 class="mb-2">
                            <a href="#social-links" class="d-block text-dark dropdown-toggle d-lg-none py-2"
                                data-bs-toggle="collapse">Socials</a>
                        </h6>
                        <div id="social-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                            <ul class="nav flex-column mb-2 mb-lg-0">
                                <li class="nav-item"><a href="https://www.facebook.com/tsangvps"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">Facebook</a></li>
                                {{-- <li class="nav-item"><a href="https://www.youtube.com/user/teamobi"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">Youtube</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-xl-4 col-lg-5 pt-2 pt-lg-0">
                        <h6 class="mb-2">Liên Hệ Với Chúng Tôi</h6>
                        <a href="mailto:njkup23@gmail.com" class="fw-medium">njkup23@gmail.com</a>
                    </div> --}}
                </div>
            </div>
        </div>
        <p class="nav d-block fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
            <span class="text-light opacity-50">© All rights reserved. Made by </span>
            <a class="nav-link d-inline-block p-0" href="http://facebook.com/tsangvps" target="_blank"
                rel="noopener">Trần Đình Sang</a>
            </span>
        </p>
    </div>
</footer>

<!-- Back to top button -->
<a href="#top" class="btn-scroll-top" data-scroll="">
    <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
    <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
</a>

<!-- Theme mode -->
<script>
    let mode = window.localStorage.getItem('mode'),
        root = document.getElementsByTagName('html')[0];
    if (mode !== null && mode === 'dark') {
        root.classList.add('dark-mode');
    } else {
        root.classList.remove('dark-mode');
    }
</script>


<!-- Page loading scripts -->
{{-- <script>
    (function() {
        window.onload = function() {
            const preloader = document.querySelector('.page-loading');
            preloader.classList.remove('active');
            setTimeout(function() {
                preloader.remove();
            }, 1000);
        };
    })();
</script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/readmore-js@3.0.0-beta-1/dist/readmore.min.js"></script>
<script>
    var content = new Readmore('content', {
        collapsedHeight: 200,
        speed: 500,
        moreLink: '<a href="#" class="btn btn-outline-success btn-sm" style="margin-top: 10px;width: 100px;">Xem thêm</a>',
        lessLink: '<a href="#" class="btn btn-outline-success btn-sm" style="margin-top: 10px;width: 100px;">Đóng</a>',
        afterToggle: function(trigger, element, expanded) {
            if (!expanded) {
                window.scrollTo({
                    top: element.offsetTop,
                    behavior: 'smooth'
                })
            }
        },
        beforeToggle: function(trigger, element, expanded) {}
    });
</script>

<!-- Main Theme Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/lightgallery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/video/lg-video.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.polyfills.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-markup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-clike.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/toolbar/prism-toolbar.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/line-numbers/prism-line-numbers.min.js">
</script>
@yield('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script>
<script src="{{ asset('client/style.js') }}"></script>

<!-- /.toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "5000",
        "timeOut": "10000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>
@if (session()->has('success'))
    <script>
        toastr.success('{{ session('success') }}');
    </script>
@elseif (session()->has('error'))
    <script>
        toastr.error('{{ session('error') }}');
    </script>
@endif
</body>

</html>
