<?php

namespace Database\Factories;

use App\Models\Academico;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AcademicoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Academico::class;

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
            'rol'=>$this->faker->sentence(),
            'permanencia'=>$this->faker->randomElement(['permanente','temporal','apoyo']),
        ];
    }
}
