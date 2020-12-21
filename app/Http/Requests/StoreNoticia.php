<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNoticia extends FormRequest
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
            'titulo'=>'required|unique:noticias|min:10|max:200',
            'cuerpo'=>'required|min:50|max:5000',
            'foto'=>'image'
        ];
    }

    public function messages()
    {
        return[
            'titulo.required'=>'La noticia debe tener un titulo',
            'titulo.unique'=>'Ya existe una noticia con ese titulo',
            'titulo.min'=>'El titulo debe tener como minimo 10 caracteres',
            'titulo.max'=>'El titulo debe tener como maximo 200 caracteres',
            'cuerpo.required'=>'El cuerpo de la noticia no puede estar vacio',
            'cuerpo.min'=>'La noticia debe tener como minimo 50 caracteres',
            'cuerpo.max'=>'La noticia debe tener como maximo 5000 caracteres',
            'foto.image'=>'Archivo invalido. Asegurese de haber subido un archivo de tipo imagen.'

        ];
    }
}
