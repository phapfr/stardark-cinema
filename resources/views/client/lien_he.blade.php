@extends('client.master')

@section('content')
    <div id="app">
        <!-- contact-area -->
        <section class="contact-area contact-bg" data-background="/assets_client/img/bg/cinema2.png">
            <div class="container">
                <div class="row align-items-end mb-60">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2 class="title">Liên Hệ</h2>
                            <div style="border: 2px solid black; margin-top: 10px"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="contact-form-wrap">
                            <div class="widget-title mb-50">
                                <h5 class="title">Điền Thông Tin Liên Hệ</h5>
                            </div>
                            <div class="contact-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" v-model="themmoi.ho_va_ten"
                                            placeholder="Họ Và Tên *">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="email" v-model="themmoi.email" placeholder="Email *">
                                    </div>
                                </div>
                                <input type="text" v-model="themmoi.tieu_de" placeholder="Chủ Đề *">
                                <textarea name="message" v-model="themmoi.noi_dung" placeholder="Gõ ý kiến của bạn vào đây..."></textarea>
                                <div class="text-center">
                                    <button class="btn" type="button" v-on:click="sendLienHen()">Gửi Ý Kiến</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->
    </div>
@endsection
@section('js')
    <script>
        new Vue({
            el: '#app',
            data: {
                themmoi: {},
            },
            created() {

            },
            methods: {
                sendLienHen() {
                    axios
                        .post('/send-lien-he', this.themmoi)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success(res.data.message);
                                this.themmoi = {};
                            }
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },
            },
        });
    </script>
@endsection
