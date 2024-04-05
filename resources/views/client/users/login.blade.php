<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Nhập Hệ Thống by KilLove</title>


    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.css">
    <link rel="stylesheet" media="screen"
        href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lightgallery-bundle.min.css">

    <link rel="stylesheet" href="{{ asset('/client/fb.css') }}">

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="{{ asset('client/style.css') }}">

    {{-- boxicons icon --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!-- toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .gradient-custom {
            background-image: url("{{ asset('client/img/banner.jpg') }}");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>

<body class="gradient-custom">

    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 pb-0 pt-4">
                        <form onsubmit="return Checklogin()" method="POST" name="frmlogin"
                            action="{{ route('client.users.checklogin') }}" class="mb-md-5 mt-md-4 pb-3">
                            @csrf

                            <h2 class="text-white fw-bold mb-3 text-uppercase text-center">Đăng Nhập</h2>
                            <div class="form-outline form-white mb-4">
                                <label class="text-white" for="typeEmailX">Tài Khoản or Email</label>
                                <input name="Name" type="text" id="typeEmailX"
                                    placeholder="Vui Lòng Điền Email hoặc tài khoản"
                                    class="form-control form-control-lg" />
                            </div>

                            <div class="form-outline form-white mb-4">
                                <label class="text-white" for="typePasswordX">Password</label>
                                <input name="password" type="password" id="typePasswordX" placeholder="Mật Khẩu"
                                    class="form-control form-control-lg" />
                            </div>
                            <div class="text-center">
                                <button class="btn btn-outline-light btn-lg px-5 btn-success"
                                    type="submit">Login</button>
                                <span class="d-block text-center my-4 text-muted"> or <a
                                        href="{{ route('client.users.register') }}">sign up</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- /.toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function Checklogin() {
            var u = document.frmlogin.typeEmailX.value;
            var p = document.frmlogin.typePasswordX.value;
            if (u == "" || p == "") {
                toastr.warning('Dữ Liệu Không Được Bỏ Trống');
                return false;
            }
            return true;
        }

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
