<?php

namespace Database\Seeders;

use App\Models\GheBan;
use App\Models\LichChieu;
use App\Models\Phong;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LichChieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lich_chieus')->delete();
        DB::table('ghe_bans')->delete();

         // Reset id về lại 1
        DB::table('lich_chieus')->truncate();
        DB::table('ghe_bans')->truncate();

        // 2. Ta sẽ thêm mới phim bằng lệnh create
        DB::table('lich_chieus')->insert([
            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 08:00:00',
            ],

            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 10:00:00',
            ],

            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 12:00:00',
            ],

            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 14:00:00',
            ],

            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 16:00:00',
            ],

            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 18:00:00',
            ],

            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 20:00:00',
            ],

            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 22:00:00',
            ],

            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 00:00:00',
            ],

            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-07 02:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 08:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 10:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 12:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 14:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 16:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 18:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 20:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 22:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 00:00:00',
            ],

            [
                'id_phong'               =>  '2',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-18 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 02:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 08:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 10:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 12:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 14:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 16:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 18:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 20:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 22:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 00:00:00',
            ],

            [
                'id_phong'               =>  '3',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 02:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 08:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 10:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 12:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 14:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 16:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 18:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 20:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 22:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 00:00:00',
            ],

            [
                'id_phong'               =>  '4',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-10 02:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 08:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 10:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 12:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 14:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 16:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 18:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 20:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 22:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 00:00:00',
            ],

            [
                'id_phong'               =>  '5',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 02:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 08:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 10:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 12:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 14:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 16:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 18:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 20:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 22:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 00:00:00',
            ],
            [
                'id_phong'               =>  '6',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-06 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-06 02:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 08:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 10:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 12:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 14:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 16:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 18:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 20:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 22:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 00:00:00',
            ],
            [
                'id_phong'               =>  '7',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-09-07 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-09-07 02:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 08:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 10:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 12:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 14:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 16:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 18:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 20:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 22:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 00:00:00',
            ],
            [
                'id_phong'               =>  '8',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-08-19 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-08-19 02:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 08:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 10:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 12:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 14:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 16:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 18:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 20:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 22:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 00:00:00',
            ],
            [
                'id_phong'               =>  '9',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-12-09 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-12-09 02:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '1',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 06:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 08:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '2',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 08:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 10:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '3',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 10:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 12:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '4',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 12:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 14:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '5',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 14:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 16:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '6',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 16:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 18:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '7',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 18:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 20:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '8',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 20:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 22:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '9',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 22:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 00:00:00',
            ],
            [
                'id_phong'               =>  '10',
                'id_phim'                =>  '10',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 02:00:00',
            ],
            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '11',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 02:00:00',
            ],
            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '11',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 02:00:00',
            ],
            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '11',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 02:00:00',
            ],
            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '12',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 02:00:00',
            ],
            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '12',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 02:00:00',
            ],
            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '12',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 02:00:00',
            ],
            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '13',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 02:00:00',
            ],
            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '13',
                'thoi_gian_chieu_chinh'  =>  '120',
            'thoi_gian_quang_cao'    =>  '5',
            'thoi_gian_bat_dau'      =>  '2023-10-10 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 02:00:00',
            ],
            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '13',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 02:00:00',
            ],
            [
                'id_phong'               =>  '1',
                'id_phim'                =>  '13',
                'thoi_gian_chieu_chinh'  =>  '120',
                'thoi_gian_quang_cao'    =>  '5',
                'thoi_gian_bat_dau'      =>  '2023-10-10 00:00:00',
                'thoi_gian_ket_thuc'     =>  '2023-10-10 02:00:00',
            ],

        ]);


        $list_lich_chieu = LichChieu::get();
        foreach ($list_lich_chieu as $value) {
            $tat_ca_ghe = Phong::where('phongs.id', $value->id_phong)
                           ->join('ghes', 'ghes.id_phong', 'phongs.id')
                           ->get();

            foreach($tat_ca_ghe as $key => $value_phong) {
                GheBan::create([
                    'id_lich'   => $value->id,
                    'ten_ghe'   => $value_phong->ten_ghe,
                ]);
            }
        }
    }
}
