<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                'min:4',
                'max:50',
            ],
            'address' => [
                'required',
                'min:5',
                'max:60',
            ],
            'vat_number' => [
                'required',
                'numeric',
                'unique:restaurants',
                'min_digits:11',
                'max_digits:11'
            ],
            'image' => [
                'nullable',
                'image'
            ],
            'description' => [
                'nullable',
                'min:6',
                'max:1000'
            ],
            'user_id' => [
                'nullable',
                'exists:users,id'
            ],
            'types' => [
                'required',
                'exists:types,id'
            ],

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo obbligatorio',
            'name.min' => 'Lunghezza minima :min caratteri',
            'name.max' => 'Lunghezza massima :max caratteri',
            'address.required' => 'Campo obbligatorio',
            'address.min' => 'Lunghezza minima :min caratteri',
            'address.max' => 'Lunghezza massima :max caratteri',
            'vat_number.required' => 'Campo obbligatorio',
            'vat_number.unique' => 'Già esistente',
            'vat_number.numeric' => 'inserisci solo numeri',
            'vat_number.min_digits' => 'Verifica che siano :min numeri',
            'vat_number.max_digits' => 'Verifica che siano :max numeri',
            'image.required' => 'Campo obbligatorio',
            'image.image' => 'Verifica che il file sia un immagine',
            'description.min' => 'Lunghezza minima :min caratteri',
            'description.max' => 'Lunghezza massima :max caratteri',
            'types.required' => 'seleziona almeno una categoria'

        ];
    }
}
