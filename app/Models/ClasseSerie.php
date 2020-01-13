<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClasseSerie extends Model
{
    protected $table = 'classes_series';

    protected $fillable = [
        'classe_id', 'serie_id',
    ];
}
