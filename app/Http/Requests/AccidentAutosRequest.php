<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccidentAutosRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'numeroUnite' => 'required|numeric|max_digits:7|min_digits:7',
            'departement' => 'required|numeric',
            'employeImpliquer' => 'required|numeric',
            'numeroDePermis' => 'required',
            'autreVehicule' => 'required|numeric'

        ];
    }

    public function messages()
{
    return [
        'numeroUnite.required' => 'Le champ Numéro d\'unité est requis.',
        'numeroUnite.max_digits' => 'Le champ Numéro d\'unité doit être plus petit que 7.',
        'numeroUnite.min_digits' => 'Le champ Numéro d\'unité doit être un matricule.',
        //'numeroUnite.size' => 'Le champ numéro d\'unite doit être de 7 chiffre',
        'numeroUnite.numeric' => 'Le champ Numéro d\'unité doit être un nombre.',
        'departement.required' => 'Le champ Département est requis.',
        'employeImpliquer.required' => 'Le champ Employé impliqué est requis.',
        'employeImpliquer.numeric' => 'Le champ Employé impliqué doit être un nombre.',
        'numeroDePermis.required' => 'Le champ Numéro de permis est requis.',
        'autreVehicule.required' => 'Le champ Autre véhicule est requis.',
        'autreVehicule.numeric' => 'Le champ Autre véhicule doit être un nombre.'
    ];
}
}
