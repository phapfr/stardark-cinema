@extends('client.master')
@section('content')
    <section class="movie-details-area" data-background="/assets_client/img/bg/cinema2.png">
        <div id="app" class="container">
            <div class="row align-items-end mb-60">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="title">Thanh Toán</h2>
                        <div style="border: 2px solid black; margin-top: 10px"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="episode-watch-wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <button class="btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="season">Tên Phim: {{ $phim->ten_phim }} - Lịch Chiếu:
                                            {{ Carbon\Carbon::parse($phim->thoi_gian_bat_dau)->format('H:i d/m/Y') }}</span>
                                        <span class="video-count">{{ $tongVe }} Vé đã đặt</span>
                                    </button>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            @foreach ($dsGheBan as $key => $value)
                                                <li><a href="#!" class="popup-video"><i
                                                            class="fa-solid fa-couch"></i>Ghế {{ $value->ten_ghe }}</a>
                                                    <span class="duration"><i
                                                            class="fa-solid fa-money-check-dollar"></i></i>75,000 vnđ</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <button class="btn-block text-left collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="season">Tổng Tiền Thanh Toán</span>
                                        <span class="video-count">{{ number_format($tongVe * 75000, 0, '.', ',') }}
                                            vnđ</span>
                                    </button>
                                    <button class="btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="season">Phương Thức Thanh Toán</span>
                                        <span class="video-count">Chuyển Khoản Qua Ngân Hàng <br> Vietinbank: 56824765745</span>
                                    </button>
                                    {{-- <button class="btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="season">Thời Gian Có Thể Thanh Toán</span>
                                        <span class="video-count">
                                            <a href="#!" class="btn"
                                                style="background-color: darkgray; color: black">@{{ time }}
                                                s</a>
                                        </span>
                                    </button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
{{-- @section('js')
    <script>
        new Vue({
            el: '#app',
            data: {
                time: 200,
            },
            created() {
                setInterval(() => {
                    if (this.time <= 1) {
                        toastr.error("Đã hết thời gian thanh toán");
                        window.location.replace("/");
                    }
                    this.time--;
                }, 1000);
            },
        });
    </script>
@endsection --}}
