<!doctype html>
<html class="no-js" lang="">

<head>
    @include('client.share.css')
</head>

<body>
    <!-- preloader -->
    {{-- <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <img src="/assets_client/img/preloader.svg" alt="">
            </div>
        </div>
    </div> --}}
    <!-- preloader-end -->
    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target bg-dark text-white" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header class="header-style-two">
        @php
            $check = Auth::guard('customer')->check();
            $user = Auth::guard('customer')->user();
        @endphp
        {{-- <div class="header-top-wrap">
            <div class="container custom-container">
                <div class="row align-items-center">
                    <div class="col-md-6 d-none d-md-block">
                        <div class="header-top-subs">
                            <p>Rạp chiếu phim <span>Stardark Cinema</span></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-top-link">
                            <ul class="quick-link">
                                @if ($check)
                                    <li><a href="#!">Chào Bạn, {{ $user->ho_va_ten }}</a></li>
                                @endif
                                <li><a href="#!">About Us</a></li>
                                <li><a href="#!">FAQS</a></li>
                            </ul>
                            <ul class="header-social">
                                <li><a href="#!"><span class="fab fa-facebook-square"></span></a></li>
                                <li><a href="#!"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#!"><span class="fab fa-pinterest-p"></span></a></li>
                                <li><a href="#!"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#!"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}



        <div id="sticky-header" class="menu-area transparent-header">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav show">
                                <div class="logo">
                                    <a href="/">
                                        <img width="80px"
                                            src="https://www.iconeasy.com/icon/png/System/I%20Love/Cinema.png"
                                            alt="Logo">
                                        <b
                                            style="display:inline-block; font-size: 25px; color:white; font-family:'Poppins', sans-serif; padding:10px; margin-top: 15px">Stardark</b>
                                    </a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li class="active menu-item-has-children"><a href="/">Trang Chủ</a>
                                        </li>
                                        <li class="menu-item-has-children"><a href="/phim-dang-chieu">Phim Đang
                                                Chiếu</a>
                                        </li>
                                        <li class="menu-item-has-children"><a href="/phim-sap-chieu">Phim Sắp Chiếu</a>
                                        </li>
                                        <li class="menu-item-has-children"><a href="/bai-viet">Bài Viết</a>
                                        </li>
                                        <li><a href="/lien-he">Liên Hệ</a></li>
                                    </ul>
                                </div>
                                <div class="header-action d-none d-md-block">
                                    <ul>
                                        <li class="d-none d-xl-block">
                                            <div class="footer-search">
                                                <form action="/tim-kiem" method="POST">
                                                    @csrf
                                                    <input type="text" name="search"
                                                        placeholder="Tìm Phim Yêu Thích">
                                                    <button type="submit"><i class="fas fa-search"></i></button>
                                                </form>
                                            </div>
                                        </li>
                                        @if ($check)
                                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                                <ul class="navigation">
                                                    <li class="active menu-item-has-children ml-4"><a href="#!"><i
                                                                class="fa-solid fa-user fa-2x"></i></a>
                                                        <ul class="submenu">
                                                            <li><a href="/client/cap-nhap-thong-tin">Trang Cá Nhân</a>
                                                            </li>
                                                            <li><a href="/client/cap-nhap-mat-khau">Đổi Mật Khẩu</a>
                                                            </li>
                                                            <li><a href="/logout">Đăng Xuất</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        @else
                                            <li class="header-btn"><a href="/login" class="btn">Sign In</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </nav>
                        </div>

                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <nav class="menu-box">
                                @if ($check)
                                    <ul class="navigation">
                                        <li class="active menu-item-has-children ml-4"><a href="#!"><i
                                                    class="fa-solid fa-user fa-2x mt-10"></i></a>
                                            <ul class="submenu">
                                                <li><a href="/client/cap-nhap-thong-tin">Trang Cá Nhân</a></li>
                                                <li><a href="/client/cap-nhap-mat-khau">Đổi Mật Khẩu</a></li>
                                                <li><a href="/logout">Đăng Xuất</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                @else
                                    <li class="header-btn m-3 text-center"><a href="/login" class="btn">Sign In</a>
                                    </li>
                                @endif
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>

                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li><a href="#!"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#!"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#!"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="#!"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#!"><span class="fab fa-youtube"></span></a></li>
                                        <div style="margin: 100px 116px 50px 50px;" class="close-btn"><i
                                                class="fas fa-times fa-4x"></i></div>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->


    <!-- main-area -->
    <main>

        <!-- slider-area -->
        {{-- <section class="slider-area slider-bg" data-background="{{ isset($config->bg_homepage) ? $config->bg_homepage : '/assets_client/img/banner/s_slider_bg.jpg'}}"> --}}
        <section class="slider-area slider-bg"
            style="background-image: url('{{ isset($config->bg_homepage) ? $config->bg_homepage : '/assets_client/img/bg/live_bg.png' }}')">
            <div class="slider-active">
                @if (isset($phim_1))
                    <div class="slider-item">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-0 order-lg-2">
                                    <div class="slider-img text-center text-lg-right" data-animation="fadeInRight"
                                        data-delay="1s">
                                        <img width="400px" src="{{ $phim_1->avatar }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-content">
                                        <h2 class="title" data-animation="fadeInUp" data-delay=".4s"
                                            style="font-size: 75px">
                                            {{ $phim_1->ten_phim }}</h2>
                                        <div class="banner-meta" data-animation="fadeInUp" data-delay=".6s">
                                            <ul>
                                                <li class="quality">
                                                    <span>{{ $phim_1->the_loai }}</span>
                                                    <span>hd</span>
                                                </li>
                                                <li class="category">
                                                    {{ $phim_1->dien_vien }}
                                                </li>
                                                <li class="release-time">
                                                    <span><i class="far fa-calendar-alt"></i>
                                                        {{ $phim_1->ngay_khoi_chieu }}</span>
                                                    <span><i class="far fa-clock"></i> {{ $phim_1->thoi_luong }}
                                                        min</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{ $phim_1->trailer }}" class="banner-btn btn popup-video"
                                            data-animation="fadeInUp" data-delay=".8s"><i class="fas fa-play"></i>
                                            Xem Trailer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if (isset($phim_2))
                    <div class="slider-item">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-0 order-lg-2">
                                    <div class="slider-img text-center text-lg-right" data-animation="fadeInRight"
                                        data-delay="1s">
                                        <img width="400px" src="{{ $phim_2->avatar }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-content">
                                        <h2 class="title" data-animation="fadeInUp" data-delay=".4s"
                                            style="font-size: 75px">
                                            {{ $phim_2->ten_phim }}</h2>
                                        <div class="banner-meta" data-animation="fadeInUp" data-delay=".6s">
                                            <ul>
                                                <li class="quality">
                                                    <span>{{ $phim_2->the_loai }}</span>
                                                    <span>hd</span>
                                                </li>
                                                <li class="category">
                                                    {{ $phim_2->dien_vien }}
                                                </li>
                                                <li class="release-time">
                                                    <span><i class="far fa-calendar-alt"></i>
                                                        {{ $phim_2->ngay_khoi_chieu }}</span>
                                                    <span><i class="far fa-clock"></i> {{ $phim_2->thoi_luong }}
                                                        min</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{ $phim_2->trailer }}" class="banner-btn btn popup-video"
                                            data-animation="fadeInUp" data-delay=".8s"><i class="fas fa-play"></i>
                                            Xem Trailer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if (isset($phim_3))
                    <div class="slider-item">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-0 order-lg-2">
                                    <div class="slider-img text-center text-lg-right" data-animation="fadeInRight"
                                        data-delay="1s">
                                        <img width="400px" src="{{ $phim_3->avatar }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-content">
                                        <h2 class="title" data-animation="fadeInUp" data-delay=".4s"
                                            style="font-size: 75px">
                                            {{ $phim_3->ten_phim }}</h2>
                                        <div class="banner-meta" data-animation="fadeInUp" data-delay=".6s">
                                            <ul>
                                                <li class="quality">
                                                    <span>{{ $phim_3->the_loai }}</span>
                                                    <span>hd</span>
                                                </li>
                                                <li class="category">
                                                    {{ $phim_3->dien_vien }}
                                                </li>
                                                <li class="release-time">
                                                    <span><i class="far fa-calendar-alt"></i>
                                                        {{ $phim_3->ngay_khoi_chieu }}</span>
                                                    <span><i class="far fa-clock"></i> {{ $phim_3->thoi_luong }}
                                                        min</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{ $phim_3->trailer }}" class="banner-btn btn popup-video"
                                            data-animation="fadeInUp" data-delay=".8s"><i class="fas fa-play"></i>
                                            Xem Trailer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </section>
        <!-- slider-area-end -->

        <!-- Phim Hay Nhất -->
        <section class="ucm-area ucm-bg2" data-background="/assets_client/img/bg/cinema2.png">
            <div class="container">
                <div class="row align-items-end mb-55">
                    <div class="col-lg-6">
                        <div class="section-title title-style-three text-center text-lg-left">
                            <span class="sub-title">Stardark Cinema</span>
                            <h2 class="title">Phim Hay Nhất</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ucm-nav-wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="dangChieu-tab" data-toggle="tab"
                                        href="#dangChieu" role="tab" aria-controls="tvShow"
                                        aria-selected="true">Phim Đang Chiếu</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="sapChieu-tab" data-toggle="tab" href="#sapChieu"
                                        role="tab" aria-controls="movies" aria-selected="false">Phim Sắp
                                        Chiếu</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="dangChieu" role="tabpanel"
                        aria-labelledby="dangChieu-tab">
                        <div class="ucm-active-two owl-carousel">
                            @foreach ($list_phim as $key => $value)
                                @if ($value->tinh_trang == 1)
                                    <div class="movie-item movie-item-two mb-30">
                                        <div class="movie-poster">
                                            <a href="/chi-tiet-phim/{{ $value->slug_ten_phim }}-{{ $value->id }}"><img
                                                    src="{{ $value->avatar }}" alt=""></a>
                                        </div>
                                        <div class="movie-content">
                                            <h5 style="color: black;" class="title"><a
                                                    href="/chi-tiet-phim/{{ $value->slug_ten_phim }}-{{ $value->id }}">{{ $value->ten_phim }}</a>
                                            </h5>
                                            <span class="rel">{{ $value->dao_dien }}</span>
                                            <div class="movie-content-bottom">
                                                <ul class="mt-1">
                                                    <li class="tag">
                                                        <a href="#!">HD</a>
                                                        <span class="like mt-1">{{ $value->thoi_luong }} min</span>
                                                    </li>
                                                    <li>
                                                        <span class="like"><i class="fas fa-thumbs-up"></i>
                                                            299</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sapChieu" role="tabpanel" aria-labelledby="sapChieu-tab">
                        <div class="ucm-active-two owl-carousel">
                            @foreach ($list_phim as $key => $value)
                                @if ($value->tinh_trang == 2)
                                    <div class="movie-item movie-item-two mb-30">
                                        <div class="movie-poster">
                                            <a href="/chi-tiet-phim/{{ $value->slug_ten_phim }}-{{ $value->id }}"><img
                                                    src="{{ $value->avatar }}" alt=""></a>
                                        </div>
                                        <div class="movie-content">
                                            <h5 style="color: black;" class="title"><a
                                                    href="/chi-tiet-phim/{{ $value->slug_ten_phim }}-{{ $value->id }}">{{ $value->ten_phim }}</a>
                                            </h5>
                                            <span class="rel">{{ $value->dao_dien }}</span>
                                            <div class="movie-content-bottom">
                                                <ul class="mt-1">
                                                    <li class="tag">
                                                        <a href="#!">HD</a>
                                                        <span class="like mt-1">{{ $value->thoi_luong }} min</span>
                                                    </li>
                                                    <li>
                                                        <span class="like"><i class="fas fa-thumbs-up"></i>
                                                            299</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Phim Nổi bật-end -->



        <!-- gallery-area -->
        <div class="gallery-area position-relative">
            <div class="gallery-bg"></div>
            <div class="container-fluid p-0 fix">
                <div class="row gallery-active">
                    <div class="col-12">
                        <div class="gallery-item">
                            <img src="{{ isset($config->slide_1) ? $config->slide_1 : '/assets_client/img/images/2.png' }} "
                                alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="gallery-item">
                            <img src="{{ isset($config->slide_2) ? $config->slide_2 : '/assets_client/img/images/31.png' }} "
                                alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="gallery-item">
                            <img src="{{ isset($config->slide_3) ? $config->slide_3 : '/assets_client/img/images/4.png' }} "
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-nav"></div>
        </div>
        <!-- gallery-area-end -->



        <!-- top-rated-movie -->
        <section class="top-rated-movie tr-movie-bg2" data-background="/assets_client/img/bg/cinema2.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="section-title title-style-three text-center mb-70">
                            <span class="sub-title">Stardark Cinema</span>
                            <h2 class="title">Phim Gần Đây</h2>
                        </div>
                    </div>
                </div>
                <div class="row tr-movie-active">
                    @foreach ($list_phim as $key => $value)
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two" style="height: 40rem; ">
                            <div class="movie-item movie-item-three mb-50" style=" ">
                                <div class="movie-poster mb-0">
                                    <img style="border-radius: 0" src="{{ $value->avatar }}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="{{ $value->trailer }}" style="background: rgba(0,0,0,0.5);"
                                                class="popup-video btn">Xem Trailer</a></li>
                                        <li><a href="/chi-tiet-phim/{{ $value->slug_ten_phim }}-{{ $value->id }}"
                                                class="btn" style="background: rgba(0,0,0,0.5);">Chi Tiết</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content p-3" style="border: 1px solid #e5e5e5">
                                    <div class="top">
                                        <h5 class="title"><a
                                                href="/chi-tiet-phim/{{ $value->slug_ten_phim }}-{{ $value->id }}">{{ $value->ten_phim }}</a>
                                        </h5>
                                        <span class="date"
                                            style="color: black">{{ Carbon\Carbon::parse($value->ngay_khoi_chieu)->format('d/m/Y') }}</span>
                                    </div>
                                    <div class="bottom pt-2" style="border-top: 1px solid #e5e5e5">
                                        <ul>
                                            <li class="">
                                                <span class="duration text-center"><i class="far fa-clock"
                                                        style="color: black"></i>
                                                    {{ $value->thoi_luong }}
                                                    min</span>
                                                <span class="rating text-center"><i
                                                        class="fa-regular fa-calendar-days text-dark"></i>{{ $value->ngay_khoi_chieu }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- top-rated-movie-end -->
    </main>
    <!-- main-area-end -->
    <!-- footer-area -->
    <footer>
        <div class="footer-top-wrap">
            <div class="container">
                <div class="footer-menu-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="footer-logo">
                                <a href="/">
                                    <img width="80px"
                                        src="https://www.iconeasy.com/icon/png/System/I%20Love/Cinema.png"
                                        alt="Logo">
                                    <b
                                        style="display:inline-block; font-size: 25px; color:white; font-family:'Poppins', sans-serif; padding-left:10px">Stardark</b>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="footer-menu">
                                <nav>
                                    <ul class="navigation">
                                        <li><a href="/">Trang Chủ</a></li>
                                        <li><a href="/phim-dang-chieu">Phim Đang Chiếu</a></li>
                                        <li><a href="/phim-sap-chieu">Phim Sắp Chiếu</a></li>
                                        <li><a href="/bai-viet">Bài Viết</a></li>
                                        <li><a href="/lien-he">Liên Hệ</a></li>
                                    </ul>
                                    <div class="footer-search">
                                        <form action="/tim-kiem" method="POST">
                                            @csrf
                                            <input type="text" name="search" placeholder="Tìm phim yêu thích">
                                            <button type="submit"><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="copyright-text">
                            <p>Copyright &copy; @php echo date('Y') @endphp . All Rights Reserved By <a href="/">Stardark
                                    Cinema</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->
    <!-- JS here -->
    @include('client.share.js')
    @yield('js')
</body>
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/63b6e9fcc2f1ac1e202be2e4/1gm1841gk';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>

</html>
