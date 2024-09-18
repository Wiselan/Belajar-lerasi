<?php

namespace Database\seeders;

use Illuminate\Database\Seeders;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    public function run()
    {
        // Insert data into the brands table
        Brand::insert([
            ['name' => 'Nike', 'slug' => 'nike'],
            ['name' => 'Adidas', 'slug' => 'adidas'],
            ['name' => 'Puma', 'slug' => 'puma'],
            ['name' => 'Reebok', 'slug' => 'reebok'],
            ['name' => 'Under Armour', 'slug' => 'under-armour']
        ]);
    }
}
