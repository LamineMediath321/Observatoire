<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Data>
 */
class DataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->random_int(1, 20),
            'src' => $this->faker->imageUrl(),
            'type' => $this->faker->realText(),
            'titre' => $this->faker->title(),
            'description' => $this->faker->paragraph(),
            'status' => 'stock',
            'lieu' => $this->faker->city(),
        ];
    }
}
