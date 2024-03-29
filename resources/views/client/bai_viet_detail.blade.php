@extends('client.master')

@section('content')
    <section class="blog-details-area blog-bg" data-background="/assets_client/img/bg/cinema2.png"
        style="background-image: url(&quot;img/bg/blog_bg.jpg&quot;);">
        <div class="container">
            <div class="row align-items-end mb-60">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="title">Chi Tiết Bài Viết</h2>
                        <div style="border: 2px solid black; margin-top: 10px"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @php
                        $hinh_anh = explode(',', $baiVietDetail['hinh_anh']);
                    @endphp
                    <div class="blog-post-item blog-details-wrap">
                        <div class="blog-post-content">
                            <div class="blog-img-wrap">
                                <div class="row">
                                    @foreach ($hinh_anh as $key => $value)
                                        <div class="col-md-12">
                                            <img style="width:100%" src="{{ $value }}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="blog-details-top-meta">
                                <span class="user"><i class="far fa-user"></i> by <a href="#!">Admin</a></span>
                                <span class="date"><i class="far fa-clock"></i> 10 Mar 2023</span>
                            </div>
                            <h2 class="title">{{ $baiVietDetail->tieu_de }}</h2>
                            <p class="text-dark">{{ $baiVietDetail->noi_dung }}</p>
                            <div class="blog-post-meta">
                                <div class="blog-details-tags">
                                    <ul>
                                        <li><i class="fas fa-tags"></i> <span>Tags :</span></li>
                                        <li><a href="#!">Movies ,</a> <a href="#!">Creative ,</a> <a
                                                href="#!">News ,</a> <a href="#!">English</a></li>
                                    </ul>
                                </div>
                                <div class="blog-post-share">
                                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#!"><i class="fab fa-twitter"></i></a>
                                    <a href="#!"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="blog-sidebar">
                        <div class="widget blog-widget">
                            <div class="widget-title mb-30">
                                <h5 class="title">Những Bài Đăng Gần Đây</h5>
                            </div>
                            <div class="rc-post">
                                <ul>
                                    @foreach ($baiViet as $key => $value)
                                        @php
                                            $hinh_anh = explode(',', $value->hinh_anh);
                                        @endphp
                                        <li class="rc-post-item">
                                            <div class="thumb">
                                                <a href="/bai-viet/detail/{{ $value->id }}"><img
                                                        style="width: 100px; height: 80px; object-fit: cover"
                                                        src="{{ $hinh_anh[0] }}" alt=""></a>
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a
                                                        href="/bai-viet/detail/{{ $value->id }}">{{ $value->tieu_de }}</a>
                                                </h5>
                                                <span class="date"><i class="far fa-clock"></i> 10 Mar 2023</span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
