<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $primaryKey = 'id';

    /**
     * Atributos que deberían ser asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
        'idproveedor',
        'iduser',
        'fecha_compra',
        'inpuesto',
        'total',
        'status',
        'imagen',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User','iduser','id');
    }

    public function proveedor(){
        return $this->belongsTo('App\Models\Proveedor','idproveedor','id');
    }

    public function detallesCompra(){
        return $this->hasMany('App\Models\DetallesCompra','id','idcompra');
    }

}
