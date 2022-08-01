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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id('idproveedor');
            $table->string('nombreCompania',40);
            $table->string('nombreContacto',30);
            $table->string('cargoContacto',60);
            $table->string('direccion',15);
            $table->string('ciudad',15);
            $table->string('region',15)->nullable();
            $table->string('codPostal',10);
            $table->string('pais',15);
            $table->string('telefono',24)->nullable();
            $table->string('fax',24)->nullable();
            $table->longtext('paginaPrincipal')->nullable();
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
        Schema::dropIfExists('proveedores');
    }
};
