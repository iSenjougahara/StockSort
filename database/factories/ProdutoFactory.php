<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement($array=['frango', 'bovino','suino']),
            'valor'=> $this->faker->numberBetween($min = 100, $max = 200),
            'setor' => $this->faker->randomElement($array=['enlatado', 'congelado','fresco'])
            
        ];
    }
}
