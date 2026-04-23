<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            "firstName"=> "Ali",
            "lastName"=> "Rezaie",
            "tazkira"=> "34567896423451",
            "phone"=> "0765432178",
            "email"=> "alirezaie@gmail.com",
            "designation_id"=> 2
        ]);
    }
}
