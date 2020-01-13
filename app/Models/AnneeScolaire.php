<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnneeScolaire extends Model
{
    protected $table = "annees_scolaires";

    protected $fillable = [
        'libelle', 'active',
    ];
}
