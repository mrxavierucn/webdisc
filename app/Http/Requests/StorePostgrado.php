<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostgrado extends FormRequest
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
            'nombre'=>'required|unique:postgrados|min:10|max:200',
            'director'=>'required|min:10|max:150',
            'descripcion'=>'required|min:10|max:1500',
            'duracion'=>'required|integer',
        ];
    }

    public function messages()
    {
        return[
            'nombre.required'=>'El programa debe tener un nombre',
            'nombre.unique'=>'Ya existe un programa con ese nombre',
            'nombre.min'=>'El nombre debe tener como minimo 10 caracteres',
            'nombre.max'=>'El nombre debe tener como maximo 200 caracteres',
            'director.required'=>'El programa debe tener un director',
            'director.min'=>'El nombre del director debe tener como minimo 10 caracteres',
            'director.max'=>'El nombre del director debe tener como maximo 150 caracteres',
            'descripcion.required'=>'El programa debe mostrar una descripcion',
            'descripcion.min'=>'La descripcion debe tener como minimo 10 caracteres',
            'descripcion.max'=>'La descripcion debe tener como maximo 1500 caracteres',
            'duracion.required'=>'El programa debe tener una duracion en semestres',
            'duracion.integer'=>'Ingrese un dato numerico',
        ];
    }
}
