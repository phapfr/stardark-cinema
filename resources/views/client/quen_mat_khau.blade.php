@extends('client.master')

@section('content')
    <section class="contact-area contact-bg" data-background="/assets_client/img/bg/cinema2.jpg"
        style="background-image: url(&quot;img/bg/cinema2.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="contact-form-wrap">
                        <div class="widget-title mb-50">
                            <h5 class="title">Quên Mật Khẩu</h5>
                        </div>
                        <div class="contact-form">
                            <form action="/reset-password" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <input name="email" type="text" placeholder="Nhập vào địa chỉ email">
                                </div>
                                {{-- <div class="col-md-12">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div> --}}
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn">Quên Mật Khẩu</button>
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
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>
@endsection
