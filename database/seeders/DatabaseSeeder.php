<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\SinhVien;
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
        $this->call([
            AdminSeeder::class
        ]);
        $this->call([
            GiaoVienSeeder::class
        ]);
        $this->call([
            MonHocSeeder::class
        ]);
        $this->call([
            LopHocSeeder::class
        ]);
        $this->call([
            SinhVienSeeder::class
        ]);
        //SinhVien::factory(30)->create();
        $this->call([
            PhanCongSeeder::class
        ]);
    }
}
