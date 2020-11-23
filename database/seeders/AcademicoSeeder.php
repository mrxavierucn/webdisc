<?php

namespace Database\Seeders;

use App\Models\Academico;
use Illuminate\Database\Seeder;

class AcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Academico::factory(50)->create();
    }
}
