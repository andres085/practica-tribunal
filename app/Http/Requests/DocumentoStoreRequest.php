<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class DocumentoStoreRequest extends FormRequest
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

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_expediente' => 'required',
            'id_tipo' => 'required',
            'anio' => 'required|max:4',
            'tema' => 'required|max: 20',
            'informacion' => 'max:50',
            'caratula' => 'max:20'
        ];
    }

    public function messages()
    {
        return [
            'id_expediente.required' => 'Id expediente requerido.',
            'id_tipo.required' => 'Debe seleccionar un tipo de expediente.',
            'anio.required' => 'El año es requerido.',
            'tema.required' => 'El tema es requerido.',
            'anio.max' => 'El año no puede ser mayor a 4 caracteres.',
            'tema.max' => 'Tema no puede ser mayor a 20 caracteres.',
            'informacion.max' => 'Información no puede ser mayor a 50 caracteres.',
            'caratula.max' => 'Caratula no puede ser mayor a 50 caracteres.',
        ];
    }

}
