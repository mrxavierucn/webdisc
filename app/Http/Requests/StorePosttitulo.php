<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePosttitulo extends FormRequest
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
            'nombre'=>'required|unique:posttitulos|min:10|max:200',
            'coordinador'=>'required|min:10|max:150',
            'malla'=>'required|image',
            'duracion'=>'required|integer',
            'descripcion'=>'required|min:10|max:1500',
            'cuerpo'=>'required|min:10|max:1500'
        ];
    }

    public function messages()
    {
        return[
            'nombre.required'=>'El programa debe tener un nombre',
            'nombre.unique'=>'Ya existe un programa con ese nombre',
            'nombre.min'=>'El nombre debe tener como minimo 10 caracteres',
            'nombre.max'=>'El nombre debe tener como maximo 200 caracteres',
            'coordinador.required'=>'El programa debe tener un coordinador',
            'coordinador.min'=>'El nombre del coordinador debe tener como minimo 10 caracteres',
            'coordinador.max'=>'El nombre del coordinador debe tener como maximo 150 caracteres',
            'malla.required'=>'El programa debe tener una malla.',
            'malla.image'=>'Archivo invalido. Asegurese de haber subido un archivo de tipo imagen.',
            'duracion.required'=>'El programa debe tener una duracion en semestres',
            'duracion.integer'=>'Ingrese un dato numerico',
            'descripcion.required'=>'El programa debe mostrar una descripcion',
            'descripcion.min'=>'La descripcion debe tener como minimo 10 caracteres',
            'descripcion.max'=>'La descripcion debe tener como maximo 1500 caracteres',
            'cuerpo.required'=>'El programa debe mostrar un cuerpo academico',
            'cuerpo.min'=>'El cuerpo debe tener como minimo 10 caracteres',
            'cuerpo.max'=>'El cuerpo debe tener como maximo 1500 caracteres',
        ];
    }
}
