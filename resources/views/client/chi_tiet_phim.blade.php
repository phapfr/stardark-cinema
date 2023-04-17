@extends('client.master')

@section('content')
    <!-- movie-details-area -->
    <section class="movie-details-area" data-background="/assets_client/img/bg/cinema2.png">
        <div class="container">
            <div class="row align-items-end mb-60">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="title">Chi Tiết Phim</h2>
                        <div style="border: 2px solid black; margin-top: 10px"></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center position-relative">
                <div class="col-md-2">
                    <div class="movie-details-img text-center">
                        <img width="200" height="300px" src="{{ isset($phim) ? $phim->avatar : '' }}" alt="">
                        <a href="{{ isset($phim) ? $phim->trailer : '' }}" class="popup-video"><img
                                src="/assets_client/img/images/play_icon.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="movie-details-content">
                        <h1 style="font-size: 50px; font-weight: 700">{{ isset($phim) ? $phim->ten_phim : '' }}</h1>
                        <div class="banner-meta">
                            <ul style="display: block">
                                <li class="category">
                                    <p style="color: black" href="#!"><b style="font-size: 15px">Thể loại:</b>
                                        {{ isset($phim) ? $phim->the_loai : '' }}</p>
                                </li>
                                <li class="category">
                                    <p style="color: black" href="#!"><b style="font-size: 15px">Đạo Diễn:</b>
                                        {{ isset($phim) ? $phim->dao_dien : '' }}</p>
                                </li>
                                <li class="category">
                                    <p style="color: black" href="#!"><b style="font-size: 15px">Diễn Viên:</b>
                                        {{ isset($phim) ? $phim->dien_vien : '' }}</p>
                                </li>
                                <li class="release-time">
                                    <span><b>Ngày Khởi Chiếu:
                                        </b>{{ isset($phim) ? Carbon\Carbon::parse($phim->ngay_khoi_chieu)->format('d/m/Y') : '' }}</span>
                                </li>
                                <li>
                                    <span><b>Thời Lượng: </b>{{ isset($phim) ? $phim->thoi_luong : '' }} phút</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    @foreach ($lichChieu as $key => $value)
                        <a href="/client/dat-ve/{{ $value->id }}"
                            class="m-2 banner-btn btn wow fadeInUp">{{ Carbon\Carbon::parse($value->thoi_gian_bat_dau)->format('H:i d/m/Y') }}</a>
                    @endforeach
                </div>
                <div class="col-md-12 mt-3">
                    <h3>Tóm tắt</h3>
                    <span>{{ isset($phim) ? $phim->mo_ta : '' }}</span>
                </div>
            </div>
        </div>
    </section>
    <!-- movie-details-area-end -->
@endsection
