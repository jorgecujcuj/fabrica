<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    protected $primaryKey = 'id';

    /**
     * Atributos que deberían ser asignables en masa.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion'];

    public function producto(){
        return $this->hasMany('App\Models\Producto','id','idproducto');
    }

}
