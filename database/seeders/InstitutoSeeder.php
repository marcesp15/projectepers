<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Instituto;

class InstitutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Instituto::factory(50)->create();
    }
}
