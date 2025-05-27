<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word, // Nombre del artículo
            'price' => $this->faker->randomFloat(2, 1, 100), // Precio del artículo
            'description' => $this->faker->sentence, // Descripción del artículo
            'image' => $this->faker->imageUrl(640, 480, 'technics', true), // Ruta de la imagen
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
