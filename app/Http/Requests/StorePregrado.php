<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePregrado extends FormRequest
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
            'nombre'=>'required|unique:pregrados|min:10|max:200',
            'jefe'=>'required|min:10|max:150',
            'titulo'=>'required|unique:pregrados|min:10|max:150',
            'gradoAcademico'=>'required|min:10|max:150',
            'area'=>'required|min:10|max:150',
            'subarea'=>'required|min:10|max:200',
            'duracion'=>'required|integer|min:2|max:16',
            'acreditacion'=>'required|min:10|max:150',
            'perfilEgresado'=>'required|min:10|max:2000',
        ];
    }

    public function messages()
    {
        return[
            'nombre.required'=>'El programa debe tener un nombre',
            'nombre.unique'=>'Ya existe un programa con ese nombre',
            'nombre.min'=>'El nombre debe tener como minimo 10 caracteres',
            'nombre.max'=>'El nombre debe tener como maximo 200 caracteres',
            'jefe.required'=>'El programa debe tener un jefe',
            'jefe.min'=>'El nombre del jefe debe tener como minimo 10 caracteres',
            'jefe.max'=>'El nombre del jefe debe tener como maximo 150 caracteres',
            'titulo.required'=>'El alumno que se inscribe al programa debe tener un titulo profesional',
            'titulo.unique'=>'Ya existe un programa con ese titulo profesional',
            'titulo.min'=>'El titulo profesional debe tener como minimo 10 caracteres',
            'titulo.max'=>'El titulo profesional debe tener como maximo 150 caracteres',
            'gradoAcademico.required'=>'El programa debe tener un grado academico',
            'gradoAcademico.min'=>'El grado academico debe tener como minimo 10 caracteres',
            'gradoAcademico.max'=>'El grado academico debe tener como maximo 150 caracteres',
            'area.required'=>'El programa debe tener un area en donde especializarse',
            'area.min'=>'El area debe tener como minimo 10 caracteres',
            'area.max'=>'El area debe tener como maximo 150 caracteres',
            'subarea.required'=>'El programa debe tener sub-area de especializacion',
            'subarea.min'=>'El sub-area debe tener como minimo 10 caracteres',
            'subarea.max'=>'El sub-area academico debe tener como maximo 200 caracteres',
            'duracion.required'=>'El programa debe tener una duracion en semestres',
            'duracion.integer'=>'Ingrese un dato numerico',
            'duracion.min'=>'La duracion debe ser como minimo de 2',
            'duracion.max'=>'La duracion debe ser como maximo de 16',
            'acreditacion.required'=>'El programa debe indicar el estado de acreditacion',
            'acreditacion.min'=>'El estado de acreditacion debe tener como minimo 10 caracteres',
            'acreditacion.max'=>'El estado de acreditacion debe tener como maximo 150 caracteres',
            'perfilEgresado.required'=>'El programa debe mostrar el perfil de egresado',
            'perfilEgresado.min'=>'El perfil de egresado debe tener como minimo 10 caracteres',
            'perfilEgresado.max'=>'El perfil de egresado debe tener como maximo 2000 caracteres',
        ];
    }
}
