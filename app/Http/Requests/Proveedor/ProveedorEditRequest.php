<?php

namespace App\Http\Requests\Proveedor;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorEditRequest extends FormRequest
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
            'nombre' => ['required','unique:proveedores,nombre,' . $this->route('proveedor')->id,'max:50'],
            'email' => ['required','email:rfc,dns','unique:Proveedores,email,' . $this->route('proveedor')->id, 'max:100'],
            'dpi' => ['nullable','numeric','unique:Proveedores,dpi,' . $this->route('proveedor')->id,'digits:13'],
            'direccion' => ['nullable','max:125'],
            'telefono' => ['required','numeric','unique:Proveedores,telefono,' . $this->route('proveedor')->id,'digits:8'],
        ];
    }
}
