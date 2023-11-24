<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuditRequest extends FormRequest
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
            'EPI' => 'required|numeric',
            'tenueLieux' => 'required|numeric',
            'comportement' => 'required|numeric',
            'signalisation' => 'required|numeric',
            'ficheSignaletique' => 'required|numeric',
            'travaux' => 'required|numeric',
            'espaceClos' => 'required|numeric',
            'methode' => 'required|numeric',
            'autres' => 'required|numeric',
            'distanciation' => 'required|numeric',
            'portMasque' => 'required|numeric',
            'respectProcedure' => 'required|numeric',
            'descriptionTravail' => 'required',
            'lieu' => 'required',
            'date' => 'required|date',
            'descAutre' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'EPI' => [
                'required' => 'Le champ EPI doit etre coché.',
                'numeric' => 'Le champ EPI doit être un nombre.'
            ],
            'tenueLieux' => [
                'required' => 'Le champ Tenue des Lieux doit etre coché.',
                'numeric' => 'Le champ Tenue des Lieux doit être un nombre.'
            ],
            'comportement' => [
                'required' => 'Le champ Comportement doit etre coché.',
                'numeric' => 'Le champ Comportement doit être un nombre.'
            ],
            'signalisation' => [
                'required' => 'Le champ Signalisation doit etre coché.',
                'numeric' => 'Le champ Signalisation doit être un nombre.'
            ],
            'ficheSignaletique' => [
                'required' => 'Le champ Fiche Signalisation doit etre coché.',
                'numeric' => 'Le champ Fiche Signalisation doit être un nombre.'
            ],
            'travaux' => [
                'required' => 'Le champ Travaux doit etre coché.',
                'numeric' => 'Le champ Travaux doit être un nombre.'
            ],
            'espaceClos' => [
                'required' => 'Le champ Espace Clos doit etre coché.',
                'numeric' => 'Le champ Espace Clos doit être un nombre.'
            ],
            'methode' => [
                'required' => 'Le champ Méthode doit etre coché.',
                'numeric' => 'Le champ Méthode doit être un nombre.'
            ],
            'autres' => [
                'required' => 'Le champ Autres doit etre coché.',
                'numeric' => 'Le champ Autres doit être un nombre.'
            ],
            'descAutre' => [
                'required' => 'Le champ de description autres est requis'
            ],
            'distanciation' => [
                'required' => 'Le champ Distanciation doit etre coché.',
                'numeric' => 'Le champ Distanciation doit être un nombre.'
            ],
            'portMasque' => [
                'required' => 'Le champ Port du Masque doit etre coché.',
                'numeric' => 'Le champ Port du Masque doit être un nombre.'
            ],
            'respectProcedure' => [
                'required' => 'Le champ Respect de la Procédure doit etre coché.',
                'numeric' => 'Le champ Respect de la Procédure doit être un nombre.'
            ],
            'descriptionTravail' => [
                'required' => 'Le champ Description du Travail est requis.'
            ],
            'lieu' => [
                'required' => 'Le champ Lieu est requis.'
            ],
            'date' => [
                'required' => 'Le champ Date est requis.',
                'date' => 'Le champ Date doit être une date'
            ]
            
        ];
    }
}
