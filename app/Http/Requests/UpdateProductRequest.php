<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            ], 'image' => [
                'nullable',
                'min:4',
            ], 'price' => [
                'required',
                'numeric',
                'min:0.01'
            ],
            'description' => [
                'nullable',
                'min:6',
                'max:1000'
            ],
            'category_id' => [
                'required',
            ],
            'visible' => [
                'nullable'
            ]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo obbligatorio',
            'name.min' => 'Lunghezza minima :min caratteri',
            'name.max' => 'Lunghezza massima :max caratteri',
            'category_id.required' => 'Campo obbligatorio',
            'price.required' => 'Campo obbligatorio ',
            'price.min' => 'Inserisci numero positivo',
            'image.required' => 'Campo obbligatorio',
            'description.min' => 'Lunghezza minima :min caratteri',
            'description.max' => 'Lunghezza massima :max caratteri',
            'image.visible' => 'Campo obbligatorio'

        ];
    }
}
