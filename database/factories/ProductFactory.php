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
            'product_name' =>fake()->name(),
           'product_description' =>fake()->text(100),
            'product_price'=>fake()->randomNumber(),
            'product_picture'=>fake()->image(null, 360, 360, 'animals', true),
            'product_visibility'=>fake()->randomElement(['publié', 'non publié']),
            'product_state'=>fake()->randomElement(['en solde', 'standard']),
            'product_reference'=>fake()->unique()->word(),
            'product_category'=>fake()->randomElement(['femme', 'homme']),
            'category_id'=>Category::all()->random()->id,

        ];
    }
}
