<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductSize;
use App\Models\Size;
use Database\Factories\ProductSizeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductSize::factory()
                ->count(20)
                ->create();

    }
}
