<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
        if ($this->method()=='PUT') {

            return [
               'name'=>'required|min:5',
               'category_id'=>'required',
               'content'=>'required'
            ];
        }
        else {
            return [
               'name'=>'required|min:5',
               'category_id'=>'required',
               'image'=>'required',
               'content'=>'required'
               ];
        }
    }
    public function messages()
    {
         return [
            'name.required'=>'El campo Nombre es requerido',
            'name.min'=>'El campo Nombre no puede tener menos de 5 caracteres',
            'image.required'=>'Debe seleccionar algun tipo de archivo',
            'image' => 'required|mimes:png|max:1000',
            'category_id.required'=>'El campo Categoria es requerido',
            'content.required'=>'El campo Contenido es requerido',
            'content.min'=>'El campo Contenido no puede tener menos de 5 caracteres'
        ];
    }
}
