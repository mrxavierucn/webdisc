<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProyecto extends FormRequest
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
            'nombre'=>'required|unique:proyectos|min:10|max:150',
            'objetivo'=>'required|min:10|max:200',
            'link'=>'required'
        ];
    }

    public function messages()
    {
        return[
            'nombre.required'=>'El proyecto debe tener un nombre',
            'nombre.unique'=>'Ya existe un proyecto con ese nombre',
            'nombre.min'=>'El nombre debe tener como minimo 10 caracteres',
            'nombre.max'=>'El nombre debe tener como maximo 150 caracteres',
            'objetivo.required'=>'El proyecto debe tener un objetivo',
            'objetivo.min'=>'El objetivo debe tener como minimo 10 caracteres',
            'objetivo.max'=>'El objetivo debe tener como maximo 200 caracteres',
            'link.required'=>'El proyecto debe tener un enlace'
        ];
    }
}
