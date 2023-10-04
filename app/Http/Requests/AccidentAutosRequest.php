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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'numeroUnite' => 'required|max:7|min:7|numeric',
            'departement' => 'required|numeric',
            'employeImpliquer' => 'required|numeric',
            'numeroDePermis' => 'required',
            'autreVehicule' => 'required|numeric'

        ];
    }

    public function messages()
{
    return [
        'numeroUnite.required' => 'Le champ Numéro d\'unité doit être un matricule.',
        'numeroUnite.max' => 'Le champ Numéro d\'unité doit être un matricule.',
        'numeroUnite.min' => 'Le champ Numéro d\'unité doit être un matricule.',
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
