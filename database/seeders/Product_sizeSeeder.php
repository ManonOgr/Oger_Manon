<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Product_sizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Productsize::factory()
                ->count(20)
                ->state(new Sequence(
                    function (Sequence $sequence) { return ['product_id' => Product::all()->random()]; },
                ))
                ->create();
    }
}
