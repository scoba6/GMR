<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReseauFactory extends Factory
{
    public function definition(): array
    {
        return [
            'compagnie_id' => createOrRandomFactory(\App\Models\Compagnie::class),
			'agence_id' => createOrRandomFactory(\App\Models\Agence::class),
			'codcrt' => $this->faker->randomNumber(3,true),
        ];
    }
}
