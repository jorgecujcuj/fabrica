<?php

namespace App\Http\Requests\Proveedor;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorCreateRequest extends FormRequest
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

           'nombre' => ['required','unique:proveedores,nombre','max:50'],
            'email' => ['required','email:rfc,dns','unique:proveedores,email', 'max:100'],
            'dpi' => ['nullable','numeric','unique:proveedores,dpi','digits:13'],
            'direccion' => ['nullable','max:125'],
            'telefono' => ['required','numeric','unique:proveedores,telefono','digits:8'],

        ];
    }
}
