<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'image'       => 'required|image',
            'title'       => 'required|string',
            'date'        => 'required|string',
            'city'        => 'required|string',
            'private'     => 'required',
            'description' => 'required',
        ];    
    }

    public function messages()
    {
        return [
            'image.required'       => 'A Imagem do Evento é obrigatório.',
            'title.required'       => 'O campo Evento é obrigatório.',
            'date.required'        => 'O campo Data do Evento é obrigatório.',
            'city.required'        => 'O campo Cidade é obrigatório.',
            'description.required' => 'O campo Descrição é obrigatório.',

        ];
    }
}

