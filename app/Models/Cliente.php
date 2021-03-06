<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primaryKey = 'id';

    /**
     * Atributos que deberían ser asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'nit',
        'direccion',
        'telefono',
        'email',
    ];

}
