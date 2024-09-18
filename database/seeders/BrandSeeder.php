<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            [
                'slug' => 'apple',
                'name' => 'Apple',
            ],
            [
                'slug' => 'samsung',
                'name' => 'Samsung',
            ],
            [
                'slug' => 'sony',
                'name' => 'Sony',
            ],
            [
                'slug' => 'lg',
                'name' => 'LG',
            ],
            // Tambahkan lebih banyak data jika diperlukan
        ]);
    }
}
