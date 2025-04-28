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
        Schema::create('loans', function (Blueprint $table) {
            $table->id('id'); // id_prestamo
            $table->unsignedBigInteger('user_id'); // id_usuario
            $table->date('loan_date'); // fecha_prestamo
            $table->unsignedBigInteger('loan_detail_id'); // id_detalle_prestamo
            $table->unsignedBigInteger('signer_id'); // id_firmante
            $table->boolean('returned'); // devuelto
            $table->date('extension_date')->nullable(); // fecha_prorroga
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
    $table->foreign('loan_detail_id')->references('id')->on('loan_detail');
    $table->foreign('signer_id')->references('id')->on('signers');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
