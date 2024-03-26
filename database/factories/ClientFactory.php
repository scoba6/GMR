<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    public function definition(): array
    {
        return [
            'titclt' => $this->faker->randomElement(['M', 'Mme', 'St']),
			'rsnclt' => $this->faker->name(),
			'telclt' => $this->faker->e164PhoneNumber(),
			'maiclt' => $this->faker->unique()->safeEmail(),
			'adrclt' => $this->faker->address(),
			'cptaux' => $this->faker->numerify('C######'),
			'agence_id' => createOrRandomFactory(\App\Models\Agence::class),
        ];
    }
}
