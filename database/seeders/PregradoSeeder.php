<?php

namespace Database\Seeders;

use App\Models\Pregrado;
use Illuminate\Database\Seeder;

class PregradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pregrado::factory(3)->create();
    }
}
