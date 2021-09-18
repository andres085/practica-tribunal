<?php

namespace Database\Factories;

use App\Models\DocumentoTipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoTipoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DocumentoTipo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo' => $this->faker->randomElement(['Expediente', 'Nota', 'Legajo', 'Curriculum', 'Factura']),
        ];
    }
}
