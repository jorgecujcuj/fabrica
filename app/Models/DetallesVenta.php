<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class DetallesVenta extends Model
{

    protected $primaryKey = 'iddetalleventa';

    /**
     * Atributos que deberían ser asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
        'idventa',
        'idproducto',
        'cantidad',
        'precio',
        'descuento',
    ];

    public function producto(){
        return $this->belongsTo(Producto::class);
    }

}
