<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SituationDangRequest extends FormRequest
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
            'fonction' => 'required',
            'secteur' => 'required',
            //'dateObservation' => 'required|dateTime',
            'temoin' => 'required',
            'lieu' => 'required',
            'description' => 'required',
            'correction' => 'required',
            //'dateRempli' => 'required|dateTime'
        ];
    }

    public function messages()
    {
        return[
            'fonction' => [
                'required' => 'Le champs fonction ne doit pas être vide'
            ],
            'secteur' => [
                'required' => 'Le champs secteur ne doit pas être vide'
            ],
            'dateObservation' =>[
                'required' => 'Le champs date de l\'observation ne doit pas être vide',
                'dateTime' => 'Le champs date de l\'observation doit être une date'
            ],
            'temoin' => [
                'required' => 'Le champs témoin ne doit pas être vide'
            ],
            'lieu' => [
                'required' => 'Le champs lieu ne doit pas être vide'
            ],
            'description' => [
                'required' => 'Le champs description ne doit pas être vide'
            ],
            'correction' => [
                'required' => 'Le champs correction ne doit pas être vide'
            ],
            'dateRempli' => [
                'required' => 'Le champs date ne doit pas être vide',
                'dateTime' => 'Le champs date doit être une date'
            ]
            ];
    }
}
