<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProveedorRequest extends FormRequest
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
            'nombre' => ['required','unique:proveedor,nombre' . $this->route('proveedor')->idproveedor,'max:50'],
            'email' => ['required','email:rfc,dns','unique:proveedor,email' . $this->route('proveedor')->idproveedor, 'max:100'],
            'dpi' => ['nullable','numeric','unique:proveedor,dpi' . $this->route('proveedor')->idproveedor,'min:13','max:13'],
            'direccion' => ['nullable','max:75'],
            'telefono' => ['required','numeric','unique:proveedor,telefono' . $this->route('proveedor')->idproveedor,'min:8','max:12'],
        ];
    }
}
