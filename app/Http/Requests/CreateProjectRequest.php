<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/* Para usar esta clase para validar el form, la inyectamos en el metodo store del controlado */
class CreateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /* Este metodo se ejecuta primero y es donde se debe determinar si el usuario esta autorizado a crear projectos, si no fuera asi, se devuelve falso */
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        /* Si el usuario esta autorizado, validamo el formulario. Este metodo debe devolver un array con las reglas de validacion */
        return [
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ];
    }

    public function messages() {
        // En este metodo, podemos devolver un array con los mensajes de validacion //
        return [
            'title.required' => 'El proyecto necesita un titulo',
            'description.required' => 'La descripcion es obligatoria'
        ];
    }

}
