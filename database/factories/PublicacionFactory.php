<?php

namespace Database\Factories;

use App\Models\Publicacion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PublicacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Publicacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre=$this->faker->name();
        return [
            'nombre'=>$nombre,
            'slug'=>Str::slug($nombre,'-'),
            'traduccion'=>$nombre,
            'revista'=>$this->faker->name(),
            'anio'=>$this->faker->year(),
            'primera_pagina'=>$this->faker->numberBetween(0,32767),
            'ultima_pagina'=>$this->faker->numberBetween(0,32767),
            'link'=>$this->faker->url()
        ];
    }
}
