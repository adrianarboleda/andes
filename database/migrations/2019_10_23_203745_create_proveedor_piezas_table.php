<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorPiezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor_piezas', function (Blueprint $table) {
            $table->unsignedBigInteger('proveedor_id');
            $table->unsignedBigInteger('pieza_id');

            $table->foreign('proveedor_id')->references('id')->on('proveedors')->onDelete('cascade');
            $table->foreign('pieza_id')->references('id')->on('piezas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedor_piezas');
    }
}
