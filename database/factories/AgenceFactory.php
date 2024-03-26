<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgenceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'codage' => $this->faker->numberBetween(1,2),
			'libage' => $this->faker->company(),
            'estsie' => $this->faker->boolean(),
        ];
    }
}
