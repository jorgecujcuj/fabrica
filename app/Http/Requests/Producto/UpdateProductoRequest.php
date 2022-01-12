<?php

namespace App\Http\Requests\Producto;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductoRequest extends FormRequest
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
            'nombre' => ['required','unique:productos,nombre,' . $this->route('producto')->id,'max:50'],
            /*'image' => ['required','image','dimensions:min_width=100,min_height=200'],*/
            'precio1' => ['required'],
            'idcategoria' => ['required','integer','exists:App\Models\Categoria,id'],
            'idproveedor' => ['required','integer','exists:App\Models\Proveedor,id'],
        ];
    }
}
