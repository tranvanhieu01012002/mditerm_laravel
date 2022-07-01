<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vegetable>
 */
class VegetableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'new_price'=> rand(100,777)."0",
            'old_price'=> rand(778,999)."0",
            'image' => rand(1,5).".jpg",
            'category_id'=>rand(1,3),
            'description' => $this->faker->paragraph()
        ];
    }
}
