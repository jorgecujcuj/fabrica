<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    protected $primaryKey = 'id';

    /**
     * Atributos que deberían ser asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
        'codigo',
        'nombre',
        'stock',
        'imagen',
        'precio1',
        'status',
        'idcategoria',
        'idproveedor',
    ];

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria','idcategoria','id');
    }

    public function proveedor(){
        return $this->belongsTo('App\Models\Proveedor','idproveedor','id');
    }

}
