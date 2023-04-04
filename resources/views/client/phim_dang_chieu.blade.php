@extends('client.master')

@section('content')
    <section class="movie-area movie-bg" data-background="/assets_client/img/bg/cinema2.png">
        <div class="container">
            <div class="row align-items-end mb-60">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="title">Phim Đang Chiếu</h2>
                        <div style="border: 2px solid black; margin-top: 10px"></div>
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
            <div class="row">
                <div class="col-md-12">
                    <img width="100%"
                        src="https://media.lottecinemavn.com/Media/WebAdmin/4514438fc2bd4dbb8383e7ca25ede5f6.jpg"
                        alt="">
                </div>
                <div class="col-md-12 mt-5">
                    <img width="100%"
                        src="https://media.lottecinemavn.com/Media/WebAdmin/62c291b9d7e243168b171be1ba6d45c2.jpg"
                        alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
