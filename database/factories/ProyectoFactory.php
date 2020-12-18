<?php

namespace Database\Factories;

use App\Models\Proyecto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProyectoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proyecto::class;

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
            'objetivo'=>$this->faker->sentence(),
            'link'=>$this->faker->url()
        ];
    }
}
