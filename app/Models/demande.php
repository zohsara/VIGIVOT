<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demande extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'password',
        'email',
        'adresse',
        'telephone',
        'motif',
        'numero_cni',
    ];
}
