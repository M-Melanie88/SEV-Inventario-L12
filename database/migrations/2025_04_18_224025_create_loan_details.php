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
        Schema::create('loan_details', function (Blueprint $table) {
            $table->id('id'); // id_detalle_prestamo
            $table->unsignedBigInteger('equipment_type_id'); // id_tipo_equipo
            $table->text('description'); // descripcion
            $table->text('brand'); // marca
            $table->text('model'); // modelo
            $table->integer('quantity'); // cantidad
            $table->string('serial_number'); // serie
            $table->string('inventory_code'); // inventario
            $table->text('remarks')->nullable(); // observaciones
            $table->timestamps();
            

            // Foreign key example if related to tipo_equipo table
            $table->foreign('equipment_type_id')->references('id')->on('equipment_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_detail');
    }
};
