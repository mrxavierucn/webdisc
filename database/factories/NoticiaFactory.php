<?php

namespace Database\Factories;

use App\Models\Noticia;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NoticiaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Noticia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $titulo=$this->faker->unique()->name();
        return [
            'titulo'=>$titulo,
            'slug'=>Str::slug($titulo,'-'),
            'cuerpo'=>$this->faker->sentence(),
        ];
    }
}
