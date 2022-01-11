<?php

namespace App\Http\Requests\Producto;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
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
            'codigo' => ['required','unique:productos,codigo','max:50'],
            'nombre' => ['required','unique:productos,nombre','max:50'],
            /*'image' => ['required','image','mimes:jpeg,png,jpg,gif','max:2048','dimensions:width=500,height=500'],*/
            'precio1' => ['required','numeric','regex:/^[\d]{0,11}(\.[\d]{1,2})?$/'],
            'idcategoria' => ['required','integer','exists:App\Models\Categoria,id'],
            'idproveedor' => ['required','integer','exists:App\Models\Proveedor,id'],
        ];
    }
}
