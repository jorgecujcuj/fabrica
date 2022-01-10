<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallesCompra extends Model
{

    protected $primaryKey = 'iddetallecompra';

    /**
     * Atributos que deberían ser asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
        'idcompra',
        'idproducto',
        'cantidad',
        'precio',
    ];

    public function compra(){
        return $this->belongsTo(Compra::class);
    }

    public function producto(){
        return $this->belongsTo(Producto::class);
    }

}
