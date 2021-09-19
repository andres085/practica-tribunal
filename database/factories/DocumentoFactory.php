<?php

namespace Database\Factories;

use App\Models\Documento;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoFactory extends Factory
{

    private static $orden = 1;
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Documento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
        'numero' => self::$orden++,
        'id_expediente' => rand(1, 10),
        'id_tipo' => rand(1, 10),
        'id_organismo' => rand(1, 10),
        'id_area' => rand(1, 10),
        'anio' => $this->faker->year($max = 'now'),
        'tema' => $this->faker->randomElement(['Rendición', 'Viaticos', 'Documentación', 'Impuestos', 'Vacunación', 'Insumos']),
        'informacion' => $this->faker->word(),
        'caratula' => $this->faker->sentence()
        ];
    }
}
