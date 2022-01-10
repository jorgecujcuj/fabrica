<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    
    protected $primaryKey = 'idventa';

    /**
     * Atributos que deberían ser asignables en masa.
     *
     * @var array
     */
    protected $fillable = [
        'idcliente',
        'iduser',
        'fecha_venta',
        'inpuesto',
        'total',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
    
    public function detallesventa(){
        return $this->hasMany(DetallesVenta::class);
    }

}
