<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
                'required',
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
            'visible' => [
                'required',
            ]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo obbligatorio',
            'name.min' => 'Lunghezza minima :min caratteri',
            'name.max' => 'Lunghezza massima :max caratteri',
            'price.required'=>'campo obbligatorio ',
            'price.min'=>'inserisci numero positivo',
            'image.required' => 'Campo obbligatorio',
            'description.min' => 'Lunghezza minima :min caratteri',
            'description.max' => 'Lunghezza massima :max caratteri',
            'image.visible'=>'campo obbligatorio'

        ];
    }
}
