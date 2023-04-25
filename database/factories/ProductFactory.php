<?php

namespace Database\Factories;

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
            'product_price'=>fake()->float(),
            'product_picture'=>fake()->image(null, 360, 360, 'animals', true),
            'product_visibility'=>fake()->randomElements(['publié', 'non publié']),
            'product_state'=>fake()->randomElements(['en solde', 'standard']),
            'product_reference'=>fake()->randomNumber(5, false),
            'product_category'=>fake()->randomElements(['femme', 'homme'])

        ];
    }
}
