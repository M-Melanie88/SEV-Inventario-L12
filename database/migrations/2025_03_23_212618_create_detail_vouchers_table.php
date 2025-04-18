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
        Schema::create('detail_vouchers', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('id_voucher');
            $table->foreign('id_voucher')->references('id')->on('vouchers');
            $table->unsignedBigInteger('id_consumable');
            $table->foreign('id_consumable')->references('id')->on('consumables');
            
            $table->string('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_vouchers');
    }
};
