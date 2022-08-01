<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('idproducto');
            $table->string('nombreProducto',25)->nullable();
            $table->unsignedBigInteger('idProveedor')->nullable();
            $table->unsignedBigInteger('idCategoria')->nullable();
            $table->foreign('idProveedor')->references('idproveedor')->on('proveedores')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idCategoria')->references('idcategoria')->on('categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->string('cantidadPorUnidad',25)->nullable();
            $table->float('precioUnidad',12,2)->nullable();
            $table->integer('unidadesEnExistencia')->length(10)->nullable();
            $table->integer('unidadesEnPedido')->length(10)->nullable();
            $table->integer('nivelNuevoPedido')->length(10)->nullable();
            $table->integer('suspendido')->length(10)->nullable();
            $table->string('categoriaProducto',25)->nullable();         
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
};
