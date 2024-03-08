<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Typedette;
use App\Models\Transaction;


class Dette extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_typedette',
        'montant',
        'id_transaction'
    ];

    public function id_typedette(){
        return $this->belongsTo(User::class,'id_typedette');
    }

    public function id_transaction(){
        return $this->belongsTo(User::class,'id_transaction');
    }
}
