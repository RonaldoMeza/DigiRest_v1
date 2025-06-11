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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();  

            $table->string('customer_name');  // Nombre del cliente
            $table->string('customer_phone');  // Número de celular del cliente
            $table->date('date');  // Fecha para la reserva
            $table->time('start_time');  // Hora inicio para la reserva
            $table->time('end_time')->nullable();   // Hora fin para la reserva
            $table->unsignedInteger('guests'); // Comensales

            $table->foreignId('table_id') // Comensales
                ->constrained('tables')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->enum('status', ['pending', 'confirmed', 'cancelled', 'finished'])  // Estado de la reserva por defecto pendiente
                ->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
        
    }
};
