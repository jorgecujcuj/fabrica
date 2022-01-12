<?php

namespace App\Http\Requests\Cliente;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
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
            'nombre' => ['required','string','unique:clientes,nombre,' . $this->route('cliente')->id,'max:75'],
            'nit' => ['required','unique:clientes,nit,'. $this->route('cliente')->id],
            'direccion' => ['nullable','max:125'],
            'telefono' => ['nullable','numeric','digits:8'],
            'email' => ['nullable','email:rfc,dns','unique:clientes,email,' . $this->route('cliente')->id, 'max:100']
        ];
    }
}
