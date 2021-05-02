<?php

namespace Database\Factories;

use App\Models\Tercero;
use DateInterval;
use Illuminate\Database\Eloquent\Factories\Factory;

class TerceroFactory extends Factory
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
            'primer_nombre' => $this->faker->firstName,
            'segundo_nombre' => '',
            'primer_apellido' => $this->faker->lastName,
            'segundo_apellido' => '',
            'identificacion' => $this->faker->unique()->randomNumber(9, true),
            'tipo_identificacion' => 'Cédula de Ciudadania.',
            'telefono' => $this->faker->e164PhoneNumber(),
            'direccion' => $this->faker->address(),
            'fecha_nacimiento' => $this->faker->dateTimeBetween('-40 years', '-18 years', 'America/Bogota')
        ];
    }
}
