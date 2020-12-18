<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePublicacion extends FormRequest
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
            'nombre'=>'required|unique:publicacions|min:10|max:150',
            'traduccion'=>'max:150',
            'revista'=>'required|min:10|max:200',
            'anio'=>'required|integer',
            'primera_pagina'=>'required|integer',
            'ultima_pagina'=>'required|integer',
            'link'=>'required'
        ];
    }

    public function messages()
    {
        return[
            'nombre.required'=>'La publicacion debe tener un nombre',
            'nombre.unique'=>'Ya existe una publicacion con ese nombre',
            'nombre.min'=>'El nombre de la publicacion debe tener como minimo 10 caracteres',
            'nombre.max'=>'El nombre de la publicacion debe tener como maximo 150 caracteres',
            'traduccion.max'=>'La traduccion puede tener como maximo 150 caracteres',
            'revista.required'=>'La revista debe tener un nombre',
            'revista.min'=>'El nombre de la revista debe tener como minimo 10 caracteres',
            'revista.max'=>'El nombre de la revista debe tener como maximo 150 caracteres',
            'anio.required'=>'Indique el año de publicacion',
            'anio.integer'=>'Ingrese un dato numerico',
            'primera_pagina.required'=>'Indique la primera pagina de la publicacion en la revista',
            'primera_pagina.integer'=>'Ingrese un dato numerico',
            'ultima_pagina.required'=>'Indique la ultima pagina de la publicacion en la revista',
            'ultima_pagina.integer'=>'Ingrese un dato numero',
            'link.required'=>'El proyecto debe tener un enlace'
        ];
    }
}
