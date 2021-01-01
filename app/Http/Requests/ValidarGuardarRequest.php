<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarGuardarRequest extends FormRequest
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
            //
            'nombre' => 'required|min:5|max:20',
            'id_marca' => 'required',
        ];
    }

    public function messages(){
        
     return[
        'nombre.required' => 'El nombre es requerido',
        'nombre.min' => 'El nombre debe tener al menos 5 caracteres',
        'nombre.max' => 'El nombre debe tener un maximo de 20 caracteres',
        'id_marca.required' => 'La marca es requerida',
        
        ];
    }
}