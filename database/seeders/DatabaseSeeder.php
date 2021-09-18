<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AreaSeeder;
use Database\Seeders\OrganismoSeeder;
use Database\Seeders\ExpedienteSeeder;
use Database\Seeders\DocumentoTipoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(ExpedienteSeeder::class);
       $this->call(DocumentoTipoSeeder::class);
       $this->call(OrganismoSeeder::class);
       $this->call(AreaSeeder::class);
    }
}
