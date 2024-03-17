<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pays;


class Ville extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pays',
        'intitule',
    ];

    public function PaysVille(){
        return $this->belongsTo(Pays::class,'id_pays', 'id');
    }
}
