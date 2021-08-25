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
        // \App\Models\User::factory(10)->create();
        // Thêm trực tiếp 1 bản ghi admin
        /*
        Admin::create([
            'name'=>"TTK",
            'email'=>'super@gmail.com',
            'password'=>bcrypt('bkacad123')
        ]);
        */

        //User::factory(5)->create();
        //Pass là 'password'

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
