<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'slug' => 'electronics',
                'name' => 'Electronics',
            ],
            [
                'slug' => 'home-appliances',
                'name' => 'Home Appliances',
            ],
            [
                'slug' => 'fashion',
                'name' => 'Fashion',
            ],
            [
                'slug' => 'books',
                'name' => 'Books',
            ],
            // Tambahkan lebih banyak data jika diperlukan
        ]);
    }
}
