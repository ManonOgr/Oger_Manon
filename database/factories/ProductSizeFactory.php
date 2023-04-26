<?php

namespace Database\Factories;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product_size>
 */
class ProductSizeFactory extends Factory
{
    protected $ProductSize = Size::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'quantity' => fake()->randomDigit(),
            'product_id' => Product::all()->random(),
            'size_id' => Size::all()->random(),
        ];
    }
}
