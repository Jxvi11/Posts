<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contenido' => $this->faker->text,
            'usuario_id' => function () {
                return App\Models\Usuario::inRandomOrder()->first()->id;
            },
            'post_id' => function () {
                return App\Models\Post::inRandomOrder()->first()->id;
            },
        ];
    }
}
