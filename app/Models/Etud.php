<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etud extends Model
{
    use HasFactory;
    protected $fillable  = [
        "matricule",
        "nom",
        "prenom",
        "cycle",
        "niveau",
        "email",
        "photo",
        "annee_accademique",
    ];
}
