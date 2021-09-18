<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DocumentoObservacion;

class DocumentoObservacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DocumentoObservacion::factory()->times(10)->create();
    }
}
