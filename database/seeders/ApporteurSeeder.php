<?php

namespace Database\Seeders;

use App\Models\Apporteur;
use Illuminate\Database\Seeder;

class ApporteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Apporteur::factory(10)->create();
    }
}
