@extends('client.master')

@section('content')
    <section class="contact-area contact-bg" data-background="/assets_client/img/bg/cinema2.png"
        style="background-image: url(&quot;img/bg/cinema2.png&quot;);">
        <div class="container">
            <div class="row align-items-end mb-60">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="title">Đổi Mật Khẩu</h2>
                        <div style="border: 2px solid black; margin-top: 10px"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="contact-form-wrap">
                        <div class="widget-title mb-50">
                            <h5 class="title">Cập Nhập Mật Khẩu</h5>
                        </div>
                        <div class="contact-form">
                            <form action="/client/cap-nhap-mat-khau" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <input name="password" type="password" placeholder="Nhập vào mật khẩu">
                                </div>
                                <div class="col-md-12">
                                    <input name="re_password" type="password" placeholder="Nhập lại mật khẩu">
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
