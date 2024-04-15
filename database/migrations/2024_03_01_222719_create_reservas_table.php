<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->integer('idcliente');
            $table->integer('idfuncionario');
            $table->integer('idquarto');
            $table->enum('situacao', ['Pago','Pendente']);
            $table->decimal('valortotal', 8,2);
            $table->date('dataentrada');
            $table->date('datasaida');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
