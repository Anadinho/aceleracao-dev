<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnaliseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'documento_id' => $this->faker->numberBetween(1,8),
        'assinatura_id' => $this->faker->numberBetween(1,8),
        'status'=>$this->faker->numberBetween(1,2),
        'dataAnalise' =>$this->faker->date(),
        'status'=>$this->faker->numberBetween(1,2),
        'visualizadores' => $this->faker->numberBetween(1,100),
        ];
    }
}
