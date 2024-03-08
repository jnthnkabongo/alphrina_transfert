<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class depot extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nom_emetteur',
        'inom_recepteurd',
        'matricule',
        'telephone',
        'bl_no',
        'montant',
        'date_depot',
        'motif',
        'somme',
        'users_id'
    ];
}
