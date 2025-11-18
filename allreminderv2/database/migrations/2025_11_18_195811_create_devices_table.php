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
    Schema::create('devices', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');         // właściciel urządzenia
        $table->string('name');                        // np. "Pralka Bosch"
        $table->string('category')->nullable();        // np. "pralka", "klimatyzacja"
        $table->string('model')->nullable();
        $table->string('serial_number')->nullable();
        $table->date('purchase_date')->nullable();     // data zakupu
        $table->date('warranty_until')->nullable();    // gwarancja do
        $table->timestamps();

        $table->foreign('user_id')
              ->references('id')
              ->on('users')
              ->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
