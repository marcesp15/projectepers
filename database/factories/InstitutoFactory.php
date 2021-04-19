<?php

namespace Database\Factories;

use App\Models\Instituto;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstitutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Instituto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(),
            'municipio' => $this->faker->sentence(),
            'direccion' => $this->faker->sentence(),
            'correo' => $this->faker->sentence(),
            'telefono' => $this->faker->randomElement([977701234, 977704312, 977706543, 977709876])
        ];
    }
}
