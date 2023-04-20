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
        Schema::create('agencias', function (Blueprint $table) {
            $table->id();
            $table->string("nombre_agencia");
            $table->string('tipo_agencia');
            $table->string("ciudad");
            $table->string("estado");
            $table->string("pais");
            $table->string("nombre_cliente");
            $table->string("mail");
            $table->string("telefono");
            $table->string("agency");
            $table->date('fecha_compra');
            $table->string("modalidad");
            $table->string("monto_pago");
            $table->string("vendedor");
            $table->string("porcentaje");

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
        Schema::dropIfExists('agencias');


    }
};
