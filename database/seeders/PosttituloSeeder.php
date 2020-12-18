<?php

namespace Database\Seeders;

use App\Models\Posttitulo;
use Illuminate\Database\Seeder;

class PosttituloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Posttitulo::factory(2)->create();
    }
}
