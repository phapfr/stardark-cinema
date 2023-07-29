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
                'id_phong'               => '1',
                'id_phim'                => '2',
                'thoi_gian_chieu_chinh'  => '90',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-08-08 18:20:00',
                'thoi_gian_ket_thuc'     => '2023-08-08 19:50:00',

            ],

            [
                'id_phong'               => '2',
                'id_phim'                => '3',
                'thoi_gian_chieu_chinh'  => '100',
                'thoi_gian_quang_cao'    => '10',
                'thoi_gian_bat_dau'      => '2023-08-07 15:30:00',
                'thoi_gian_ket_thuc'     => '2023-08-07 17:10:00',
            ],

            [
                'id_phong'               => '3',
                'id_phim'                => '5',
                'thoi_gian_chieu_chinh'  => '110',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-08-09 13:40:00',
                'thoi_gian_ket_thuc'     => '2023-08-09 15:30:00',

            ],



            [
                'id_phong'               => '2',
                'id_phim'                => '4',
                'thoi_gian_chieu_chinh'  => '105',
                'thoi_gian_quang_cao'    => '6',
                'thoi_gian_bat_dau'      => '2023-08-10 16:15:00',
                'thoi_gian_ket_thuc'     => '2023-08-10 17:55:00',

            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '6',
                'thoi_gian_chieu_chinh'  => '95',
                'thoi_gian_quang_cao'    => '4',
                'thoi_gian_bat_dau'      => '2023-08-11 20:00:00',
                'thoi_gian_ket_thuc'     => '2023-08-11 21:35:00',

            ],

            [
                'id_phong'               => '3',
                'id_phim'                => '1',
                'thoi_gian_chieu_chinh'  => '120',
                'thoi_gian_quang_cao'    => '5',
                'thoi_gian_bat_dau'      => '2023-08-12 14:45:00',
                'thoi_gian_ket_thuc'     => '2023-08-12 16:15:00',

            ],

            [
                'id_phong'               => '2',
                'id_phim'                => '3',
                'thoi_gian_chieu_chinh'  => '100',
                'thoi_gian_quang_cao'    => '10',
                'thoi_gian_bat_dau'      => '2023-08-13 17:30:00',
                'thoi_gian_ket_thuc'     => '2023-08-13 19:10:00',

            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '2',
                'thoi_gian_chieu_chinh'  => '90',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-08-14 19:20:00',
                'thoi_gian_ket_thuc'     => '2023-08-14 20:50:00',

            ],

            [
                'id_phong'               => '3',
                'id_phim'                => '5',
                'thoi_gian_chieu_chinh'  => '110',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-08-15 13:40:00',
                'thoi_gian_ket_thuc'     => '2023-08-15 15:30:00',

            ],

            [
                'id_phong'               => '2',
                'id_phim'                => '4',
                'thoi_gian_chieu_chinh'  => '105',
                'thoi_gian_quang_cao'    => '6',
                'thoi_gian_bat_dau'      => '2023-08-16 16:15:00',
                'thoi_gian_ket_thuc'     => '2023-08-16 17:55:00',

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
                'id_phong'               => '1',
                'id_phim'                => '1',
                'thoi_gian_chieu_chinh'  => '120',
                'thoi_gian_quang_cao'    => '5',
                'thoi_gian_bat_dau'      => '2023-08-17 19:00:00',
                'thoi_gian_ket_thuc'     => '2023-08-17 20:30:00',
            ],

            [
                'id_phong'               => '2',
                'id_phim'                => '3',
                'thoi_gian_chieu_chinh'  => '100',
                'thoi_gian_quang_cao'    => '10',
                'thoi_gian_bat_dau'      => '2023-08-18 15:30:00',
                'thoi_gian_ket_thuc'     => '2023-08-18 17:10:00',
            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '2',
                'thoi_gian_chieu_chinh'  => '90',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-08-19 18:20:00',
                'thoi_gian_ket_thuc'     => '2023-08-19 19:50:00',
            ],

            [
                'id_phong'               => '3',
                'id_phim'                => '5',
                'thoi_gian_chieu_chinh'  => '110',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-08-20 13:40:00',
                'thoi_gian_ket_thuc'     => '2023-08-20 15:30:00',
            ],

            [
                'id_phong'               => '2',
                'id_phim'                => '4',
                'thoi_gian_chieu_chinh'  => '105',
                'thoi_gian_quang_cao'    => '6',
                'thoi_gian_bat_dau'      => '2023-08-21 16:15:00',
                'thoi_gian_ket_thuc'     => '2023-08-21 17:55:00',
            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '6',
                'thoi_gian_chieu_chinh'  => '95',
                'thoi_gian_quang_cao'    => '4',
                'thoi_gian_bat_dau'      => '2023-08-22 20:00:00',
                'thoi_gian_ket_thuc'     => '2023-08-22 21:35:00',
            ],

            [
                'id_phong'               => '3',
                'id_phim'                => '1',
                'thoi_gian_chieu_chinh'  => '120',
                'thoi_gian_quang_cao'    => '5',
                'thoi_gian_bat_dau'      => '2023-08-23 14:45:00',
                'thoi_gian_ket_thuc'     => '2023-08-23 16:15:00',
            ],

            [
                'id_phong'               => '2',
                'id_phim'                => '3',
                'thoi_gian_chieu_chinh'  => '100',
                'thoi_gian_quang_cao'    => '10',
                'thoi_gian_bat_dau'      => '2023-08-24 17:30:00',
                'thoi_gian_ket_thuc'     => '2023-08-24 19:10:00',
            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '2',
                'thoi_gian_chieu_chinh'  => '90',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-08-25 19:20:00',
                'thoi_gian_ket_thuc'     => '2023-08-25 20:50:00',
            ],

            [
                'id_phong'               => '3',
                'id_phim'                => '5',
                'thoi_gian_chieu_chinh'  => '110',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-08-26 13:40:00',
                'thoi_gian_ket_thuc'     => '2023-08-26 15:30:00',
            ],

            [
                'id_phong'               => '2',
                'id_phim'                => '4',
                'thoi_gian_chieu_chinh'  => '105',
                'thoi_gian_quang_cao'    => '6',
                'thoi_gian_bat_dau'      => '2023-08-27 16:15:00',
                'thoi_gian_ket_thuc'     => '2023-08-27 17:55:00',
            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '6',
                'thoi_gian_chieu_chinh'  => '95',
                'thoi_gian_quang_cao'    => '4',
                'thoi_gian_bat_dau'      => '2023-08-28 20:00:00',
                'thoi_gian_ket_thuc'     => '2023-08-28 21:35:00',
            ],

            [
                'id_phong'               => '3',
                'id_phim'                => '1',
                'thoi_gian_chieu_chinh'  => '120',
                'thoi_gian_quang_cao'    => '5',
                'thoi_gian_bat_dau'      => '2023-08-29 14:45:00',
                'thoi_gian_ket_thuc'     => '2023-08-29 16:15:00',
            ],

            [
                'id_phong'               => '2',
                'id_phim'                => '3',
                'thoi_gian_chieu_chinh'  => '100',
                'thoi_gian_quang_cao'    => '10',
                'thoi_gian_bat_dau'      => '2023-08-30 17:30:00',
                'thoi_gian_ket_thuc'     => '2023-08-30 19:10:00',
            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '2',
                'thoi_gian_chieu_chinh'  => '90',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-08-31 19:20:00',
                'thoi_gian_ket_thuc'     => '2023-08-31 20:50:00',
            ],

            [
                'id_phong'               => '3',
                'id_phim'                => '5',
                'thoi_gian_chieu_chinh'  => '110',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-09-01 13:40:00',
                'thoi_gian_ket_thuc'     => '2023-09-01 15:30:00',
            ],

            [
                'id_phong'               => '2',
                'id_phim'                => '4',
                'thoi_gian_chieu_chinh'  => '105',
                'thoi_gian_quang_cao'    => '6',
                'thoi_gian_bat_dau'      => '2023-09-02 16:15:00',
                'thoi_gian_ket_thuc'     => '2023-09-02 17:55:00',
            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '6',
                'thoi_gian_chieu_chinh'  => '95',
                'thoi_gian_quang_cao'    => '4',
                'thoi_gian_bat_dau'      => '2023-09-03 20:00:00',
                'thoi_gian_ket_thuc'     => '2023-09-03 21:35:00',
            ],

            [
                'id_phong'               => '3',
                'id_phim'                => '1',
                'thoi_gian_chieu_chinh'  => '120',
                'thoi_gian_quang_cao'    => '5',
                'thoi_gian_bat_dau'      => '2023-09-04 14:45:00',
                'thoi_gian_ket_thuc'     => '2023-09-04 16:15:00',
            ],

            [
                'id_phong'               => '2',
                'id_phim'                => '3',
                'thoi_gian_chieu_chinh'  => '100',
                'thoi_gian_quang_cao'    => '10',
                'thoi_gian_bat_dau'      => '2023-09-05 17:30:00',
                'thoi_gian_ket_thuc'     => '2023-09-05 19:10:00',
            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '2',
                'thoi_gian_chieu_chinh'  => '90',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-09-06 19:20:00',
                'thoi_gian_ket_thuc'     => '2023-09-06 20:50:00',
            ],

            [
                'id_phong'               => '3',
                'id_phim'                => '5',
                'thoi_gian_chieu_chinh'  => '110',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-09-07 13:40:00',
                'thoi_gian_ket_thuc'     => '2023-09-07 15:30:00',
            ],

            [
                'id_phong'               => '2',
                'id_phim'                => '4',
                'thoi_gian_chieu_chinh'  => '105',
                'thoi_gian_quang_cao'    => '6',
                'thoi_gian_bat_dau'      => '2023-09-08 16:15:00',
                'thoi_gian_ket_thuc'     => '2023-09-08 17:55:00',
            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '6',
                'thoi_gian_chieu_chinh'  => '95',
                'thoi_gian_quang_cao'    => '4',
                'thoi_gian_bat_dau'      => '2023-09-09 20:00:00',
                'thoi_gian_ket_thuc'     => '2023-09-09 21:35:00',
            ],

            [
                'id_phong'               => '3',
                'id_phim'                => '1',
                'thoi_gian_chieu_chinh'  => '120',
                'thoi_gian_quang_cao'    => '5',
                'thoi_gian_bat_dau'      => '2023-09-10 14:45:00',
                'thoi_gian_ket_thuc'     => '2023-09-10 16:15:00',
            ],

            [
                'id_phong'               => '2',
                'id_phim'                => '3',
                'thoi_gian_chieu_chinh'  => '100',
                'thoi_gian_quang_cao'    => '10',
                'thoi_gian_bat_dau'      => '2023-09-11 17:30:00',
                'thoi_gian_ket_thuc'     => '2023-09-11 19:10:00',
            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '2',
                'thoi_gian_chieu_chinh'  => '90',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-09-12 19:20:00',
                'thoi_gian_ket_thuc'     => '2023-09-12 20:50:00',
            ],

            [
                'id_phong'               => '3',
                'id_phim'                => '5',
                'thoi_gian_chieu_chinh'  => '110',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-09-13 13:40:00',
                'thoi_gian_ket_thuc'     => '2023-09-13 15:30:00',
            ],

            [
                'id_phong'               => '2',
                'id_phim'                => '4',
                'thoi_gian_chieu_chinh'  => '105',
                'thoi_gian_quang_cao'    => '6',
                'thoi_gian_bat_dau'      => '2023-09-14 16:15:00',
                'thoi_gian_ket_thuc'     => '2023-09-14 17:55:00',
            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '6',
                'thoi_gian_chieu_chinh'  => '95',
                'thoi_gian_quang_cao'    => '4',
                'thoi_gian_bat_dau'      => '2023-09-15 20:00:00',
                'thoi_gian_ket_thuc'     => '2023-09-15 21:35:00',
            ],

            [
                'id_phong'               => '3',
                'id_phim'                => '1',
                'thoi_gian_chieu_chinh'  => '120',
                'thoi_gian_quang_cao'    => '5',
                'thoi_gian_bat_dau'      => '2023-09-16 14:45:00',
                'thoi_gian_ket_thuc'     => '2023-09-16 16:15:00',
            ],

            [
                'id_phong'               => '2',
                'id_phim'                => '3',
                'thoi_gian_chieu_chinh'  => '100',
                'thoi_gian_quang_cao'    => '10',
                'thoi_gian_bat_dau'      => '2023-09-17 17:30:00',
                'thoi_gian_ket_thuc'     => '2023-09-17 19:10:00',
            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '2',
                'thoi_gian_chieu_chinh'  => '90',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-09-18 19:20:00',
                'thoi_gian_ket_thuc'     => '2023-09-18 20:50:00',
            ],

            [
                'id_phong'               => '3',
                'id_phim'                => '5',
                'thoi_gian_chieu_chinh'  => '110',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-09-19 13:40:00',
                'thoi_gian_ket_thuc'     => '2023-09-19 15:30:00',
            ],

            [
                'id_phong'               => '2',
                'id_phim'                => '4',
                'thoi_gian_chieu_chinh'  => '105',
                'thoi_gian_quang_cao'    => '6',
                'thoi_gian_bat_dau'      => '2023-09-20 16:15:00',
                'thoi_gian_ket_thuc'     => '2023-09-20 17:55:00',
            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '6',
                'thoi_gian_chieu_chinh'  => '95',
                'thoi_gian_quang_cao'    => '4',
                'thoi_gian_bat_dau'      => '2023-09-21 20:00:00',
                'thoi_gian_ket_thuc'     => '2023-09-21 21:35:00',
            ],

            [
                'id_phong'               => '3',
                'id_phim'                => '1',
                'thoi_gian_chieu_chinh'  => '120',
                'thoi_gian_quang_cao'    => '5',
                'thoi_gian_bat_dau'      => '2023-09-22 14:45:00',
                'thoi_gian_ket_thuc'     => '2023-09-22 16:15:00',
            ],

            [
                'id_phong'               => '2',
                'id_phim'                => '3',
                'thoi_gian_chieu_chinh'  => '100',
                'thoi_gian_quang_cao'    => '10',
                'thoi_gian_bat_dau'      => '2023-09-23 17:30:00',
                'thoi_gian_ket_thuc'     => '2023-09-23 19:10:00',
            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '2',
                'thoi_gian_chieu_chinh'  => '90',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-09-24 19:20:00',
                'thoi_gian_ket_thuc'     => '2023-09-24 20:50:00',
            ],

            [
                'id_phong'               => '3',
                'id_phim'                => '5',
                'thoi_gian_chieu_chinh'  => '110',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-09-25 13:40:00',
                'thoi_gian_ket_thuc'     => '2023-09-25 15:30:00',
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
                'id_phong'               => '2',
                'id_phim'                => '9',
                'thoi_gian_chieu_chinh'  => '115',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-09-26 18:30:00',
                'thoi_gian_ket_thuc'     => '2023-09-26 20:15:00',
            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '9',
                'thoi_gian_chieu_chinh'  => '115',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-09-27 19:45:00',
                'thoi_gian_ket_thuc'     => '2023-09-27 21:30:00',
            ],

            [
                'id_phong'               => '3',
                'id_phim'                => '9',
                'thoi_gian_chieu_chinh'  => '115',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-09-28 15:15:00',
                'thoi_gian_ket_thuc'     => '2023-09-28 16:55:00',
            ],

            [
                'id_phong'               => '2',
                'id_phim'                => '9',
                'thoi_gian_chieu_chinh'  => '115',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-09-29 16:45:00',
                'thoi_gian_ket_thuc'     => '2023-09-29 18:30:00',
            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '9',
                'thoi_gian_chieu_chinh'  => '115',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-09-30 20:00:00',
                'thoi_gian_ket_thuc'     => '2023-09-30 21:45:00',
            ],

            [
                'id_phong'               => '3',
                'id_phim'                => '9',
                'thoi_gian_chieu_chinh'  => '115',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-10-01 14:30:00',
                'thoi_gian_ket_thuc'     => '2023-10-01 16:15:00',
            ],

            [
                'id_phong'               => '2',
                'id_phim'                => '9',
                'thoi_gian_chieu_chinh'  => '115',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-10-02 17:00:00',
                'thoi_gian_ket_thuc'     => '2023-10-02 18:45:00',
            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '9',
                'thoi_gian_chieu_chinh'  => '115',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-10-03 18:30:00',
                'thoi_gian_ket_thuc'     => '2023-10-03 20:15:00',
            ],
            [
                'id_phong'               => '3',
                'id_phim'                => '9',
                'thoi_gian_chieu_chinh'  => '115',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-10-04 15:00:00',
                'thoi_gian_ket_thuc'     => '2023-10-04 16:45:00',
            ],
            [
                'id_phong'               => '2',
                'id_phim'                => '9',
                'thoi_gian_chieu_chinh'  => '115',
                'thoi_gian_quang_cao'    => '7',
                'thoi_gian_bat_dau'      => '2023-10-05 17:30:00',
                'thoi_gian_ket_thuc'     => '2023-10-05 19:15:00',
            ],


            [
                'id_phong'               => '1',
                'id_phim'                => '8',
                'thoi_gian_chieu_chinh'  => '105',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-10-06 19:00:00',
                'thoi_gian_ket_thuc'     => '2023-10-06 20:45:00',
            ],


            [
                'id_phong'               => '3',
                'id_phim'                => '8',
                'thoi_gian_chieu_chinh'  => '105',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-10-07 15:30:00',
                'thoi_gian_ket_thuc'     => '2023-10-07 17:15:00',
            ],


            [
                'id_phong'               => '2',
                'id_phim'                => '8',
                'thoi_gian_chieu_chinh'  => '105',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-10-08 17:45:00',
                'thoi_gian_ket_thuc'     => '2023-10-08 19:30:00',
            ],


            [
                'id_phong'               => '1',
                'id_phim'                => '8',
                'thoi_gian_chieu_chinh'  => '105',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-10-09 20:00:00',
                'thoi_gian_ket_thuc'     => '2023-10-09 21:45:00',
            ],


            [
                'id_phong'               => '3',
                'id_phim'                => '8',
                'thoi_gian_chieu_chinh'  => '105',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-10-10 14:30:00',
                'thoi_gian_ket_thuc'     => '2023-10-10 16:15:00',
            ],


            [
                'id_phong'               => '2',
                'id_phim'                => '8',
                'thoi_gian_chieu_chinh'  => '105',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-10-11 16:45:00',
                'thoi_gian_ket_thuc'     => '2023-10-11 18:30:00',
            ],


            [
                'id_phong'               => '1',
                'id_phim'                => '8',
                'thoi_gian_chieu_chinh'  => '105',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-10-12 18:30:00',
                'thoi_gian_ket_thuc'     => '2023-10-12 20:15:00',
            ],


            [
                'id_phong'               => '3',
                'id_phim'                => '8',
                'thoi_gian_chieu_chinh'  => '105',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-10-13 15:00:00',
                'thoi_gian_ket_thuc'     => '2023-10-13 16:45:00',
            ],


            [
                'id_phong'               => '2',
                'id_phim'                => '8',
                'thoi_gian_chieu_chinh'  => '105',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-10-14 17:30:00',
                'thoi_gian_ket_thuc'     => '2023-10-14 19:15:00',
            ],

            [
                'id_phong'               => '1',
                'id_phim'                => '8',
                'thoi_gian_chieu_chinh'  => '105',
                'thoi_gian_quang_cao'    => '8',
                'thoi_gian_bat_dau'      => '2023-10-15 19:45:00',
                'thoi_gian_ket_thuc'     => '2023-10-15 21:30:00',
            ]

        ]);


        $list_lich_chieu = LichChieu::get();
        foreach ($list_lich_chieu as $value) {
            $tat_ca_ghe = Phong::where('phongs.id', $value->id_phong)
                ->join('ghes', 'ghes.id_phong', 'phongs.id')
                ->get();

            foreach ($tat_ca_ghe as $key => $value_phong) {
                GheBan::create([
                    'id_lich'   => $value->id,
                    'ten_ghe'   => $value_phong->ten_ghe,
                ]);
            }
        }
    }
}
