<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesignationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $designations = [
            [
                "name"=> "Manager",
                "department"=> 1,
            ],
            [
                "name"=> "Male Instructor",
                "department"=> 1
            ],
            [
                "name"=> "Female Instructor",
                "department"=> 1
            ],
        ];
        DB::table('designations')->insert($designations);
    }
}
