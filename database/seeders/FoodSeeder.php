<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('foods')->insert([
            'nama' => 'Semur Jengkol',
            'jenis' => 'basah',
            'komposisi' => 'Daging Sapi',
        ]);
    }
}
