<?php

namespace Database\Seeders;

use App\Models\Academico;
use App\Models\Noticia;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
       $this->call(AcademicoSeeder::class);
       $this->call(NoticiaSeeder::class);
       $this->call(DocumentoSeeder::class);
    }
}
