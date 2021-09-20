<?php

namespace Database\Factories;

use App\Models\Organismo;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganismoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Organismo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->randomElement(['Educación', 'Salud', 'Legislatura', 'Justicia', 'Seguridad']),
        ];
    }
}
