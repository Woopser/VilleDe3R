<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LienRequest extends FormRequest
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
            'nom' => 'required',
            'lien' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'nom' => [
                'required' => 'Le lien doit avoir un nom.',
            ],
            'lien' => [
                'required' => 'Le lien doit avoir un lien.',
                'max:255' => 'la longueur du lien ne doit pas excéder 255 caractères'
            ]
           
            
        ];
    }
}
