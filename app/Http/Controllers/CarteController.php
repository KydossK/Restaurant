<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class CarteController extends Controller
{
    function index()
    {
        $produits = Produit::all();
        return view('carte', compact('produits'));
    }
}
