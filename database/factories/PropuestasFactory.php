<?php

namespace Database\Factories;

use App\Models\Propuestas;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropuestasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Propuestas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(),
            'categoria' => $this->faker->sentence(),
            'descripcion' => $this->faker->sentence()
        ];
    }
}
