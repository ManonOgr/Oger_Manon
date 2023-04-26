<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()
                ->count(10)
                ->state(new Sequence(
                    function (Sequence $sequence) { return ['category_id' => Category::all()->random()]; },
                ))
                ->create();
    }
}
