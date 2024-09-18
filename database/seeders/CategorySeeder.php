<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $categories = [
            ['slug' => 'technology', 'name' => 'Technology'],
            ['slug' => 'health', 'name' => 'Health'],
            ['slug' => 'lifestyle', 'name' => 'Lifestyle'],
            ['slug' => 'education', 'name' => 'Education'],
            ['slug' => 'business', 'name' => 'Business'],
        ];

        DB::table('categories')->insert($categories);
    }
}
