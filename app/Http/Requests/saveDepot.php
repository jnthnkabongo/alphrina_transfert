<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class saveDepot extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'matricule' => 'required',
            'nom_emetteur' => 'required',
            'nom_recepteur' => 'required',
            'telephone' => 'required',
            'pays_provenance' => 'required',
            'pays_destination' => 'required',
            'montant' => 'required',
            'motif' => 'required',
       
        ];
    }
}
