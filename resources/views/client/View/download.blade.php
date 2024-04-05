@extends('client.app')
@section('style')
    <style>
        .download {
            display: flex;
            justify-content: center;
            flex-direction: row;
            grid-gap: 20px;
        }

        @media (max-width: 800px) {
            .download {
                flex-direction: column;
                justify-content: space-around;
                align-items: center;
            }
        }

        .btnDownload {
            background-color: #FD9D00;
            border: 5px groove;
            border-radius: 20px;
            width: 130px;
            height: 65px;
        }

        .btnDownload:hover {
            background-color: #f31722;
        }
    </style>
@endsection
@section('content')
    <!-- Breadcrumb -->
    <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item active">
                <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Trang Chủ</a>
            </li>
        </ol>
    </nav>

    <section class="download">
        <button class="item btnDownload">
            APK
        </button>
        <button class="item btnDownload">
            APK
        </button>
        <button class="item btnDownload">
            APK
        </button>
        <button class="item btnDownload">
            APK
        </button>
    </section>

    <!-- Portfolio list -->
    <section class="container pb-2 pb-lg-3 position-relative">
        <section class="container py-5 my-1 my-md-4 my-lg-5">
            <div class="row">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                        <h2 class="h1 mb-4">Hướng Dẫn Tân Thủ</h2>
                        <p class="fs-lg mb-0">1. Đăng ký tài khoản</p>
                        <p>Ngọc Rồng Online sử dụng Tài Khoản riêng, không chung với bất kỳ Trò Chơi nào khác.
                            Bạn có thể đăng ký tài khoản miễn phí ngay trong game, hoặc trên trang Diễn Đàn.
                            Khi đăng ký, bạn nên sử dụng đúng số điện thoại hoặc email thật của mình. Nếu sử dụng thông tin
                            sai, người có số điện thoại hoặc email thật sẽ có thể lấy mật khẩu của bạn.
                            Số điện thoại và email của bạn sẽ không hiện ra cho người khác thấy. Admin không bao giờ hỏi mật
                        </p>
                        <p>2. Hướng dẫn điều khiển</p>
                        <p>
                            Đối với máy bàn phím: Dùng phím mũi tên, phím số, để điều khiển nhân vật. Phím chọn giữa để
                            tương tác.
                            Đối với máy cảm ứng: Dùng tay chạm vào màn hình cảm ứng để di chuyển. Chạm nhanh 2 lần vào 1 đối
                            tượng để tương tác.
                            Đối với PC: Dùng chuột, click chuột phải để di chuyển, click chuột trái để chọn, click đôi vào
                            đối tượng để tương tác

                        <p>3. Một số thông tin căn bản</p>
                        <p>- Đậu thần dùng để tăng KI và HP ngay lập tức.</p>
                        <p>- Bạn chỉ mang theo người được 10 hạt đậu. Nếu muốn mang nhiều hơn, hãy xin từ bạn bè trong
                            Bang.</p>
                        <p>- Tất cả các sách kỹ năng đều có thể học miễn phí tại Quy Lão Kame, khi bạn có đủ điểm tiềm
                            năng.</p>
                        <p>- Bạn không thể bay, dùng kỹ năng, nếu hết KI.</p>
                        <p>- Tấn công quái vật cùng bạn bè trong Bang sẽ mang lại nhiều điểm tiềm năng hơn đánh một mình.
                        </p>
                        <p>- Tập luyện với bạn bè tại khu vực thích hợp sẽ mang lại nhiều điểm tiềm năng hơn đánh quái vật.
                        </p>
                        <p>- Khi được nâng cấp, đậu thần sẽ phục hồi nhiều HP và KI hơn.</p>
                        <p>- Vào trò chơi đều đặn mỗi ngày để nhận được Ngọc miễn phí.</p>
                        <p>- Đùi gà sẽ phục hồi 100% HP, KI. Cà chua phục hồi 100% KI. Cà rốt phục hồi 100% HP.</p>
                        <p>- Cây đậu thần kết một hạt sau một thời gian, cho dù bạn đang offline.</p>
                        <p>- Sau 3 ngày không tham gia trò chơi, bạn sẽ bị giảm sức mạnh do lười luyện tập.</p>
                        <p>- Bạn sẽ giảm thể lực khi đánh quái, nhưng sẽ tăng lại thể lực khi không đánh nữa.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 offset-xl-1 border-start-lg">
                    <!-- Sharing -->
                    <div class="position-relative">

                        <div class="text-center"><img src="{{ asset('client/gif/logo-light.gif') }}" class="rounded-circle"
                                width="100" alt="Image"></div>
                        <div class="mt-6 my-2">
                            <p class="h5 mt-4">IP: Chờ Cập Nhập</p>
                            <p class="h5 mt-4">Máy Chủ: </p>
                            <p>1. NRO AOD ( <small style="color: red">Bảo Trì</small> )</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container ">
            <div class="position-relative px-md-5">
                <button type="button" id="prev"
                    class="btn btn-prev btn-icon btn-sm position-absolute top-50 translate-middle-y start-0 d-none d-md-inline-flex mt-n4"
                    tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-76c6fa88d25df385">
                    <i class="bx bx-chevron-left"></i>
                </button>
                <button type="button" id="next"
                    class="btn btn-next btn-icon btn-sm position-absolute top-50 translate-middle-y end-0 d-none d-md-inline-flex mt-n4"
                    tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-76c6fa88d25df385">
                    <i class="bx bx-chevron-right"></i>
                </button>
                <style>
                    .swiper-wrapper {
                        position: relative;
                        width: 100%;
                        height: 195px;
                        z-index: 1;
                        display: flex;
                        transition-property: transform;
                        box-sizing: content-box
                    }
                </style>
                <div class="swiper pt-1 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                    data-swiper-options="{
    &quot;slidesPerView&quot;: 1,
    &quot;spaceBetween&quot;: 20,
    &quot;loop&quot;: true,
    &quot;pagination&quot;: {
      &quot;el&quot;: &quot;.swiper-pagination&quot;,
      &quot;clickable&quot;: true
    },
    &quot;navigation&quot;: {
      &quot;prevEl&quot;: &quot;#prev&quot;,
      &quot;nextEl&quot;: &quot;#next&quot;
    },
    &quot;breakpoints&quot;: {
      &quot;500&quot;: {
        &quot;slidesPerView&quot;: 2,
        &quot;spaceBetween&quot;: 16
      },
      &quot;700&quot;: {
        &quot;slidesPerView&quot;: 2,
        &quot;spaceBetween&quot;: 24
      },
      &quot;1000&quot;: {
        &quot;slidesPerView&quot;: 3,
        &quot;spaceBetween&quot;: 24
      }
    }
  }">
                    <div class="swiper-wrapper" data-video="true" id="swiper-wrapper-76c6fa88d25df385" aria-live="polite"
                        style="transform: translate3d(-707px, 0px, 0px); transition-duration: 0ms;">
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group"
                            aria-label="5 / 6" style="width: 329.5px; margin-right: 24px;">
                            <a href="{{ asset('client/img/1458721603_screen640x640-4.jpeg') }}"
                                class="gallery-item rounded-3" data-sub-html="<h6 class= fs-sm text-light >Chú Bé Rồng</h6>"
                                data-lg-id="6f0a4e16-1fe1-4a23-8f89-ddda63481974">
                                <img src="{{ asset('client/img/1458721603_screen640x640-4.jpeg') }}" alt="Chú Bé Rồng">
                                <!-- <div class="gallery-item-caption fs-sm fw-medium">Gallery image caption</div> -->
                            </a>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="5"
                            role="group" aria-label="6 / 6" style="width: 329.5px; margin-right: 24px;">
                            <a href="{{ asset('client/img/1458721609_screen640x640-4.jpeg') }}"
                                class="gallery-item rounded-3" data-sub-html="<h6 class= fs-sm text-light >Chú Bé Rồng</h6>"
                                data-lg-id="90885922-096e-4932-a6f8-5704dbae2a38">
                                <img src="{{ asset('client/img/1458721609_screen640x640-4.jpeg') }}" alt="Chú Bé Rồng">
                                <!-- <div class="gallery-item-caption fs-sm fw-medium">Gallery image caption</div> -->
                            </a>
                        </div>
                        <!-- Item -->
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" role="group"
                            aria-label="2 / 6" style="width: 329.5px; margin-right: 24px;">
                            <a href="{{ asset('client/img/1458721603_screen640x640-2.jpeg') }}"
                                class="gallery-item rounded-3" data-sub-html="<h6 class= fs-sm text-light >Chú Bé Rồng</h6>"
                                data-lg-id="a96dfc62-169e-47f2-97ba-304f7885940a">
                                <img src="{{ asset('client/img/1458721603_screen640x640-2.jpeg') }}" alt="Chú Bé Rồng">
                                <!-- <div class="gallery-item-caption fs-sm fw-medium">Gallery image caption</div> -->
                            </a>
                        </div>
                        <!-- Item -->
                        <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 6"
                            style="width: 329.5px; margin-right: 24px;">
                            <a href="{{ asset('client/img/1458721603_screen640x640-1.jpeg') }}"
                                class="gallery-item rounded-3" data-sub-html="<h6 class= fs-sm text-light >Chú Bé Rồng</h6>"
                                data-lg-id="d2d1ee7b-27be-47aa-ae4b-489e87c00587">
                                <img src="{{ asset('client/img/1458721603_screen640x640-1.jpeg') }}" alt="Chú Bé Rồng">
                                <!-- <div class="gallery-item-caption fs-sm fw-medium">Gallery image caption</div> -->
                            </a>
                        </div>
                        <!-- Item -->
                        <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 6"
                            style="width: 329.5px; margin-right: 24px;">
                            <a href="{{ asset('client/img/1458721603_screen640x640.jpeg') }}"
                                class="gallery-item rounded-3"
                                data-sub-html="<h6 class= fs-sm text-light >Chú Bé Rồng</h6>"
                                data-lg-id="fe655a6a-f91b-4de3-b46d-6b340bcdc909">
                                <img src="{{ asset('client/img/1458721603_screen640x640.jpeg') }}" alt="Chú Bé Rồng">
                                <!-- <div class="gallery-item-caption fs-sm fw-medium">Gallery image caption</div> -->
                            </a>
                        </div>
                        <!-- Item -->
                        <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 6"
                            style="width: 329.5px; margin-right: 24px;">
                            <a href="{{ asset('client/img/1458721603_screen640x640-4.jpeg') }}"
                                class="gallery-item rounded-3"
                                data-sub-html="<h6 class= fs-sm text-light >Chú Bé Rồng</h6>"
                                data-lg-id="a0709502-e735-47ba-89dc-8db74520d4fc">
                                <img src="{{ asset('client/img/1458721603_screen640x640-4.jpeg') }}" alt="Chú Bé Rồng">
                                <!-- <div class="gallery-item-caption fs-sm fw-medium">Gallery image caption</div> -->
                            </a>
                        </div>
                        <!-- Item -->
                        <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="5" role="group"
                            aria-label="6 / 6" style="width: 329.5px; margin-right: 24px;">
                            <a href="{{ asset('client/img/1458721609_screen640x640-4.jpeg') }}"
                                class="gallery-item rounded-3"
                                data-sub-html="<h6 class= fs-sm text-light >Chú Bé Rồng</h6>"
                                data-lg-id="a6ac0e57-49bf-4307-875e-86c1a63784ba">
                                <img src="{{ asset('client/img/1458721609_screen640x640-4.jpeg') }}" alt="Chú Bé Rồng">
                                <!-- <div class="gallery-item-caption fs-sm fw-medium">Gallery image caption</div> -->
                            </a>
                        </div>

                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                            data-swiper-slide-index="1" role="group" aria-label="2 / 6"
                            style="width: 329.5px; margin-right: 24px;">
                            <a href="{{ asset('client/img/1458721603_screen640x640-2.jpeg') }}"
                                class="gallery-item rounded-3"
                                data-sub-html="<h6 class= fs-sm text-light >Chú Bé Rồng</h6>"
                                data-lg-id="d0e1a248-88c4-4467-bedd-80fb9f9c4542">
                                <img src="{{ asset('client/img/1458721603_screen640x640-2.jpeg') }}" alt="Chú Bé Rồng">
                                <!-- <div class="gallery-item-caption fs-sm fw-medium">Gallery image caption</div> -->
                            </a>
                        </div>
                    </div>
                    <div
                        class="swiper-pagination position-relative pt-3 pt-sm-4 mt-4 swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                            role="button" aria-label="Go to slide 1" aria-current="true"></span><span
                            class="swiper-pagination-bullet" tabindex="0" role="button"
                            aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0"
                            role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet"
                            tabindex="0" role="button" aria-label="Go to slide 4"></span><span
                            class="swiper-pagination-bullet" tabindex="0" role="button"
                            aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0"
                            role="button" aria-label="Go to slide 6"></span>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </section>
    </section>
@endsection
