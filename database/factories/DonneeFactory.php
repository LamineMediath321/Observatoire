<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DonneeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'src' => $this->faker->imageUrl(),
            'type' => $this->faker->title(),
            'titre' => $this->faker->realText(),
            'description' => $this->faker->paragraph(),
            'status' => 'stock',
            'lieu' => $this->faker->city(),
        ];
    }
}
