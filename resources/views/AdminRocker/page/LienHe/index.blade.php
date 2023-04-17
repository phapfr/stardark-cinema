@extends('AdminRocker.share.master')
@section('noi_dung')
    <div class="row" id="app">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <b class="fs-4">Danh Sách Liên Hệ</b>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center align-middle bg-primary text-white">
                                    <th>#</th>
                                    <th>Họ Và Tên</th>
                                    <th>Email</th>
                                    <th>Tiêu Đề</th>
                                    <th>Nội Dung</th>
                                    <th>Trạng thái</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(value, key) in list_lien_he">
                                    <th class="text-center align-middle">@{{ key + 1 }}</th>
                                    <td class="align-middle">@{{ value.ho_va_ten }}</td>
                                    <td class="align-middle">@{{ value.email }}</td>
                                    <td class="align-middle">@{{ value.tieu_de }}</td>
                                    <td class="align-middle">@{{ value.noi_dung }}</td>
                                    <td class="text-center align-middle">
                                        <button class="btn btn-warning">Chờ xử lý</button>
                                    </td>
                                    <td class="text-center align-middle">
                                        <button v-on:click="deleteLienHe = value" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal" class="btn btn-danger">Xóa</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-danger">
                                    Bạn có chắc chắn xóa không !!!
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                    <button v-on:click="deletelienHe()" type="button" class="btn btn-primary">Xóa</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        new Vue({
            el: '#app',
            data: {
                list_lien_he: [],
                deleteLienHe: {},
            },
            created() {
                this.loadData();
            },
            methods: {
                loadData() {
                    axios
                        .get('/admin/lien-he/data')
                        .then((res) => {
                            this.list_lien_he = res.data.data;
                        });
                },

                deletelienHe() {
                    axios
                        .post('/admin/lien-he/delete', this.deleteLienHe)
                        .then((res) => {
                            if (res.data.status) {
                                toastr.success(res.data.message);
                                this.loadData();
                                $('#deleteModal').modal('hide');
                            } else {
                                toastr.error('Có lỗi không mong muốn!');
                            }
                        })
                        .catch((res) => {
                            $.each(res.response.data.errors, function(k, v) {
                                toastr.error(v[0]);
                            });
                        });
                },
            }
        });
    </script>
@endsection
