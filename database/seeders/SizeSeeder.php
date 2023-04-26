<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Size::factory()
                ->count(20)
                ->state(new Sequence(
                    function (Sequence $sequence) { return ['product_id' => Product::all()->random()]; },
                ))
                ->create();
    }
}
