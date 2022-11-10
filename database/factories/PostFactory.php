<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     * Con los factorys se realizan pruebas sin la necesidad 
     * de hacer registros reales en el sistema
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(5),
            'descripcion' => $this->faker->sentence(23),
            'imagen' => $this->faker->uuid() . '.jpg',
            'user_id' => $this->faker->randomElement([1,2,3]),
        ];
    }
}
