<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $Category = Size::class;
    /**
     protected $Category = Size::class;
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
 'category_name' => fake()->name()
        ];
    }
}
