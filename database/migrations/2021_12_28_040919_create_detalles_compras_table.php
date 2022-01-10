<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_compras', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('idcompra');
            $table->foreign('idcompra')->references('id')->on('compras');
            $table->unsignedBigInteger('idproducto');
            $table->foreign('idproducto')->references('id')->on('productos');

            $table->integer('cantidad');
            $table->decimal('precio');

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
        Schema::dropIfExists('detalles_compras');
    }
}
