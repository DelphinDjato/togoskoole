<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    protected $table = "enseignants";

    protected $fillable = [
        'nom',
        'prenoms',
        'sexe',
        'date_naissance',
        'lieu_naissance',
        'nationalite',
         'adresse',
        'email',
        'telephone',
        'diplome'
    ];

    protected $guarded = [
        'user_id'
    ];
}
