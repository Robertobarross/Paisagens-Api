<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paisagem extends Model
{
    use HasFactory;

    protected $fillable = [ // Acrescentei
        'paisagem',
        'imagem',
        'nome',
        'país',
        'cidade',
    ];

}
