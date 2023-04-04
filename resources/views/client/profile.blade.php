@extends('client.master')
@section('content')
    <section class="contact-area contact-bg" data-background="/assets_client/img/bg/cinema2.png"
        style="background-image: url(&quot;img/bg/cinema2.png&quot;);">
        <div class="container">
            @php
                $user = Auth::guard('customer')->user();
            @endphp
            <div class="row align-items-end mb-60">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="title">Trang Cá Nhân</h2>
                        <div style="border: 2px solid black; margin-top: 10px"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="contact-form-wrap">
                        <div class="widget-title mb-50">
                            <h5 class="title">Cập Nhập Thông Tin</h5>
                        </div>
                        <div class="contact-form">
                            <form action="/client/cap-nhap-thong-tin" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <div class="col-md-12">
                                    <input name="ho_va_ten" value="{{ $user->ho_va_ten }}" type="text"
                                        placeholder="Nhập vào họ và tên">
                                </div>
                                <div class="col-md-12">
                                    <input name="email" value="{{ $user->email }}" type="text"
                                        placeholder="Nhập vào địa chỉ email">
                                </div>
                                <div class="col-md-12">
                                    <input name="so_dien_thoai" value="{{ $user->so_dien_thoai }}" type="text"
                                        placeholder="Nhập vào số điện thoại">
                                </div>
                                <div class="col-md-12">
                                    <input name="dia_chi" value="{{ $user->dia_chi }}" type="text"
                                        placeholder="Nhập vào địa chỉ">
                                </div>
                                <div class="col-md-12">
                                    <input name="ngay_sinh" value="{{ $user->ngay_sinh }}" type="date"
                                        placeholder="Nhập vào ngày sinh">
                                </div>
                                <div class="col-md-12">
                                    <select name="gioi_tinh"
                                        style="background-color: #1f1e24; color: #bcbcbc; border: 1px solid #1f1e24; padding: 14px 25px; margin-bottom: 30px; width: 100%;">
                                        <option value="1" {{ $user->gioi_tinh == 1 ? 'selected' : '' }}>Giới Tính Nam
                                        </option>
                                        <option value="0" {{ $user->gioi_tinh == 0 ? 'selected' : '' }}>Giới Tính Nữ
                                        </option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn">Cập Nhập</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>
@endsection
