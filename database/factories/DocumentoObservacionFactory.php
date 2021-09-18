<?php

namespace Database\Factories;

use App\Models\DocumentoObservacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoObservacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DocumentoObservacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'observacion' => $this->faker->text(50),
        'id_documento' => rand(1, 10)
        ];
    }
}
