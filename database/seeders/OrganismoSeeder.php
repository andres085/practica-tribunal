<?php

namespace Database\Seeders;

use App\Models\Organismo;
use Illuminate\Database\Seeder;

class OrganismoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organismo::factory()->times(10)->create();
    }
}
