<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDocumento extends FormRequest
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
            'titulo'=>'required|unique:documentos|min:10|max:100',
            'descripcion'=>'required|min:10|max:500',
            'enlace'=>'required|mimes:pdf,txt,xlsx,xls,pptx,ppt,doc,docx'
        ];
    }

    public function messages()
    {
        return[
            'titulo.required'=>'El Documento debe tener un titulo',
            'titulo.unique'=>'Ya existe un documento con ese titulo',
            'titulo.min'=>'El titulo debe tener como minimo 10 caracteres',
            'titulo.max'=>'El titulo debe tener como maximo 50 caracteres',
            'descripcion.required'=>'El Documento debe tener una descripcion',
            'descripcion.min'=>'La descripcion debe tener como minimo 10 caracteres',
            'descripcion.max'=>'La descripcion debe tener como maximo 500 caracteres',
            'enlace.required'=>'Se debe subir un archivo',
            'enlace.mimes'=>'Formato Invalido'
        ];
    }
}
