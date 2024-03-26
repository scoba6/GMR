<?php

namespace Database\Seeders;

use App\Models\Agence;
use Illuminate\Database\Seeder;

class AgenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Agence::factory(10)->create();
    }
}
