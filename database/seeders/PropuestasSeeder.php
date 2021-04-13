<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Propuestas;

class PropuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Propuestas::factory(50)->create();
    }
}
