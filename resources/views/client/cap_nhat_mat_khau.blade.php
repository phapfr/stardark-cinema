@extends('client.master')
@section('content')
<section class="contact-area contact-bg" data-background="/assets_client/img/bg/contact_bg.jpg" style="background-image: url(&quot;img/bg/contact_bg.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="contact-form-wrap">
                    <div class="widget-title mb-50">
                        <h5 class="title">Đăng Nhập</h5>
                    </div>
                    <div class="contact-form">
                        <form action="/update-password" method="post">
                            @csrf
                            <div class="col-md-12">
                                <input name="hash_reset" type="hidden" value="{{ $hash }}">
                            </div>
                            <div class="col-md-12">
                                <input name="password" type="text" placeholder="Nhập vào mật khẩu">
                            </div>
                            <div class="col-md-12">
                                <input name="re_password" type="text" placeholder="Nhập lại mật khẩu">
                            </div>
                            {{-- <div class="col-md-12">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div> --}}
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn">Đổi Mật Khẩu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>
@endsection
