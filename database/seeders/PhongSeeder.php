<?php

namespace Database\Seeders;

use App\Models\Ghe;
use App\Models\Phong;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PhongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phongs')->delete();
        DB::table('ghes')->delete();

        // Reset id về lại 1
        DB::table('phongs')->truncate();
        DB::table('ghes')->truncate();

        // 2. Ta sẽ thêm mới phim bằng lệnh create
        DB::table('phongs')->insert([
            [
                'ten_phong'     => "Phòng 1",
                'tinh_trang'    => rand(0, 1),
                'hang_doc'      => 13,
                'hang_ngang'    => 13,
            ],
            [
                'ten_phong'     => "Phòng 2",
                'tinh_trang'    => rand(0, 1),
                'hang_doc'      => 13,
                'hang_ngang'    => 13,
            ],
            [
                'ten_phong'     => "Phòng 3",
                'tinh_trang'    => rand(0, 1),
                'hang_doc'      => 13,
                'hang_ngang'    => 13,
            ],
            [
                'ten_phong'     => "Phòng 3",
                'tinh_trang'    => rand(0, 1),
                'hang_doc'      => 13,
                'hang_ngang'    => 13,
            ],
            [
                'ten_phong'     => "Phòng 4",
                'tinh_trang'    => rand(0, 1),
                'hang_doc'      => 13,
                'hang_ngang'    => 13,
            ],
            [
                'ten_phong'     => "Phòng 5",
                'tinh_trang'    => rand(0, 1),
                'hang_doc'      => 13,
                'hang_ngang'    => 13,
            ],
            [
                'ten_phong'     => "Phòng 6",
                'tinh_trang'    => rand(0, 1),
                'hang_doc'      => 13,
                'hang_ngang'    => 13,
            ],
            [
                'ten_phong'     => "Phòng 7",
                'tinh_trang'    => rand(0, 1),
                'hang_doc'      => 13,
                'hang_ngang'    => 13,
            ], [
                'ten_phong'     => "Phòng 8",
                'tinh_trang'    => rand(0, 1),
                'hang_doc'      => 13,
                'hang_ngang'    => 13,
            ], [
                'ten_phong'     => "Phòng 9",
                'tinh_trang'    => rand(0, 1),
                'hang_doc'      => 13,
                'hang_ngang'    => 13,
            ], [
                'ten_phong'     => "Phòng 10",
                'tinh_trang'    => rand(0, 1),
                'hang_doc'      => 13,
                'hang_ngang'    => 13,
            ],
        ]);

        $list_phong = Phong::get();
        foreach ($list_phong as $key => $value) {
            for ($dong = 1; $dong <= $value->hang_ngang; $dong++) {
                $chu = chr($dong + 64);
                for ($cot = 1; $cot <= $value->hang_doc; $cot++) {
                    $ten_ghe = $chu . $cot;
                    $ghe = Ghe::create([
                        'ten_ghe'       => $ten_ghe,
                        'tinh_trang'    => 1,
                        'id_phong'      => $value->id,
                    ]);
                }
            }
        }
    }
}
