<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrancheFactory extends Factory
{
    public function definition(): array
    {
        return [
            'libbrc' => $this->faker->numerify('BRA##'),
        ];
    }
}
