<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('idproducto');
            $table->string('codigo',20)->unique();
            $table->string('nombre',50)->unique();
            $table->integer('stock');
            $table->string('imagen',50);
            $table->decimal('precio1',12,2);
            $table->enum('status',['ACTIVO','DESACTIVADO'])->default('ACTIVE');
            $table->unsignedBigInteger('idcategoria');
            $table->foreign('idcategoria')->references('idcategoria')->on('categorias');
            $table->unsignedBigInteger('idproveedor');
            $table->foreign('idproveedor')->references('idproveedor')->on('proveedores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
