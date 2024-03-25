<?php

namespace Database\Seeders;

use App\Models\Compagnie;
use Illuminate\Database\Seeder;

class CompagnieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Compagnie::factory(10)->create();
    }
}
