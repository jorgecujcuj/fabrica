<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallesCompra extends Model
{

    protected $primaryKey = 'id';

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
        return $this->belongsTo('App\Models\Compra','idcompra','id');
    }

    public function producto(){
        return $this->belongsTo('App\Models\Producto','idproducto','id');
    }

}
