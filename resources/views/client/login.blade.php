@extends('client.master')

@section('content')
    <section class="contact-area contact-bg" data-background="/assets_client/img/bg/cinema2.png"
        style="background-image: url(&quot;img/bg/contact_bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="contact-form-wrap">
                        <div class="widget-title mb-50">
                            <h5 class="title">Đăng Nhập</h5>
                        </div>
                        <div class="contact-form">
                            <form action="/login" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <input name="email" type="text" placeholder="Nhập vào địa chỉ email">
                                </div>
                                <div class="col-md-12">
                                    <input name="password" type="password" placeholder="Nhập vào mật khẩu">
                                </div>
                                {{-- <div class="col-md-12">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div> --}}
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn">Đăng Nhập</button>
                                    </div>
                                    <div class="col-md-12 text-center mt-4">
                                        <a href="/reset-password"><strong class="text-dark">Quên mật khẩu ?</strong></a>
                                    </div>
                                </div>
                                <div style="border: 1px solid black; margin:10px 0"></div>
                                <div class="row">
                                    <div class="col-md-12 text-center mb-3">
                                        <i>Tạo tài khoản mới bằng Email hoặc số điện thoại</i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <a href="/register" class="btn">Đăng Kí</a>
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
