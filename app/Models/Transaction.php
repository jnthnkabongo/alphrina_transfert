<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nom_emetteur',
        'nom_recepteur',
        'matricule',
        'telephone',
        'pays_provenance',
        'pays_destination',
        'montant',
        'etat',
        'motif',
        'users_id'
    ];

    public function users_id(){
        return $this->belongsTo(User::class,'users_id');
    }
    /**
     * Get the user that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Ville()
    {
        return $this->belongsTo(Ville::class, 'id_pays', 'id');
    }


    /**
     * Get the pays that owns the Pays
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function PaysProvenance()
    {
        return $this->belongsTo(Pays::class, 'pays_provenance','id');
    }
    /**
     * Get the pays that owns the Pays
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function PaysDestination()
    {
        return $this->belongsTo(Pays::class, 'pays_destination','id');
    }


}
