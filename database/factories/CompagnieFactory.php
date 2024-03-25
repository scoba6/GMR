<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompagnieFactory extends Factory
{
    public function definition(): array
    {
        return [
            'codcie' => $this->faker->randomNumber(3,true),
			'libcie' => $this->faker->company(),
			'adrcie' => $this->faker->secondaryAddress(),
			'logcie' => $this->faker->image(),
			'mandat' => $this->faker->boolean(),
        ];
    }
}
