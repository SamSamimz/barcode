<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i=0; $i < 20; $i++) {    
            Product::create([
                'title' => 'title',
                'description' => 'description',
                'price' => '123',
                'product_code' => random_int(1000,5000),
            ]);
        }
    }
}
