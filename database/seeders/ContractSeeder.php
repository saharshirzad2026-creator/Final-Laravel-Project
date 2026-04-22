<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contracts')->insert([
            "designation_id"=> 1,
            "employee_id"=> 1,
            "start_date"=> "4/21/2026",
            "end_date"=> "4/21/2027"
        ]);
    }
}
