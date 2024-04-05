@extends('client.app')
@section('content')
    <!-- Breadcrumb -->
    <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item active">
                <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Trang Chủ</a>
            </li>

            {{-- <li class="breadcrumb-item active" aria-current="page">Danh Sách Trò Chơi</li> --}}
        </ol>
    </nav>

    <section class="jarallax container pb-4 pb-lg-4 position-relative" data-jarallax="" data-speed="0.4">
        <div class="jarallax-img"
            style="background-image: url('https://lh3.googleusercontent.com/RDGzAurZhcIv3zx-8fT9mp4IGb7uMrVcWmNnC4Ahi1oSl2eVFvJbG5lCs26AQm7A1Ms=s1024-rw');">
        </div>
        <div class="d-none d-xxl-block" style="height: 400px;"></div>
        <div class="d-none d-lg-block d-xxl-none" style="height: 460px;"></div>
        <div class="d-none d-md-block d-lg-none" style="height: 350px;"></div>
        <div class="d-md-none" style="height: 300px;"></div>
    </section>

    <!-- Portfolio list -->
    <section class="container pb-2 pb-lg-3 position-relative">
        <section class="container py-5 my-1 my-md-4 my-lg-5">
            <div class="row">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                        <h2 class="h1 mb-4">Giới Thiệu</h2>
                        <p class="fs-lg mb-0"></p>
                        <p>Người chơi sẽ hóa thân thành một trong những anh hùng của 3 hành tinh: Trái Đất, Xayda, Namếc.
                            Cùng luyện tập, tăng cường sức mạnh và kỹ năng. Đoàn kết cùng chiến đấu chống lại các thế lực
                            hung ác. Cùng nhau tranh tài.&nbsp;</p>
                        <p>Đặc điểm nổi bật:</p>
                        <p>-&nbsp;Thể loại hành động, nhập vai. Trực tiếp điều khiển nhân vật hành động. Dễ chơi, dễ điều
                            khiển nhân vật. Đồ họa sắc nét. Có phiên bản đồ họa cao cho điện thoại mạnh và phiên bản pixel
                            cho máy cấu hình thấp.&nbsp;</p>
                        <p>- Cốt truyện bám sát nguyên tác. Người chơi sẽ gặp tất cả nhân vật từ Bunma, Quy lão kame,
                            Jacky-chun, Tàu Pảy Pảy... cho đến Fide, Pic, Poc, Xên, Broly, đội Bojack.&nbsp;</p>
                        <p>- Đặc điểm nổi bật nhất: Tham gia đánh doanh trại độc nhãn. Tham gia đại hội võ thuật. Tham gia
                            săn lùng ngọc rồng để mang lại điều ước cho bản thân.&nbsp;</p>
                        <p>-&nbsp;Tương thích tất cả các dòng máy trên thị trường hiện nay: Máy tính PC, Điện thoại di động
                            Nokia Java, Android, iPhone, Windows Phone, và máy tính bảng Android, iPad.</p>
                        <p></p>
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
                    <div class="swiper-wrapper" data-video="true" id="swiper-wrapper-76c6fa88d25df385"
                        aria-live="polite" style="transform: translate3d(-707px, 0px, 0px); transition-duration: 0ms;">
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
                                class="gallery-item rounded-3"
                                data-sub-html="<h6 class= fs-sm text-light >Chú Bé Rồng</h6>"
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
