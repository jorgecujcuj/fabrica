<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $primaryKey = 'idproveedor';

    /**
     * Atributos que deberían ser asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'email',
        'dpi',
        'direccion',
        'telefono'
    ];

    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
