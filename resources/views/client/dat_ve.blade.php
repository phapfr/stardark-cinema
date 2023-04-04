@extends('client.master')
@section('content')
<section class="movie-details-area" data-background="/assets_client/img/bg/cinema2.png">
    <div id="app" class="container">
        <div class="row align-items-end mb-60">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2 class="title">Chọn Ghế Ngồi</h2>
                    <div style="border: 2px solid black; margin-top: 10px"></div>
                </div>
            </div>
        </div>
        <div class="row align-items-center position-relative">
            <div class="col-md-12">
                <div class="alert text-center text-white" style="background-color: darkgray; font-size: 23px" role="alert">
                    <b>MÀN HÌNH</b>
                </div>
            </div>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table style="border-collapse:separate" class="table table-bordered">
                        <tr v-for="i in (0, hang_ngang)" style="cursor: pointer">
                            <template v-for="j in (0, hang_doc)">
                                <td style="border: 1px solid darkgrey; margin: 5px" v-on:click="doiTrangThaiSangGiuCho(ds_ghe[(i - 1) * hang_doc +  j - 1])" v-if="ds_ghe[(i - 1) * hang_doc +  j - 1].trang_thai == 0" style="background-color: #e6e7e9" class="text-center align-middle" >
                                    @{{ ds_ghe[(i - 1) * hang_doc +  j - 1].ten_ghe }}
                                </td>
                                <td style="border: 1px solid darkgrey; margin: 5px" v-else-if="ds_ghe[(i - 1) * hang_doc +  j - 1].trang_thai == 1" class="bg-danger text-center align-middle text-white">
                                    @{{ ds_ghe[(i - 1) * hang_doc +  j - 1].ten_ghe }}
                                </td>
                                <template v-else>
                                    <td style="border: 1px solid darkgrey; margin: 5px" v-on:click="doiTrangThaiSangKhongDat(ds_ghe[(i - 1) * hang_doc +  j - 1])" v-if="ds_ghe[(i - 1) * hang_doc +  j - 1].id_khach_hang == id_login" class="bg-info text-center align-middle text-white">
                                        @{{ ds_ghe[(i - 1) * hang_doc +  j - 1].ten_ghe }}
                                    </td>
                                    <td style="border: 1px solid darkgrey; margin: 5px" v-on:click="doiTrangThaiSangGiuCho(ds_ghe[(i - 1) * hang_doc +  j - 1])" v-else style="background-color: #e6e7e9" class="text-center align-middle">
                                        @{{ ds_ghe[(i - 1) * hang_doc +  j - 1].ten_ghe }}
                                    </td>
                                </template>
                            </template>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-12 text-center pt-2" style="text-align: right">
                <a href="/client/thanh-toan" class="m-1 banner-btn btn wow">Thanh Toán</a>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script>
    new Vue({
        el  :   '#app',
        data:   {
            hang_doc    :   0,
            hang_ngang  :   0,
            ds_ghe      :   [],
            id_lich_chieu : {{ $id_lich_chieu }},
            id_login    :   {{ $user_login }}
        },
        created() {
            this.loadData();
        },
        methods:    {
            loadData() {
                axios
                    .get('/client/hien-thi-ghe-ban/' + this.id_lich_chieu)
                    .then((res) => {
                        this.hang_doc   = res.data.hang_doc;
                        this.hang_ngang = res.data.hang_ngang;
                        this.ds_ghe     = res.data.data;
                    });
            },
            doiTrangThaiSangGiuCho(v) {
                axios
                    .post('/client/dat-ve/giu-cho', v)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success('Đã giữ chổ thành công!');
                        } else {
                            toastr.error('Không thể giữ chổ!');
                        }
                        this.loadData();
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    });

            },
            doiTrangThaiSangKhongDat(v) {
                axios
                    .post('/client/dat-ve/huy-cho', v)
                    .then((res) => {
                        if(res.data.status) {
                            toastr.success('Đã hủy chổ thành công!');
                        } else {
                            toastr.error('Không thể hủy chổ!');
                        }
                        this.loadData();
                    })
                    .catch((res) => {
                        $.each(res.response.data.errors, function(k, v) {
                            toastr.error(v[0]);
                        });
                    });
            },
            // Đặt vé thì chúng ta có trạng thái từ 0 => 2 (vì chưa có ai đặt -> giữ chổ)
            // Đặt vé thì chúng ta có trạng thái từ 2 => 0 (giữ chổ -> không đặt nữa)
            // Nếu là giữ chổ: trang_thai = 2 và id_khach_hang
            // Nếu là ko đặt vé: trang_thai = 0 và id_khach_hang = null
        },
    });
</script>
@endsection
