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
                'ho_va_ten'      => "Nguyễn Văn A",
                'email'          => "nguyenvana@gmail.com",
                'password'       => bcrypt(123456),
                'so_dien_thoai'  =>"0987654321",
                'dia_chi'        =>"03 Quang Trung",
                'gioi_tinh'      =>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today()->addDays(rand(1,2)),
            ],
            [
                'ho_va_ten' => "Nguyễn Văn B",
                'email'     => "nguyenvanb@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0987654321",
                'dia_chi'       =>"03 Quang Trung",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today()->addDays(rand(1,2)),
            ],
            [
                'ho_va_ten' => "Nguyễn Văn C",
                'email'     => "nguyenvanc@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0987654321",
                'dia_chi'       =>"03 Quang Trung",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today()->addDays(rand(1,2)),
            ],
            [
                'ho_va_ten' => "Nguyễn Văn D",
                'email'     => "nguyenvand@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0987654321",
                'dia_chi'       =>"03 Quang Trung",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today(),
            ],
            [
                'ho_va_ten' => "Nguyễn Văn E",
                'email'     => "nguyenvane@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0987654321",
                'dia_chi'       =>"03 Quang Trung",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today(),
            ],
            [
                'ho_va_ten' => "Nguyễn Văn F",
                'email'     => "nguyenvanf@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0987654321",
                'dia_chi'       =>"03 Quang Trung",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today(),
            ],
            [
                'ho_va_ten' => "Nguyễn Văn G",
                'email'     => "nguyenvang@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0987654321",
                'dia_chi'       =>"03 Quang Trung",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today()->subDays(rand(1,4)),
            ],
            [
                'ho_va_ten' => "Nguyễn Văn H",
                'email'     => "nguyenvanh@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0987654321",
                'dia_chi'       =>"03 Quang Trung",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today()->subDays(rand(1,4)),
            ],
            [
                'ho_va_ten' => "Stardarkcinema",
                'email'     => "stardarkcinema@gmail.com",
                'password'  => bcrypt(123456),
                'so_dien_thoai'=>"0987654321",
                'dia_chi'       =>"03 Quang Trung",
                'gioi_tinh'=>1,
                'loai_tai_khoan' => 1,
                'ngay_sinh'=> Carbon::today(),
                'created_at'=> Carbon::today()->addDays(rand(1,2)),
            ],
        ]);
    }
}
