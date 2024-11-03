<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actu extends Model
{
    use HasFactory;

    // Ajoute les champs que tu souhaites rendre "assignables"
    protected $fillable = ['titre', 'image', 'message', 'date_publication'];
}
