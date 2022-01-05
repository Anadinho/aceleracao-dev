<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>$this->faker->word(10),
            'tamanho' =>$this->faker->numberBetween(1,3),
            'numeroAssinatura'=>$this->faker->numberBetween(1,99),
            'assinaturaResponsavel'=>$this->faker->numberBetween(10,200),
            'quantiadePaginas'=>$this->faker->numberBetween(1,99),
        ];
    }
}
