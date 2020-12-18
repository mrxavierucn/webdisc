<?php

namespace Database\Factories;

use App\Models\Pregrado;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PregradoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pregrado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre=$this->faker->unique()->name();
        return [
            'nombre'=>$nombre,
            'slug'=>Str::slug($nombre,'-'),
            'jefe'=>$this->faker->name(),
            'titulo'=>$this->faker->unique()->title(),
            'gradoAcademico'=>$this->faker->title(),
            'area'=>$this->faker->sentence(),
            'subarea'=>$this->faker->sentence(),
            'duracion'=>$this->faker->numberBetween(0,20),
            'acreditacion'=>$this->faker->sentence(),
            'perfilEgresado'=>$this->faker->sentence(),
            'url'=>$this->faker->url()
        ];
    }
}
