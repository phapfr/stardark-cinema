<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();

        // Reset id về lại 1
        DB::table('admins')->truncate();

        DB::table('admins')->insert([
            [
                'email'             => "stardarkcinema@gmail.com",
                'ho_va_ten'         => "Stardark",
                'password'          => bcrypt(12345678),
                'is_block'          => 0,
            ],
        ]);
    }
}
