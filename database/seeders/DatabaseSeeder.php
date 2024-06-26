<?php

namespace Database\Seeders;

use App\Models\Agence;
use App\Models\Apporteur;
use App\Models\Branche;
use App\Models\Categorie;
use App\Models\Client;
use App\Models\Compagnie;
use App\Models\Reseau;
use App\Models\Societe;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /** 
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Societe::factory(1)->create(); // Une seul société à créer, représentant le courtier
        Compagnie::factory(10)->create(); // Les compagnies sur le marché
        Agence::factory(2)->create(); // Le réseau d'agence du courtier
        Apporteur::factory(10)->create(); // Les apporteurs d'affaires
        Client::factory(20)->create(); // Les Clients
        Branche::factory(10)->create(); // Les differentes branches d'assurance
        Categorie::factory(25)->create(); // Les categorie d'assurances
        Reseau::factory(18)->create(); // Le réseau d'agence
        

       
       /*  User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
    }
}
