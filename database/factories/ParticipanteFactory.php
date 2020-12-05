<?php

namespace Database\Factories;

use App\Models\Tercero;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipanteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tercero::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //id_categoria
            //id_tercero
            'numero_asignado' =>$this->faker->randomNumber(1, true),
            'inscripcion_paga' =>$this->faker->boolean,
            'llegada' =>$this->faker->time,
            'tiempo' =>$this->faker->time,
            'puesto' =>$this->faker->randomNumber(2, true),
            'edad' =>$this->faker-randomNumber(2, true),


        ];
    }
}
