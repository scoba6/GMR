<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategorieFactory extends Factory
{
    public function definition(): array
    {
        return [
            'libcat' => $this->faker->numerify('CAT##'),
			'nuordr' => $this->faker->randomNumber(),
			'branche_id' => createOrRandomFactory(\App\Models\Branche::class),
        ];
    }
}
