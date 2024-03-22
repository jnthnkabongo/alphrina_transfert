<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class saveDette extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_typedette' => 'min:0',
            'montantdette' => 'min:0',
            'id_transaction' => 'min:0'
        ];
    }
/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function messages(): array
    {
        return [
            'id_typedette.min' => 'La valeur minimum de ce champs est 1',
            'montantdette.min' => 'La valeur minimum de ce champs est 1',
            'id_transaction.min' => 'La valeur minimum de ce champs est 1',
        ];
    }
}

