<?php

namespace Database\Factories;

use App\Models\Postgrado;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostgradoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Postgrado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre=$this->faker->unique->name();
        return [
            'nombre'=>$nombre,
            'slug'=>Str::slug($nombre,'-'),
            'director'=>$this->faker->name(),
            'descripcion'=>$this->faker->sentence(),
            'duracion'=>$this->faker->numberBetween(0,20),
            'url'=>$this->faker->url()
        ];
    }
}
