<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApporteurFactory extends Factory
{
    public function definition(): array
    {
        return [
            'codapp' => $this->faker->randomNumber(2, true),
			'libapp' => $this->faker->firstName(),
			'adrapp' => $this->faker->secondaryAddress(),
        ];
    }
}
