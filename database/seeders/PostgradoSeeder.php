<?php

namespace Database\Seeders;

use App\Models\Postgrado;
use Illuminate\Database\Seeder;

class PostgradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Postgrado::factory(2)->create();
    }
}
