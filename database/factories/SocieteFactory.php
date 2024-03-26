<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SocieteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'codsoc' => $this->faker->randomNumber(3,true),
			'rsnsoc' => $this->faker->company(),
            'nifsoc' => $this->faker->siren(),
            'rcmsoc' => $this->faker->siret(),
			'adrsoc' => $this->faker->secondaryAddress(),
			'logsoc' => $this->faker->image(),
			
            
        ];
    }
}
