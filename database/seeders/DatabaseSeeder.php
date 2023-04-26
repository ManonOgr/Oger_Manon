<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//ajout des models
use app\Models\Category;
use app\Models\Product_size;
use app\Models\Product;
use app\Models\Size;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
public function run(): void
{
    $this->call([
        CategorySeeder::class,
        ProductSeeder::class,
        Product_sizeSeeder::class,
        SizeSeeder::class,

    ]);
}
}
