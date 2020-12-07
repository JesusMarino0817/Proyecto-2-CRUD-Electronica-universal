<?php

namespace Database\Factories;

use App\Models\Refaccion;
use Illuminate\Database\Eloquent\Factories\Factory;

class RefaccionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Refaccion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=> $this->faker->bothify('?????-#####'),
            'tipo'=> $this->faker->randomElement(['Componente', 'Filtro', 'Procesador', 'Capacitores', 'Contactores' ]),
            'cantidad'=> $this->faker->numberBetween(1, 20),
        ];
    }
}
