<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SousClasse extends Model
{
    protected $table = 'sous_classes';

    protected $fillable = [
        'classe_id', 'libelle',
    ];
}
