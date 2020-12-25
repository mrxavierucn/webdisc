<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreAcademico extends FormRequest
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
            'nombre'=>'required|unique:academicos|min:10|max:150',
            'rol'=>'max:50',
            'correo'=>'required|unique:academicos',
            'foto'=>'image'
        ];
    }

    public function messages()
    {
        return[
            'nombre.required'=>'El academico debe tener un nombre',
            'nombre.unique'=>'Ya existe el academico',
            'nombre.min'=>'El nombre debe tener como minimo 10 caracteres',
            'nombre.max'=>'El nombre debe tener como maximo 150 caracteres',
            'rol.max'=>'El rol puede tener como maximo 50 caracteres',
            'correo.required'=>'El academico debe tener un correo',
            'correo.unique'=>'Ya existe un academico con ese correo',
            'foto.image'=>'Archivo invalido. Asegurese de haber subido un archivo de tipo imagen.'
        ];
    }
}
