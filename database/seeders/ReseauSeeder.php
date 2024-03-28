<?php

namespace Database\Seeders;

use App\Models\Reseau;
use Illuminate\Database\Seeder;

class ReseauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Reseau::factory(10)->create();
    }
}
