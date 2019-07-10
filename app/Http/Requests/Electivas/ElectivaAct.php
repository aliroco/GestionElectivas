<?php

namespace App\Http\Requests\Electivas;

use Illuminate\Foundation\Http\FormRequest;

class ElectivaAct extends FormRequest
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
            'capacidad'=>['required','numeric','gt:0'],
            'nombre' => ['required','string']
        ];
    }
}
