<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\GiaoVien;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*
        $this->call([
            AttendenceSeeder::class
        ]);
        */
        $this->call([
            AdminSeeder::class
        ]);
        $this->call([
            GiaoVienSeeder::class
        ]);
    }
}
