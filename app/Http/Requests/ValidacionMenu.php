<?php

namespace App\Http\Requests;

use App\Rules\ValidarCampoUrl;
use Illuminate\Foundation\Http\FormRequest;

class ValidacionMenu extends FormRequest
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
            'Nombre'    =>  'required|max:50|unique:menus,Nombre' . $this->route('IdMenu'),
            'Url'       =>  ['required','max:100', new ValidarCampoUrl],
            'icono'     =>  'nullable|max:50'
        ];
    }
    
}
