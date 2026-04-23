<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schools')->insert([
            [
               "name"=> "Sharifi High School",
               "whatsApp_link"=> "0987645332",
            ],
            [
               "name"=> "Bibi Zahra High School",
               "whatsApp_link"=> "0786543219",
            ]
        ]);
    }
}
