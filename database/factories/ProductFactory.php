<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $Product = Size::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' =>fake()->word(),
           'product_description' =>fake()->text(100),
            'product_price'=>fake()->numberBetween(1,20),
            'product_picture'=>fake()->imageUrl(200, 200),
            'product_visibility'=>fake()->randomElement(['publié', 'non publié']),
            'product_state'=>fake()->randomElement(['solde', 'standard']),
            'product_reference'=>fake()->unique()->regexify('[A-Z]{5}[0-4]{3}'),
            'product_category'=>fake()->randomElement(['femme', 'homme']),
            'category_id'=>Category::all()->random()->id,

        ];
    }
}
