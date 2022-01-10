<?php

namespace App\Http\Requests\Categoria;

use Illuminate\Foundation\Http\FormRequest;


class CategoriaEditRequest extends FormRequest
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
            'nombre'   =>   ['required','max:50','unique:categorias,nombre,' . $this->route('categoria')->id],
            'descripcion' => ['nullable','max:100'],
        ];
    }
}
