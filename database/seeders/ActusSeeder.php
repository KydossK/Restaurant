<?php

namespace Database\Seeders;

use App\Models\Actu; // Assure-toi que le modèle Actu est importé
use Faker\Factory as Faker; // Importation de Faker
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActusSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create(); // Crée une instance de Faker

        foreach (range(1, 10) as $index) { // Génére 10 enregistrements
            Actu::create([
                'titre' => $faker->sentence, // Génère un titre
                'image' => 'image' . $index . '.png', // Nom d'image
                'message' => $faker->paragraph, // Message
                'date_publication' => $faker->dateTime, // Date de publication
            ]);
        }
    }
}
