<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produit;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() {
        Produit::create([
            'nom' => 'Produit Exemple 1',
            'description' => 'Description du produit exemple 1',
        ]);
        Produit::create([
            'nom' => 'Produit Exemple 2',
            'description' => 'Description du produit exemple 2',
        ]);
    }
}
