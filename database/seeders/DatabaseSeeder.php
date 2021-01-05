<?php

namespace Database\Seeders;

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
        $this->call(DocumentoSeeder::class);
        $this->call(NoticiaSeeder::class);
        $this->call(PregradoSeeder::class);
        $this->call(PostgradoSeeder::class);
        $this->call(PosttituloSeeder::class);
        $this->call(ProyectoSeeder::class);
        $this->call(PublicacionSeeder::class);

    }
}
