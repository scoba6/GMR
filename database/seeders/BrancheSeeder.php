<?php

namespace Database\Seeders;

use App\Models\Branche;
use Illuminate\Database\Seeder;

class BrancheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Branche::factory(10)->create();
    }
}
