<?php

namespace Database\Factories;

use App\Models\Posttitulo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PosttituloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Posttitulo::class;

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
            'coordinador'=>$this->faker->name(),
            'duracion'=>$this->faker->numberBetween(0,20),
            'descripcion'=>$this->faker->sentence(),
            'cuerpo'=>$this->faker->name(),
        ];
    }
}
