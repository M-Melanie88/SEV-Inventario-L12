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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->timestamp('issue_date');
            $table->string('number_ofice');
            $table->string('observations');
            $table->unsignedBigInteger('id_department');
            $table->foreign('id_department')->references('id')->on('departments');
            $table->string('sheet_dti');

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedBigInteger('id_signatory');
            $table->foreign('id_signatory')->references('id')->on('signers');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
