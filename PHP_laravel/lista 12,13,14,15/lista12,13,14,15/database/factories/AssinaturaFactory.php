<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AssinaturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'quantidadeAssinatura' => $this->faker->numberBetween(10,20),
            'assinaturaPadrao' => $this->faker->word(15),
            'numeroVezesUsada' => $this->faker->numberBetween(1,2)
                
        ];
    }
}
