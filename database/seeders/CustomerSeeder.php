<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1. Khi seeder thì ta muốn xóa toàn bộ dữ liệu ở table đó
        DB::table('customers')->delete();

        // Reset id về lại 1
        DB::table('customers')->truncate();

        // 2. Ta sẽ thêm mới phim bằng lệnh create
        DB::table('customers')->insert([
            [
                'ho_va_ten' => "Lương Quân",
                'email'     => "quanluong2001@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0905057611",
                'dia_chi'=>"11 Nguyễn Văn Linh",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today()->addDays(rand(1,2)),
            ],
            [
                'ho_va_ten' => "Hoàng hải",
                'email'     =>"lehoanghai180101@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0905057612",
                'dia_chi'=>"12 Nguyễn Văn Linh",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today()->addDays(rand(1,2)),
            ],
            [
                'ho_va_ten' => "Thương Nguyễn",
                'email'=>"nguyencthuong2000@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0905057613",
                'dia_chi'=>"13 Nguyễn Văn Linh",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today()->addDays(rand(1,2)),
            ],
            [
                'ho_va_ten' => "Thông Nguyễn",
                'email'=>"thongnguyen632002@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0905057614",
                'dia_chi'=>"14 Nguyễn Văn Linh",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today(),
            ],
            [
                'ho_va_ten' => "Lợi Nguyễn",
                'email'=>"nguyenloi25012002@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0905057615",
                'dia_chi'=>"15 Nguyễn Văn Linh",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today(),
            ],
            [
                'ho_va_ten' => "Hồng Thu",
                'email'=>"hongthu24032001@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0905057616",
                'dia_chi'=>"16 Nguyễn Văn Linh",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today(),
            ],
            [
                'ho_va_ten' => "Van Nhat",
                'email'=>"vannhat1711@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0905057617",
                'dia_chi'=>"17 Nguyễn Văn Linh",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today()->subDays(rand(1,4)),
            ],
            [
                'ho_va_ten' => "Gia Minh",
                'email'=>"giaminh2221@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0905057618",
                'dia_chi'=>"18 Nguyễn Văn Linh",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today()->subDays(rand(1,4)),
            ],
            [
                'ho_va_ten' => "Phạm Phúc",
                'email'=>"phuc0985531639@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0905057619",
                'dia_chi'=>"19 Nguyễn Văn Linh",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today()->subDays(rand(1,4)),
            ],
            [
                'ho_va_ten' => "Trần Quang Sang",
                'email'=>"tranquangsang2k1@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0905057610",
                'dia_chi'=>"10 Nguyễn Văn Linh",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today()->subDays(rand(1,4)),
            ],
            [
                'ho_va_ten' => "Nguyễn Hồng Pháp",
                'email'=>"nguyenphapj@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0353543420",
                'dia_chi'=>"Quảng Nam",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today()->subDays(rand(1,4)),
            ],
            [
                'ho_va_ten' => "Stardark",
                'email'     => "stardarkcinema@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0905057611",
                'dia_chi'=>"11 Nguyễn Văn Linh",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today()->addDays(rand(1,2)),
            ],
        ]);
    }
}
