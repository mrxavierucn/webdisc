<?php

namespace Database\Factories;

use App\Models\Documento;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DocumentoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Documento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $titulo=$this->faker->unique->name();
        return [
            'titulo'=>$titulo,
            'slug'=>Str::slug($titulo,'-'),
            'descripcion'=>$this->faker->sentence(),
            'enlace'=>$this->faker->url(),
            'archivo'=>$this->faker->title(),
            'tipo'=>$this->faker->randomElement(['reacreditacion','plan','reglamento','libro','titulacion','practica','otro']),
        ];
    }
}
