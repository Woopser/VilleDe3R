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
            'dateAccident' => 'required|before_or_equal:now|date',
            'lieu' => 'required',
            'description' => 'required',
            'nature' => 'required',
            'descriptionBlessure' => 'required',
            'comment' => 'required',
            'premierSoin' => 'required',
            'nomSecouriste' => 'required'
        ];
    }

    public function messages(){
        return[
            'lieu.required' => 'Le lieu est obligatoire',
            'description.required' => 'La description est obligatoire',
            'nature.required' => 'La nature de l\'accident est obligatoire',
            'descritpionBlessure.required' => 'La description de la blessure est obligatoire',
            'comment.required' => 'Ce champ est obligatoire',
            'premierSoin.required' => 'Les premiers soins sont obligatoire',
            'nomSecouriste.required' => 'Le nom du secouriste est obligatoire',
            'dateAccdident.required' => 'La date de l\'accident est obligatoire',
            'dateAccident.date' => 'La date doit être une date'
        ];
    }
}
