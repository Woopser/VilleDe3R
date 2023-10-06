<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormulaireAccidentTravailRequest extends FormRequest
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
            'matricule' => 'required|max:7|min:7|numeric',
            'dateAccident' => 'required|before_or_equal:now',
            'lieu' => 'required',
            'description' => 'required',
            //'temoin' => '', //je ne sais pas encore si je met quelque chose
            'nature' => 'required',
            'descriptionBlessure' => 'required',
            //'violence'
            'comment' => 'required',
            'premierSoin' => 'required',
            'nomSecouriste' => 'required'
        ];
    }

    public function messages(){
        return[
            'matricule.required' => 'Le champ matricule est obligatoire',
            'matricule.max' => 'Le champ rentrer n\'est pas conforme au matricule',
            'matricule.min' => 'Le champ rentrer n\'est pas conforme au matricule',
            'matricule.numeric' => 'Le champ rentrer n\'est pas conforme au matricule',
            'lieu.required' => 'Le lieu est obligatoire',
            'description.required' => 'La description est obligatoire',
            'nature.required' => 'La naturede l\'accident est obligatoire',
            'descritpionBlessure.required' => 'La description de la blessure est obligatoire',
            'comment.required' => 'Ce champ est obligatoire',
            'premierSoin.required' => 'Les premiers soins sont obligatoire',
            'nomSecouriste.required' => 'Le nom du secouriste est obligatoire'
        ];
    }
}
